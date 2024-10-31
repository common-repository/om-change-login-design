<?php
function om_change_login_design_scripts() {
 wp_enqueue_script( 'om_stripe_scripts', plugins_url('js/script.js', __FILE__), array('jquery'), '1.0.0', true );
}add_action('login_enqueue_scripts', "om_change_login_design_scripts");



function om_change_login_design_scripts_style() {
 wp_enqueue_style( 'om_stripe_style', plugins_url('css/style.css', __FILE__), array(), '1.0.0', 'all' ); }
add_action('login_enqueue_scripts', "om_change_login_design_scripts_style");  ?>