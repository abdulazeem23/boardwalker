<!-- Booking Confirmation Modal -->
<div class="modal booking_confirmation_modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="title" id="exampleModalToggleLabel">Booking Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="property_conf_detail">
            <div class="confirmed_propertyDetail">
                <div class="confirmedProperty_img">
                    <img src="assets/images/property-img-1.png" alt="">
                </div>
                <div class="confirmedProperty_desc">
                    <p class="title">Lorem Ipsum</p>
                    <p class="semiBold">From: July 30,2023</p>
                    <p class="semiBold">To:: July 31,2023</p>
                    <p class="semiBold">Guest: 03</p>
                    <p class="semiBold">price: $ 110</p>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group confirmationField mb-3">
                            <label for="">Dates:</label>
                            <input type="text" placeholder="Jun 14 – 19">
                            <span class="input_icons"><img src="assets/images/Icon awesome-edit.png" alt=""></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group confirmationField mb-3">
                            <label for="">Guest:</label>
                            <input type="text" placeholder="03">
                            <span class="input_icons"><img src="assets/images/Icon awesome-edit.png" alt=""></span>
                        </div>
                    </div>
                </div>
                <div class="booking_detial">
                    <p class="title">Price Detail:</p>
                    <ul>
                        <li>
                            <p class="smallBold">$20 x 5 Days</p>
                            <p class="price">$100.00</p>
                        </li>
                        <li>
                            <p class="smallBold">Tax</p>
                            <p class="price">$10.00</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p class="smallBold">$20 x 5 Days</p>
                            <p class="price">$100.00</p>
                        </li>           
                    </ul>
                </div>
                <div class="choose_paymentMethod">
                    <p class="title">Choose Payment Method:</p>
                    <div class="payment_options">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <img src="assets/images/stripe.png" alt="">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            <img src="assets/images/mastercard.png" alt="">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                            <label class="form-check-label" for="flexRadioDefault3">
                            <img src="assets/images/apple-pay.png" alt="">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                            <label class="form-check-label" for="flexRadioDefault4">
                            <img src="assets/images/paypal.png" alt="">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="cardDetail">
                    <p class="title">Card Details:</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group confirmationField mb-3">
                                <input type="text" placeholder="Card Holder Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group confirmationField mb-3">
                                <input type="text" placeholder="Account Number">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group confirmationField mb-3">
                                <input type="text" placeholder="Expiry Date">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group confirmationField mb-3">
                                <input type="text" placeholder="CVC">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Save card details
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-12">
                <button class="genBtn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Book Now</button>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<!-- Booking Success -->
<div class="modal booking_confirmation_modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="title" id="exampleModalToggleLabel2">Successfull</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="success_modalBody">
                <div class="success_img">
                    <img src="assets/images/thumbs-up.png" alt="">
                </div>
                <p class="semiBold">Thank you. Your profile has been created</p>
                <div>
                    <button class="genBtn">Continue</button>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Filter Modal -->
