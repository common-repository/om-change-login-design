<?php
/* Plugin Name: OM CHANGE LOGIN DESIGN
 * Plugin URI: http://sanditsolution.com/
 * Description: Om Change Login Design
 * Version: 01.00.05
 * Author:Siddharth Singh
 * Author URI:http://sanditsolution.com/about
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
 include_once dirname( __FILE__ ) . '/inc/Om_change_login_design_class.php';
 $Om_change_login_design_class = new Om_change_login_design_class();
 register_activation_hook( __FILE__, array( 'Om_change_login_design_class', 'plugin_activation' ) );
 register_deactivation_hook( __FILE__, array( 'Om_change_login_design_class', 'plugin_deactivation' ));
 //* Add custom message to WordPress login page
add_filter( 'login_message', array( $Om_change_login_design_class, 'om_change_login_top_text') );
add_action( 'login_enqueue_scripts', array( $Om_change_login_design_class, 'om_change_login_design_logo'));
add_filter( 'login_headerurl', array( $Om_change_login_design_class, 'om_change_login_design_url') );
add_filter( 'login_headertext', array( $Om_change_login_design_class, 'om_change_login_design_title') );
add_filter( 'login_footer', array( $Om_change_login_design_class, 'om_change_login_footer_text') );

include_once dirname( __FILE__ ) . '/including_js_css.php';


 //Add action link start
 add_filter( 'plugin_action_links', 'om_change_login_design_add_action', 10, 5 );
 function om_change_login_design_add_action( $actions, $plugin_file ){
 static $plugin; if(!isset($plugin))$plugin = plugin_basename(__FILE__);
 if ($plugin == $plugin_file) {
 $more_product = array('more product' => '<a href="http://www.sanditsolution.com/shops/">' . __('More Product', 'General') . '</a>');
 $site_link = array('support' => '<a href="http://www.sanditsolution.com/contact.html" target="_blank">Support</a>');
 $became_client = array('became client' => '<a href="http://doc.sanditsolution.com/register/" target="_blank">Became Client</a>');
 $actions = array_merge($more_product, $actions);
 $actions = array_merge($site_link, $actions);
 $actions = array_merge($became_client, $actions);
 }return $actions;}




 if ( is_admin() ) :
 require_once dirname( __FILE__ ) . '/admin/function/admin_main_menu.php';
 require_once dirname( __FILE__ ) . '/admin/function/form_submit.php';

 if(isset($_GET['page']) == 'om-change-admin-login-design'){
 require_once dirname( __FILE__ ) . '/admin/function/include_js_css.php';
 require_once dirname( __FILE__ ) . '/admin/function/admin_function.php';
 } endif; ?>
