<?php
function om_change_login_admin_js_css() {
wp_enqueue_media();

wp_enqueue_style( 'om_change_login_admin_admin_style', plugin_dir_url( __FILE__ ).'../css/style.css', array(), '1.0.0', 'all' );
wp_enqueue_style( 'om_change_login_admin_style', plugin_dir_url( __FILE__ ).'../../bootstrap/css/bootstrap.min.css', array(), '5.1.0', 'all' );
wp_enqueue_script( 'om_change_login_admin_bootstrap_script', plugin_dir_url( __FILE__ ).'../../bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.1.0', true );
wp_enqueue_script( 'om_image_upload', plugin_dir_url( __FILE__ ).'../js/om_image_upload.js', array('jquery'), '1.2.2', true );
wp_enqueue_script( 'om_change_login_admin_script', plugin_dir_url( __FILE__ ).'../js/om_login_design_script.js', array('jquery'), '1.2.2', true );

$ajax_nonce = wp_create_nonce( "om_change_login-design-submit" );
wp_localize_script( 'om_change_login_admin_script', 'om_change_login_admin_script', array( "ajaxurl" => admin_url( "admin-ajax.php" ),"ajax_nonce" => $ajax_nonce ) ); }
add_action( 'admin_enqueue_scripts', 'om_change_login_admin_js_css' );


?>