<div class="modal filter-Modal booking_confirmation_modal fade" id="filterModal" aria-hidden="true" aria-labelledby="filterModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="title" id="filterModalLabel">Search Filters</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="search_filter">
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="properties_title_section1">
                            <p class="title">Search All (By default)</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="searchAll">
                                <label class="form-check-label" for="searchAll"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="form-group confirmationField mb-3">
                            <label for="">Search by Location</label>
                            <input type="text" placeholder="Location">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="confirmationField">
                            <label for="">Search by Pricing</label>
                        </div>
                        <div class="easy-basket-filter">	
                            <!-- <div class="easy-basket-filter-info">
                                <input type="text" class="easy-basket-lower" value="0" min="0" max="25000" maxlength=6/>
                                <input type="text" class="easy-basket-upper" value="25000" min="0" max="25000" maxlength=6/>
                            </div> -->
                            <div class="easy-basket-filter-range">
                                <input type="range" class="lower range" step="any" min="0" max="25000" value="0"/>
                                <input type="range" class="upper range" step="any" min="0" max="25000" value="25000"/>
                                <div class="fill"></div>
                            </div>		
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group propertyfield mb-3">
                            <label for="">min price</label>
                            <input type="text" class="easy-basket-lower" value="0" min="0" max="25000" maxlength=6/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group propertyfield mb-3">
                            <label for="">max price</label>
                            <input type="text" class="easy-basket-upper" value="25000" min="0" max="25000" maxlength=6/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="properties_title_section1">
                            <p class="title">Search by Amenities</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="searchAllAmenities">
                                <label class="form-check-label" for="searchAllAmenities">
                                All 
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">Essentials</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials1">
                                    <label class="form-check-label" for="searchEssentials1">
                                    Wifi 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials2">
                                    <label class="form-check-label" for="searchEssentials2">
                                    Kitchen 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials3">
                                    <label class="form-check-label" for="searchEssentials3">
                                    Washer 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials4">
                                    <label class="form-check-label" for="searchEssentials4">
                                    Dryer 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials5">
                                    <label class="form-check-label" for="searchEssentials5">
                                    Air conditioning 
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials6">
                                    <label class="form-check-label" for="searchEssentials6">
                                    Heating 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials7">
                                    <label class="form-check-label" for="searchEssentials7">
                                    Dedicated workspace 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials8">
                                    <label class="form-check-label" for="searchEssentials8">
                                    TV 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials9">
                                    <label class="form-check-label" for="searchEssentials9">
                                    Hair dryer 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="searchEssentials10">
                                    <label class="form-check-label" for="searchEssentials10">
                                    Iron 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 confirmationField">
                        <label>Bedrooms</label>
                        <div class="bedroom_option">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption1">
                                <label class="form-check-label" for="bedroomOption1">
                                    1
                                </label>
                            </div>       
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption2" checked="">
                                <label class="form-check-label" for="bedroomOption2">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption3">
                                <label class="form-check-label" for="bedroomOption3">
                                    3
                                </label>
                            </div>       
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption4">
                                <label class="form-check-label" for="bedroomOption4">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption5">
                                <label class="form-check-label" for="bedroomOption5">
                                    5
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption6">
                                <label class="form-check-label" for="bedroomOption6">
                                    6
                                </label>
                            </div>       
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption7">
                                <label class="form-check-label" for="bedroomOption7">
                                    7
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption8">
                                <label class="form-check-label" for="bedroomOption8">
                                    8
                                </label>
                            </div>       
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption9">
                                <label class="form-check-label" for="bedroomOption9">
                                    9
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption10">
                                <label class="form-check-label" for="bedroomOption10">
                                    10
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption11">
                                <label class="form-check-label" for="bedroomOption11">
                                    10 +
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 confirmationField">
                        <label>Bathrooms
                        <div class="bedroom_option">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms1">
                                <label class="form-check-label" for="Bathrooms1">
                                    1
                                </label>
                            </div>       
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms2" checked="">
                                <label class="form-check-label" for="Bathrooms2">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms3">
                                <label class="form-check-label" for="Bathrooms3">
                                    3
                                </label>
                            </div>       
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms4">
                                <label class="form-check-label" for="Bathrooms4">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms5">
                                <label class="form-check-label" for="Bathrooms5">
                                    5
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms6">
                                <label class="form-check-label" for="Bathrooms6">
                                    6
                                </label>
                            </div>   
                        </div>
                    </div>
                </div>
            </form>

            <div class="col-12">
                <button class="genBtn">Apply Filters</button>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

<!-- Cancel Booking -->
<div class="modal booking_confirmation_modal fade" id="CancelBooking" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="title" id="exampleModalToggleLabel2">Cancel Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="success_modalBody">
                <div class="success_img">
                    <img src="assets/images/cancel-booking-img.png" alt="">
                </div>
                <p class="semiBold mb-2">Are you sure you want to cancel this booking</p>
                <div class="form-group confirmationField mb-3">
                    <textarea placeholder="Any reason optional..!"></textarea>
                </div>
                <div>
                    <button class="genBtn">Submit</button>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Add a Review -->
<div class="modal booking_confirmation_modal fade" id="addReview" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="title" id="exampleModalToggleLabel2">Add a Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="success_modalBody addReviewBody">
                <div class="user_leftSec">
                <div class="userPicture">
                    <img src="assets/images/mem2.png" alt="">
                </div>
                <p class="semiBold">Jacob Smith</p>
                <a href="javascript:void(0)" class="ratingStar"><img src="assets/images/star-icon.png" alt=""><img src="assets/images/star-icon.png" alt=""><img src="assets/images/star-icon.png" alt=""><img src="assets/images/star-icon.png" alt=""></a>
            </div>
            <div class="form-group confirmationField mb-3">
                <textarea placeholder="Write feedback"></textarea>
            </div>
            <div>
                <button class="genBtn">Submit</button>
            </div>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Block User -->
