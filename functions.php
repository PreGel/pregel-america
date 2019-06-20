<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
function pg_custom_enqueue_child_theme_styles() {
wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/assets/styles/style.css' );
//wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/countdown.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'pg_custom_enqueue_child_theme_styles' );

// Use this as a template for custom post types
require_once(get_template_directory().'/functions/popkit-post-type.php');

// this is because the typkit is maxed out, removing default kit id and replacing with dupe kit id - may need to move this function to child theme level for all?
function wpdocs_dequeue_script() {
   wp_dequeue_script( 'theme_typekit' );
}
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );

function theme_typekit_child() {
      wp_enqueue_script( 'theme_typekit_child', 'https://use.typekit.net/mnx5izo.js', '', false);
  }
  add_action( 'wp_enqueue_scripts', 'theme_typekit_child' );

function theme_typekit_inline_child() {
    if ( wp_script_is( 'theme_typekit_child', 'done' ) ) { ?>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php }
  }
  add_action( 'wp_head', 'theme_typekit_inline_child' );

/**
* Limit How Many Checkboxes Can Be Checked
* http://gravitywiz.com/2012/06/11/limiting-how-many-checkboxes-can-be-checked/
*/

class GFLimitCheckboxes {

    private $form_id;
    private $field_limits;
    private $output_script;

    function __construct($form_id, $field_limits) {

        $this->form_id = $form_id;
        $this->field_limits = $this->set_field_limits($field_limits);

        add_filter("gform_pre_render_$form_id", array(&$this, 'pre_render'));
        add_filter("gform_validation_$form_id", array(&$this, 'validate'));

    }

    function pre_render($form) {

        $script = '';
        $output_script = false;

        foreach($form['fields'] as $field) {

            $field_id = $field['id'];
            $field_limits = $this->get_field_limits($field['id']);

            if( !$field_limits                                          // if field limits not provided for this field
                || RGFormsModel::get_input_type($field) != 'checkbox'   // or if this field is not a checkbox
                || !isset($field_limits['max'])        // or if 'max' is not set for this field
                )
                continue;

            $output_script = true;
            $max = $field_limits['max'];
            $selectors = array();

            foreach($field_limits['field'] as $checkbox_field) {
                $selectors[] = "#field_{$form['id']}_{$checkbox_field} .gfield_checkbox input:checkbox";
            }

            $script .= "jQuery(\"" . implode(', ', $selectors) . "\").checkboxLimit({$max});";

        }

        GFFormDisplay::add_init_script($form['id'], 'limit_checkboxes', GFFormDisplay::ON_PAGE_RENDER, $script);

        if($output_script):
            ?>

            <script type="text/javascript">
            jQuery(document).ready(function($) {
                $.fn.checkboxLimit = function(n) {

                    var checkboxes = this;

                    this.toggleDisable = function() {

                        // if we have reached or exceeded the limit, disable all other checkboxes
                        if(this.filter(':checked').length >= n) {
                            var unchecked = this.not(':checked');
                            unchecked.prop('disabled', true);
                        }
                        // if we are below the limit, make sure all checkboxes are available
                        else {
                            this.prop('disabled', false);
                        }

                    }

                    // when form is rendered, toggle disable
                    checkboxes.bind('gform_post_render', checkboxes.toggleDisable());

                    // when checkbox is clicked, toggle disable
                    checkboxes.click(function(event) {

                        checkboxes.toggleDisable();

                        // if we are equal to or below the limit, the field should be checked
                        return checkboxes.filter(':checked').length <= n;
                    });

                }
            });
            </script>

            <?php
        endif;

        return $form;
    }

    function validate($validation_result) {

        $form = $validation_result['form'];
        $checkbox_counts = array();

        // loop through and get counts on all checkbox fields (just to keep things simple)
        foreach($form['fields'] as $field) {

            if( RGFormsModel::get_input_type($field) != 'checkbox' )
                continue;

            $field_id = $field['id'];
            $count = 0;

            foreach($_POST as $key => $value) {
                if(strpos($key, "input_{$field['id']}_") !== false)
                    $count++;
            }

            $checkbox_counts[$field_id] = $count;

        }

        // loop through again and actually validate
        foreach($form['fields'] as &$field) {

            if(!$this->should_field_be_validated($form, $field))
                continue;

            $field_id = $field['id'];
            $field_limits = $this->get_field_limits($field_id);

            $min = isset($field_limits['min']) ? $field_limits['min'] : false;
            $max = isset($field_limits['max']) ? $field_limits['max'] : false;

            $count = 0;
            foreach($field_limits['field'] as $checkbox_field) {
                $count += rgar($checkbox_counts, $checkbox_field);
            }

            if($count < $min) {
                $field['failed_validation'] = true;
                $field['validation_message'] = sprintf( _n('You must select at least %s item.', 'You must select at least %s items.', $min), $min );
                $validation_result['is_valid'] = false;
            }
            else if($count > $max) {
                $field['failed_validation'] = true;
                $field['validation_message'] = sprintf( _n('You may only select %s item.', 'You may only select %s items.', $max), $max );
                $validation_result['is_valid'] = false;
            }

        }

        $validation_result['form'] = $form;

        return $validation_result;
    }

