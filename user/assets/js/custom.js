jQuery(function ($) {
	var path = window.location.href;
	// because the 'href' property of the DOM element is the absolute path
	$(".menu_links .one").each(function () {
	  if (this.href === path) {
		$(this).addClass("active");
	  }
	});
  });

// Guest Popup Js 
$(".guest_profile_btn").click(function(){
	$('.guest_profile_popup').toggleClass("active");
  });

// Notification Popup Js 
$(".notif_icon").click(function(){
	$('.notification_popup').toggleClass("active");
  });

// Guest Popup Js 
$(".three-dotted").click(function(){
	$('.userprofile_report').toggleClass("active");
  });

// Menu Burger Js
  var state = "expanded";
  //Check if navbar is expanded or minimized and handle 
  $('.menu_burger').click(function() {
	  if (state == "expanded") {
		  $('.header_left').css('max-width', '150px');
		  $('.header_left').css('transition', 'all 0.3s ease-in-out');
		  $('.header_right ').css('width', 'calc(100% - 150px)');
		  $('.header_right ').css('transition', 'all 0.3s ease-in-out');
		  $('.rightContent_wrapper').css('width', 'calc(100% - 150px)');
		  $('.rightContent_wrapper').css('transition', 'all 0.3s ease-in-out')
		  $('.menu_links .one span').css('display', 'none');
		  $('.menu_links .one span').css('transition', 'all 0.3s ease-in-out');
		  $('.menu_links .one').css('justify-content', 'center')
		  $('.left_menu_logo a img').css('max-width', '100px');
		  $('.left_menu_logo a img').css('transition', 'all 0.3s ease-in-out');
		  state = "minimized";
	  } 
	  else {
		  if (state == "minimized") {
			  $('.header_left').css('max-width', '250px');
			  $('.header_right').css('width', 'calc(100% - 250px)');
			  $('.rightContent_wrapper').css('width', 'calc(100% - 250px)');
			  $('.menu_links .one span').css('display', 'block');
			  $('.menu_links .one').css('justify-content', 'left')
			  $('.left_menu_logo a img').css('max-width', '130px');
			  state = "expanded";
		  }
	  }
  })

// Properties Boxes Slider Js
var swiper = new Swiper(".propertyBoxSwiper", {
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
  });

  // OTP TIMER

var time = 30;
var initialOffset = '440';
var i = 1

/* Need initial run as interval hasn't yet occured... */
$('.circle_animation').css('stroke-dashoffset', initialOffset-(1*(initialOffset/time)));

var interval = setInterval(function() {
	$('h2 span	').text(i);
	if (i == time) {  	
		clearInterval(interval);
		return;
	}
	$('.circle_animation').css('stroke-dashoffset', initialOffset-((i+1)*(initialOffset/time)));
	i++;  
}, 1000);


// ONLOAD ANIMATION START
window.addEventListener('load', () => {
	var fadeTarget = document.getElementById("loading");
	var fadeEffect = setTimeout(function() {
		fadeTarget.style.opacity = "0";
		fadeTarget.style.zIndex = "-9999";
	}, 100);
});
// ONLOAD ANIMATION END

/// OTP INPUTS START
$('.digit-group').find('input').each(function() {
	$(this).attr('maxlength', 1);
	$(this).on('keyup', function(e) {
		var parent = $($(this).parent());

		if(e.keyCode === 8 || e.keyCode === 37) {
			var prev = parent.find('input#' + $(this).data('previous'));

			if(prev.length) {
				$(prev).select();
			}
		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
			var next = parent.find('input#' + $(this).data('next'));

			if(next.length) {
				$(next).select();
			} else {
				if(parent.data('autosubmit')) {
					parent.submit();
				}
			}
		}
	});
});
 /// OTP INPUTS END

// AVATAR START
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$('#imagePreview').css('background-image', 'url('+e.target.result +')');
			$('#imagePreview').hide();
			$('#imagePreview').fadeIn(650);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
$("#imageUpload").change(function() {
	readURL(this);
});
// AVATAR END

// Multiple Images Selection Js
var imgUpload = document.getElementById('upload-img')
  , imgPreview = document.getElementById('img-preview')
  , imgUploadForm = document.getElementById('form-upload')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, true);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
     if(!!totalFiles) {
    imgPreview.classList.remove('img-thumbs-hidden');
  }
  
  for(var i = 0; i < totalFiles; i++) {
    wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    removeBtn = document.createElement("span");
    nodeRemove= document.createTextNode('x');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreview.appendChild(wrapper);
   
    $('.remove-btn').click(function(){
      $(this).parent('.wrapper-thumb').remove();
    });    

  }
}

// Calender Js 
$('.calendar-container').calendar({
	date: new Date() // today
  });