<div class="modal booking_confirmation_modal fade" id="blockUser" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title" id="exampleModalToggleLabel2">Block User Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="success_modalBody">
                    <div class="success_img">
                        <img src="assets/images/cancel-booking-img.png" alt="">
                    </div>
                    <p class="semiBold mb-2">Are you sure you want to permanently block</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <button class="genBtn">No I don't</button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <button class="genBtn">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Report User Profile -->
<div class="modal booking_confirmation_modal fade" id="reportUserProfile" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="title" id="exampleModalToggleLabel2">Report User Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="success_modalBody reportProfileSec">
                <p class="semiBold">Help us understand the problem. What is going on with this Profile?</p>
                <div class="report_radio_option">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reportProfile" id="reportProfile1">
                        <label class="form-check-label" for="reportProfile1">
                        I'm not interested in this Post
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reportProfile" id="reportProfile2">
                        <label class="form-check-label" for="reportProfile2">
                        It's suspicious or spam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reportProfile" id="reportProfile3">
                        <label class="form-check-label" for="reportProfile3">
                        It displays a sensitive image
                        </label>
                    </div>
                </div>
                <div class="form-group confirmationField mb-3">
                    <textarea placeholder="Write your reason here....!"></textarea>
                </div>
                <div>
                    <button class="genBtn">Report</button>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- BOOTSTRAP 5 -->	
<script src="assets/js/bootstrap.min.js"></script> 
<!-- BOOTSTRAP 5 -->	
<!-- JQUERY  -->	
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- JQUERY  -->	
<!-- RESPONSIVE NAVIFATION -->
<script src="assets/js/stellarnav.min.js"></script>
<!-- RESPONSIVE NAVIFATION -->
<!-- SWIPER SLIDER -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- SWIPER SLIDER -->
<!-- FANCY BOX IMAGE VIEWER -->
<script src="assets/js/jquery.fancybox.min.js"></script> 
<!-- FANCY BOX IMAGE VIEWER -->
<!-- CALENDER JS -->
<script src="assets/js/calendar.min.js"></script> 
<script src="assets/js/calendar.js"></script> 
<!-- JAVASCRIPT SHEETS -->
<script src="assets/js/custom.js"></script> 
<!-- JAVASCRIPT SHEETS -->
<!-- data-fancybox="gallery" data-src="" -->

<script>
    // Range Slider Js

jQuery(document).ready(function() {
	$('.upper').on('input', setFill);
	$('.lower').on('input', setFill);

	var max = $('.upper').attr('max');
	var min = $('.lower').attr('min');

	function setFill(evt) {
		var valUpper = $('.upper').val();
		var valLower = $('.lower').val();
		if (parseFloat(valLower) > parseFloat(valUpper)) {
			var trade = valLower;
			valLower = valUpper;
			valUpper = trade;
		}
		
		var width = valUpper * 100 / max;
		var left = valLower * 100 / max;
		$('.fill').css('left', 'calc(' + left + '%)');
		$('.fill').css('width', width - left + '%');
		
		// Update info
		if (parseInt(valLower) == min) {
			$('.easy-basket-lower').val('0');
		} else {
			$('.easy-basket-lower').val(parseInt(valLower));
		}
		if (parseInt(valUpper) == max) {
			$('.easy-basket-upper').val('25000');
		} else {
			$('.easy-basket-upper').val(parseInt(valUpper));
		}
	}
	
	$('.easy-basket-filter-info input').keyup(function() {
		var valUpper = $('.easy-basket-upper').val();
		var valLower = $('.easy-basket-lower').val();
		var width = valUpper * 100 / max;
		var left = valLower * 100 / max;
		if ( valUpper > 5000 ) {
			var left = max;
		}
		if ( valLower < 0 ) {
			var left = min;
		} else if ( valLower > max ) {
			var left = min;
		}
		$('.fill').css('left', 'calc(' + left + '%)');
		$('.fill').css('width', width - left + '%');
		// меняем положение ползунков
		$('.lower').val(valLower);
		$('.upper').val(valUpper);
	});
	$('.easy-basket-filter-info input').focus(function() {
		$(this).val('');
	});
	$('.easy-basket-lower').blur(function() {
		var valLower = $('.lower').val();
		$(this).val(Math.floor(valLower));
	});
	$('.easy-basket-upper').blur(function() {
		var valUpper = $('.upper').val();
		$(this).val(Math.floor(valUpper));
	});
	
});
</script>

</body>
</html>