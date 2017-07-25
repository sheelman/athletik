
/* Background Images
-------------------------------------------------------------------*/
var  pageTopImage = jQuery('#page-top').data('background-image');
var  portfolioImage = jQuery('#portfolio').data('background-image');
var  lettreImage = jQuery('#lettre').data('background-image');
var  contactImage = jQuery('#contact').data('background-image');
var  resultatImage = jQuery('#resultat').data('background-image');
var  classementImage = jQuery('#classement').data('background-image');
var  registerImage = jQuery('#register').data('background-image');
var  loginImage = jQuery('#login').data('background-image');
var  profileImage = jQuery('#profile').data('background-image');


if (pageTopImage) {  jQuery('#page-top').css({ 'background-image':'url(' + pageTopImage + ')' }); };
if (portfolioImage) {  jQuery('#portfolio').css({ 'background-image':'url(' + portfolioImage + ')' }); };
if (lettreImage) {  jQuery('#lettre').css({ 'background-image':'url(' + lettreImage + ')' }); };
if (contactImage) {  jQuery('#contact').css({ 'background-image':'url(' + contactImage + ')' }); };
if (resultatImage) {  jQuery('#resultat').css({ 'background-image':'url(' + resultatImage + ')' }); };
if (classementImage) {  jQuery('#classement').css({ 'background-image':'url(' + classementImage + ')' }); };
if (registerImage) {  jQuery('#register').css({ 'background-image':'url(' + registerImage + ')' }); };
if (loginImage) {  jQuery('#login').css({ 'background-image':'url(' + loginImage + ')' }); };
if (profileImage) {  jQuery('#profile').css({ 'background-image':'url(' + profileImage + ')' }); };

/* Background Images End
-------------------------------------------------------------------*/



/* Document Ready function
-------------------------------------------------------------------*/
jQuery(document).ready(function($) {

	"use strict";


    /* Window Height Resize
    -------------------------------------------------------------------*/
    var windowheight = jQuery(window).height();
    if(windowheight > 650)
    {
         $('.pattern').removeClass('height-resize');
    }
    /* Window Height Resize End
    -------------------------------------------------------------------*/


    
	/* Main Menu   
	-------------------------------------------------------------------*/
	$('#main-menu #headernavigation').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		scrollOffset: 0,
		filter: '',
		easing: 'swing'
	});  

	/* Main Menu End  
	-------------------------------------------------------------------*/



	/* Time Countdown 
	-------------------------------------------------------------------*/
	$('#time_countdown').countDown({
        
         targetDate: {
            'day': 28,
            'month': 7,
            'year': 2017,
            'hour': 14,
            'min': 0,
            'sec': 0
        },
         omitWeeks: true

        // targetOffset: {
        //    'day':      0,
        //    'month':    0,
        //    'year':     1,
        //    'hour':     0,
        //    'min':      0,
        //    'sec':      3
	//	},
	//	omitWeeks: true

	    });



    /* Time Countdown End
	-------------------------------------------------------------------*/




	/* Next Section   
	-------------------------------------------------------------------*/
	$('.next-section .go-to-portfolio').click(function() {
    	$('html,body').animate({scrollTop:$('#portfolio').offset().top}, 1000);
  	});
  	$('.next-section .go-to-lettre').click(function() {
    	$('html,body').animate({scrollTop:$('#lettre').offset().top}, 1000);
  	});
  	$('.next-section .go-to-contact').click(function() {
    	$('html,body').animate({scrollTop:$('#contact').offset().top}, 1000);
  	});
  	$('.next-section .go-to-page-top').click(function() {
    	$('html,body').animate({scrollTop:$('#page-top').offset().top}, 1000);
  	});
        $('.next-section .go-to-resultat').click(function() {
    	$('html,body').animate({scrollTop:$('#resultat').offset().top}, 1000);
  	});
        $('.next-section .go-to-classement').click(function() {
    	$('html,body').animate({scrollTop:$('#classement').offset().top}, 1000);
  	});
        $('.next-section .go-to-register').click(function() {
    	$('html,body').animate({scrollTop:$('#register').offset().top}, 1000);
  	});
        $('.next-section .go-to-login').click(function() {
    	$('html,body').animate({scrollTop:$('#login').offset().top}, 1000);
  	});
        $('.next-section .go-to-profile').click(function() {
    	$('html,body').animate({scrollTop:$('#profile').offset().top}, 1000);
  	});

  	/* Next Section End
	-------------------------------------------------------------------*/




	/* Subscribe
	-------------------------------------------------------------------*/



	/* Subscribe End
	-------------------------------------------------------------------*/




	/* Contact
	-------------------------------------------------------------------*/
    $('#contact-submit').click(function () {
        $('.first-name-error, .last-name-error, .contact-email-error, .contact-subject-error, .contact-message-error').hide();
        var first_nameVal = $('input[name=first_name]').val();
        var last_nameVal = $('input[name=last_name]').val();
        var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
        var emailVal = $('#contact_email').val();
        var contact_subjectVal = $('input[name=contact_subject]').val();
        var messageVal = $('textarea[name=message]').val();

        //validate

        if (first_nameVal == '' || first_nameVal == 'First Name *') {
            $('.first-name-error').html('<i class="fa fa-exclamation"></i> First name is required.').fadeIn();
            return false;
        }
        if (last_nameVal == '' || last_nameVal == 'Last Name *') {
            $('.last-name-error').html('<i class="fa fa-exclamation"></i> Last name is required.').fadeIn();
            return false;
        }
        if (emailVal == "" || emailVal == "Email Address *") {

            $('.contact-email-error').html('<i class="fa fa-exclamation"></i> Your email address is required.').fadeIn();
            return false;

        } else if (!emailReg.test(emailVal)) {

            $('.contact-email-error').html('<i class="fa fa-exclamation"></i> Invalid email address.').fadeIn();
            return false;
        }
         if (contact_subjectVal == '' || contact_subjectVal == 'Subject *') {
            $('.contact-subject-error').html('<i class="fa fa-exclamation"></i> Subject is required.').fadeIn();
            return false;
        }
        if (messageVal == '' || messageVal == 'Message *') {
            $('.contact-message-error').html('<i class="fa fa-exclamation"></i> Please provide a message.').fadeIn();
            return false;
        }

        var data_string = $('.contact-form').serialize();

        $('#contact-submit').hide();
        $('#contact-loading').fadeIn();
        $('.contact-error-field').fadeOut();

        $.ajax({
            type: "POST",
            url: "php/contact.php",
            data: data_string,

            //success
            success: function (data) {

                $('.contact-box-hide').slideUp();
                $('.contact-message').html('<i class="fa fa-check contact-success"></i><div>Your message has been sent.</div>').fadeIn();
            },
            error: function (data) {

                $('.btn-contact-container').hide();
                $('.contact-message').html('<i class="fa fa-exclamation contact-error"></i><div>Something went wrong, please try again later.</div>').fadeIn();
            }

        }) //end ajax call
        return false;
    });

	/* Contact End
	-------------------------------------------------------------------*/


    

    



});

/* Document Ready function End
-------------------------------------------------------------------*/


/* Preloder 
-------------------------------------------------------------------*/
$(window).load(function () {    
    "use strict";
    $("#loader").fadeOut();
    $("#preloader").delay(350).fadeOut("slow");
});
 /* Preloder End
-------------------------------------------------------------------*/
   
