/*
*Developed and Maintaining by:Siddharth Singh, v 01.00
*Detail:Use for  Om Change Login Design
*Author URI: https://sanditsolution.com
*Email:siddharthsingh91@gmail.com
*/
// JavaScript Document
jQuery(document).ready(function(e) {
	preMessage=Object();
    preMessage.top_bar=jQuery("#top_bar_message").val();
	preMessage.footer_bar=jQuery("#footer_bar_message").val();
	preMessage.middle_alert=jQuery("#middle_alert_message").val();

    jQuery("#submit_message").click(function(e) {
    jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-warning">Please wait....</p>');
	message=Object();
    message.top_bar=jQuery("#top_bar_message").val();
	message.footer_bar=jQuery("#footer_bar_message").val();
	message.middle_alert=jQuery("#middle_alert_message").val();
	message.logo=jQuery("#om_login_change_logo").val();

	if(message.logo==""){jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-danger"> ! Please upload your logo.</p>'); return false; }
	if((preMessage.top_bar == message.top_bar) & (preMessage.footer_bar == message.footer_bar) & (preMessage.middle_alert == message.middle_alert)){jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-danger"> ! You need to update the content before submit</p>'); return false;}


jQuery.ajax({
	     beforeSend:function(){
			jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-warning">Please wait....</p>');
			},
		type:'POST',
		url: om_change_login_admin_script.ajaxurl,
		data:{'message': message, 'action': 'om_change_login_admin_reponse','security': om_change_login_admin_script.ajax_nonce}
		}).success(function(resultData){
		  if(jQuery.trim(resultData) == "success"){
    	  jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-success">Your message update successfully</p>'); return false;
				}else{
				jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-warning">!Something went wrong try again later</p>'); return false;
					}
			}).error(function(){
				jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-danger">Something went wrong try again later</p>'); return false;
				})
    });



	jQuery("#update_setting").click(function(e) {
		jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-warning">Please wait....</p>');
		setting=Object();
		setting.top_bar=jQuery("#om_top_bar_setting").prop('checked');
		setting.footer_bar=jQuery("#om_footer_bar_setting").prop('checked');
		setting.middle_alert=jQuery("#om_middle_bar_setting").prop('checked');
		});



});



// js for menu
(function($) {
	"use strict";
	var openBtn = $("#open-button"),
	  colseBtn = $("#close-button"),
	  menu = $(".menu-wrap");
	// Open menu when click on menu button
	openBtn.on("click", function() {
	  menu.addClass("active");
	});
	// Close menu when click on Close button
	colseBtn.on("click", function() {
	  menu.removeClass("active");
	});
	// Close menu when click on anywhere on the document
	$(document).on("click", function(e) {
	  var target = $(e.target);
	  if (target.is(".menu-wrap, .menu, .icon-list, .icon-list a, .icon-list a span, #open-button") === false) {
		menu.removeClass("active");
		e.stopPropagation();
	  }
	});
  })(jQuery);