    function should_field_be_validated($form, $field) {

        if( $field['pageNumber'] != GFFormDisplay::get_source_page( $form['id'] ) )
    		return false;

        // if no limits provided for this field
        if( !$this->get_field_limits($field['id']) )
            return false;

        // or if this field is not a checkbox
        if( RGFormsModel::get_input_type($field) != 'checkbox' )
            return false;

        // or if this field is hidden
        if( RGFormsModel::is_field_hidden($form, $field, array()) )
            return false;

        return true;
    }

    function get_field_limits($field_id) {

        foreach($this->field_limits as $key => $options) {
            if(in_array($field_id, $options['field']))
                return $options;
        }

        return false;
    }

    function set_field_limits($field_limits) {

        foreach($field_limits as $key => &$options) {

            if(isset($options['field'])) {
                $ids = is_array($options['field']) ? $options['field'] : array($options['field']);
            } else {
                $ids = array($key);
            }

            $options['field'] = $ids;

        }

        return $field_limits;
    }

}

new GFLimitCheckboxes(115, array(
    5 => array(
        'min' => 2, 
        'max' => 3
        ),
    13 => array(
        'max' => 3
        )
    ));

function post_like_table_create() {

global $wpdb;
$table_name = $wpdb->prefix. "post_like_table";
global $charset_collate;
$charset_collate = $wpdb->get_charset_collate();
global $db_version;

if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") != $table_name)
{ $create_sql = "CREATE TABLE " . $table_name . " (
id INT(11) NOT NULL auto_increment,
postid INT(11) NOT NULL ,

clientip VARCHAR(40) NOT NULL ,

PRIMARY KEY (id))$charset_collate;";
require_once(ABSPATH . "wp-admin/includes/upgrade.php");
dbDelta( $create_sql );
}



//register the new table with the wpdb object
if (!isset($wpdb->post_like_table))
{
$wpdb->post_like_table = $table_name;
//add the shortcut so you can use $wpdb->stats
$wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
}

}
add_action( 'init', 'post_like_table_create');

// Add the JS
function theme_name_scripts() {
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/post-like.js', array('jquery'), '1.0.0', true );
wp_localize_script( 'script-name', 'MyAjax', array(
// URL to wp-admin/admin-ajax.php to process the request
'ajaxurl' => admin_url( 'admin-ajax.php' ),
// generate a nonce with a unique ID "myajax-post-comment-nonce"
// so that you can check it later when an AJAX request is sent
'security' => wp_create_nonce( 'my-special-string' )
));
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// The function that handles the AJAX request

function get_client_ip() {
$ip=$_SERVER['REMOTE_ADDR']; 
return $ip;
}

function my_action_callback() {
check_ajax_referer( 'my-special-string', 'security' );
$postid = intval( $_POST['postid'] );
$clientip=get_client_ip();
$like=0;
$dislike=0;
$like_count=0;
//check if post id and ip present
global $wpdb;
$row = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid' AND clientip = '$clientip'");
if(empty($row)){
//insert row
$wpdb->insert( $wpdb->post_like_table, array( 'postid' => $postid, 'clientip' => $clientip ), array( '%d', '%s' ) );
//echo $wpdb->insert_id;
$like=1;
}
if(!empty($row)){
//delete row
$wpdb->delete( $wpdb->post_like_table, array( 'postid' => $postid, 'clientip'=> $clientip ), array( '%d','%s' ) );
$dislike=1;
}

//calculate like count from db.
$totalrow = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
$total_like=$wpdb->num_rows;
$data=array( 'postid'=>$postid,'likecount'=>$total_like,'clientip'=>$clientip,'like'=>$like,'dislike'=>$dislike);
echo json_encode($data);
//echo $clientip;
die(); // this is required to return a proper result
}
add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );