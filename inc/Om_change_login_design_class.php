<?php
class Om_change_login_design_class
{
    protected $om_login_design_detail;


    public function __construct() {
      if(!get_option('om_change_login_design_setting')){
       $message = array( 'top_bar'=>"", 'footer_bar'=>"", 'middle_alert'=>"", 'logo'=>"" );
       update_option('om_change_login_design_setting', $message);
    }
      $this->om_login_design_detail = get_option('om_change_login_design_setting');
     }


    // Adding plugin setting.
    public static function plugin_activation() {
        add_option( 'om_change_login_design_setting', 'yes');
    }

     // Deleting plugin setting.
      public static function plugin_deactivation() {
        delete_option( 'om_change_login_design_setting');
    }

  public function om_change_login_top_text( $message ) {
        $top_message = $this->om_login_design_detail['top_bar'];
        if (!empty($top_message) ){
            return '<div class="om_login_design_top_text">'.esc_html($top_message).'</div>';
        } else {
            return esc_html($top_message);
        }
    }


    public function om_change_login_design_logo() {
    $site_logo_id = $this->om_login_design_detail['logo'];
    if($site_logo_id==NULL){ //Nothong to do 
    }else{
    if(isset($site_logo_id)){
    $om_image_url = wp_get_attachment_image_src( $site_logo_id,'full'); }
    echo '<style type="text/css"> #login h1 a, .login h1 a{ background-image: url('. esc_url($om_image_url[0]).') !important;}</style>';}}


    function om_change_login_footer_text() {
      $footer_bar = $this->om_login_design_detail['footer_bar'];
      if (!empty($footer_bar) ){
          echo '<p class="om_login_design_footer_text">'.esc_html($footer_bar).'</p>';
      }
    }

   public function om_change_login_design_url() {return home_url();}

   public function om_change_login_design_title() { return esc_html('Please enter your Username and Password.');}
  }
  ?>
