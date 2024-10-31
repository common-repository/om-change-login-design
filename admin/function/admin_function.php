<?php
add_action('admin_enqueue_scripts', 'om_change_admin_login_remove_notic');
add_action('login_enqueue_scripts', 'om_change_admin_login_remove_notic');
function om_change_admin_login_remove_notic() {
echo '<style>.update-nag, .updated, .error, .is-dismissible,.notice-error { display: none !important; }</style>';} ?>
