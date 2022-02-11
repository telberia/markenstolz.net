jQuery(document).ready(function($){
	$('#list-image').slick({
	  dots: false,
	  arrows: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  autoplay: true,
  	  autoplaySpeed: 2000,
	  prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="fal fa-chevron-left"></i></button>',
	  nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="fal fa-chevron-right"></i></button>',
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	      }
	    }
	  ]
	});
	$('.slider-bottom').slick({
	  dots: false,
	  arrows: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  autoplay: true,
  	  autoplaySpeed: 2000,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	      }
	    }
	  ]
	});
	AOS.init();
    $('.wrap-form-request input[type=submit]').prop('disabled', true);
    $(document).on('click','.wrap-form-request input', function(){
        var count_input = 0;
        console.log('yes');
        $(this).closest('form').find('input.wpcf7-validates-as-required').each(function(){
            if(!($(this).val().length)) {
                count_input = count_input + 1;
                if(!($(this).parent().find('span.wpcf7-not-valid-tip').length)) {
                    $('<span class="wpcf7-not-valid-tip" role="alert" aria-hidden="true">Das Feld ist erforderlich.</span>').insertAfter($(this));
                }
            }
            else {
                $(this).parent().find('span.wpcf7-not-valid-tip').remove();
            }
        });
        if ($('.wpcf7-acceptance input').prop('checked')) {
            $('.wpcf7-acceptance').find('span.wpcf7-not-valid-tip').remove();
            if(count_input < 1) {
                $(this).closest('form').find('input[type=submit]').prop('disabled', false);
            }
        }
        else {
            $(this).closest('form').find('input[type=submit]').prop('disabled', true);
            if(!($('.wpcf7-acceptance').find('span.wpcf7-not-valid-tip').length)) {
                $('<span class="wpcf7-not-valid-tip" role="alert" aria-hidden="true">Das Feld ist erforderlich.</span>').insertAfter('.wpcf7-acceptance label');
            }             
        }
    });
    $('.wpcf7-acceptance input').click(function(){
        var count_input = 0;
        $(this).closest('form').find('input.wpcf7-validates-as-required').each(function(){
            if(!($(this).val().length)) {
                count_input = count_input + 1;
                if(!($(this).parent().find('span.wpcf7-not-valid-tip').length)) {
                    $('<span class="wpcf7-not-valid-tip" role="alert" aria-hidden="true">Das Feld ist erforderlich.</span>').insertAfter($(this));
                }
            }
            else {
                $(this).parent().find('span.wpcf7-not-valid-tip').remove();
            }
        });
        if ($(this).prop('checked')) {
            $(this).parents('.wpcf7-acceptance').find('span.wpcf7-not-valid-tip').remove();
            if((count_input < 1)) {
                $(this).closest('form').find('input[type=submit]').prop('disabled', false);
            }
        }
        else {
            $(this).closest('form').find('input[type=submit]').prop('disabled', true);
            if(!($(this).parents('.wpcf7-acceptance').find('span.wpcf7-not-valid-tip').length)) {
                $('<span class="wpcf7-not-valid-tip" role="alert" aria-hidden="true">Das Feld ist erforderlich.</span>').insertAfter('.wpcf7-acceptance label');
            }     
        }
    })
    
});

document.addEventListener( 'wpcf7mailsent', function( event ) { 
    jQuery('.popup-sent-email').css('display','block');
    jQuery('body').addClass('show-popup');
}, false );
jQuery('.popup-sent-email .close-popup').click(function(){
    jQuery('.popup-sent-email').css('display','none');
    jQuery('body').removeClass('show-popup');
});
jQuery('.popup-sent-email').on('click', function (e) {
    if (jQuery(e.target).closest(".wrap-popup").length === 0) {
        jQuery('.popup-sent-email').css('display','none');
        jQuery('body').removeClass('show-popup');
    }
});