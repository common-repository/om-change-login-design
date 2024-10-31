<?php
function  om_change_login_design_admin_menu(){
 add_menu_page(
 'Om Change Admin Login Design : alert Message',//page title
 'Om Login Design',//Stripe Menu Name 
 'manage_options',
 'om-change-admin-login-design',
 'om_change_login_design',//calling function
 'dashicons-editor-kitchensink','4'); }
add_action('admin_menu','om_change_login_design_admin_menu');
function om_change_login_design() {
include("html_container.php"); } ?>
