<div class="container main_part">
<?php // Main form start form below
$om_login_design_detail = get_option('om_change_login_design_setting'); ?>
<!--row start-->
<div class="row">
  <div id="popupShraddhaMessageOutput"></div>
  <!--sidebar start-->
  <div class="col-md-12 om_popup_head">
  <div class="text-center " role="alert"><b> <?php _e('Admin Login Design','om_popup_shraddha');?></b></div>
  </div>
  <!--/sidebar end-->

  <!--Main data-->
  <div class="col-md-12 om_popup_admin_bar">
  <div class="form-group">
    <label for="inputImageUpload" class="col-sm-2 control-label">Logo</label>
    <div class="col-sm-10">
    <?php 
    $image_id = $om_login_design_detail['logo']; 
    if((isset($image_id) || ($image_id != false) || ($image_id != NULL)) & is_numeric($image_id)){
    $om_image_url = wp_get_attachment_image_src( $image_id, 'full');
    echo '<a href="#" class="misha-upl"><img src="' . esc_url($om_image_url[0]) . '"/></a>
    <a href="#" class="misha-rmv">Remove image</a>
    <input type="hidden" name="misha-img" id="om_login_change_logo" value="' . $image_id . '">';
    } else {
    echo '<a href="#" class="misha-upl">Upload image</a>
    <a href="#" class="misha-rmv" style="display:none">Remove image</a>
    <input type="hidden" name="misha-img" value="" id="om_login_change_logo">';
    }  ?>
    </div>
  </div>


  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        <?php _e('Top Message','om_popup_shraddha');?>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="top_bar_message" placeholder="Top Bar Message" aria-describedby="sizing-addon1" 
        value="<?php echo $om_login_design_detail['top_bar'] ? $om_login_design_detail['top_bar'] : ""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        <?php _e('Footer Message','om_popup_shraddha');?>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="footer_bar_message" placeholder="Footer Bar Message" aria-describedby="sizing-addon1" value="<?php echo $om_login_design_detail['footer_bar'] ? $om_login_design_detail['footer_bar'] : ""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        <?php _e('Login Message','om_popup_shraddha');?>
      </label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" id="middle_alert_message" placeholder="Middle Alert Message"><?php echo $om_login_design_detail['middle_alert'] ? $om_login_design_detail['middle_alert'] : ""; ?>
        </textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10" id="submit_message">
        <button type="submit" class="btn btn-default">
        <?php _e('Submit','om_popup_shraddha');?>
        </button>
      </div>
    </div>
    <!--/Main end-->
  </div>
  <!--row end-->

</div>
<?php // Main form end  ?>


<div class="menu-wrap">
  <nav class="menu">
    <div class="icon-list">
      <a href="https://sanditsolution.com/" target="_blank"><span>Our Site</span></a>
      <a href="<?php echo get_admin_url();?>/admin.php?page=om-change-admin-login-design"><span>Setting</span></a>
    </div>
    <button class="close-button" id="close-button">X</button>
  </nav>
</div>
<button class="menu-button fa fa-bars" id="open-button">=</button>
<div class="content">
</div>