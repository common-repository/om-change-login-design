<?php
add_action( 'wp_ajax_om_change_login_admin_reponse', 'om_change_login_design_submit' );
function  om_change_login_design_submit(){
$om_user = wp_get_current_user();
if ( in_array( 'administrator', (array) $om_user->roles ) ) {
check_ajax_referer( 'om_change_login-design-submit', 'security' );
$message=(object) $_POST['message'];
$message = sanitize_post($message);
$top_bar= sanitize_text_field($message->top_bar);
$footer_bar= sanitize_text_field($message->footer_bar);
$middle_alert= sanitize_textarea_field($message->middle_alert);
$login_logo = $message->logo;
$message = array( 'top_bar'=>$top_bar, 'footer_bar'=>$footer_bar, 'middle_alert'=>$middle_alert, 'logo'=>$login_logo );
$rows_updated =  update_option('om_change_login_design_setting', $message);
echo ($rows_updated) ? 'success' : 'error' ; die(); }else{
    echo 'error' ; die(); 
} } ?>
