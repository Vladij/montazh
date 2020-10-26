$(document).ready(function() {
	$('button.close').click(function() {hideModal();});
	$('#dimmer').click(function() {hideModal();});

	$('#services_modal').hide();
	$('#services').click(function() {$(this).attr('v-status')=='hidden'?showListServices():hideListServices();});

	$('.shop-carousel').slick({
		dots: true,
		infinite: true,
		autoplay:true,
		autoplaySpeed:2000,
		nextArrow:'<img src="/catalog/view/theme/montazh/image/svg/right_arrow.svg" class="arrow right d-none d-md-block" alt="">',
		prevArrow:'<img src="/catalog/view/theme/montazh/image/svg/left_arrow.svg" class="arrow left d-none d-md-block" alt="">',
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1024,
		    settings: {
		    	slidesToShow: 2,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		    }
		},
		{
		    breakpoint: 768,
		    settings: {
				slidesToShow: 1,
		        slidesToScroll: 1
		    }
		}
		]
	});

	$('.blog-carousel').slick({
		dots: true,
		infinite: true,
		nextArrow:'<img src="/catalog/view/theme/montazh/image/svg/right_arrow.svg" class="arrow right d-none d-md-block" alt="">',
		prevArrow:'<img src="/catalog/view/theme/montazh/image/svg/left_arrow.svg" class="arrow left d-none d-md-block" alt="">',
		speed: 300,
		autoplay:true,
		autoplaySpeed:2000,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1024,
		    settings: {
		    	slidesToShow: 2,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		    }
		},
		{
		    breakpoint: 768,
		    settings: {
				slidesToShow: 1,
		        slidesToScroll: 1
		    }
		}
		]
	});
	$('.feedback-carousel').slick({
		dots: true,
		infinite: true,
		nextArrow:'<img src="/catalog/view/theme/montazh/image/svg/right_arrow.svg" class="arrow right d-none d-md-block" style="left:100%;" alt="">',
		prevArrow:'<img src="/catalog/view/theme/montazh/image/svg/left_arrow.svg" class="arrow left d-none d-md-block" style="left:-5%;" alt="">',
		speed: 300,
		autoplay:true,
		autoplaySpeed:2000,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1024,
		    settings: {
		    	slidesToShow: 2,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		    }
		},
		{
		    breakpoint: 768,
		    settings: {
				slidesToShow: 1,
		        slidesToScroll: 1
		    }
		}
		]
	});

	$('#house').show();
	$('#terrace').hide();
	$('#alcove').hide();
	$('#furniture').hide();
	$('#bbq').hide();
	$('#construct').hide();
	$('.btt').click(function() {$('html, body').animate({scrollTop: 0},500);});

	$('[block-id="house"]').click(function() {
		$('[block-id="house"]').attr('class', 'active');
		$('[status="showed"]').hide();
		$('[block-id="' + $('[status="showed"]').attr('id') + '"]').attr('class', '');
		$('[status="showed"]').attr('status', 'hidden');
		$('#house').show();
		$('#house').attr('status', 'showed');
	});
	$('[block-id="terrace"]').click(function() {
		$('[block-id="terrace"]').attr('class', 'active');
		$('[status="showed"]').hide();
		$('[block-id="' + $('[status="showed"]').attr('id') + '"]').attr('class', '');
		$('[status="showed"]').attr('status', 'hidden');
		$('#terrace').show();
		$('#terrace').attr('status', 'showed');
	});
	$('[block-id="alcove"]').click(function() {
		$('[block-id="alcove"]').attr('class', 'active');
		$('[status="showed"]').hide();
		$('[block-id="' + $('[status="showed"]').attr('id') + '"]').attr('class', '');
		$('[status="showed"]').attr('status', 'hidden');
		$('#alcove').show();
		$('#alcove').attr('status', 'showed');
	});
	$('[block-id="furniture"]').click(function() {
		$('[block-id="furniture"]').attr('class', 'active');
		$('[status="showed"]').hide();
		$('[block-id="' + $('[status="showed"]').attr('id') + '"]').attr('class', '');
		$('[status="showed"]').attr('status', 'hidden');
		$('#furniture').show();
		$('#furniture').attr('status', 'showed');
	});
	$('[block-id="bbq"]').click(function() {
		$('[block-id="bbq"]').attr('class', 'active');
		$('[status="showed"]').hide();
		$('[block-id="' + $('[status="showed"]').attr('id') + '"]').attr('class', '');
		$('[status="showed"]').attr('status', 'hidden');
		$('#bbq').show();
		$('#bbq').attr('status', 'showed');
	});
	$('[block-id="construct"]').click(function() {
		$('[block-id="construct"]').attr('class', 'active');
		$('[status="showed"]').hide();
		$('[block-id="' + $('[status="showed"]').attr('id') + '"]').attr('class', '');
		$('[status="showed"]').attr('status', 'hidden');
		$('#construct').show();
		$('#construct').attr('status', 'showed');
	});

    function showListServices() {
    	$('#services_modal').fadeIn(200);
    	$('#services #icon').html('<img src="/catalog/view/theme/montazh/image/svg/cmw.svg">');
    	$('#services').attr('v-status', 'visible');
    	$('#services #icon img').css('width', '18px');
    }
    function hideListServices() {
    	$('#services_modal').fadeOut(200);
    	$('#services #icon').html('<img src="/catalog/view/theme/montazh/image/svg/icon-first.svg">');
    	$('#services').attr('v-status', 'hidden');
    }
	function hideModal() {
		$('div#modal_frame').fadeOut(300);
		$('div#dimmer').fadeOut(300);
	}
	function showModal(v_id) {
		$('.' + v_id).fadeIn(300);
		$('#dimmer').fadeIn(300);
	}
});