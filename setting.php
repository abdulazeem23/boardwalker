<?php include 'includes/header.php';?>

<section class="rightContent_wrapper setting_wrapper">
    <div class="properties_title_section1">
        <a class="title" href="javascript:void(0)">Settings</a>
    </div>
    <div class="setting_inner_content bookingDetail_section">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-ProfileSettings-tab" data-bs-toggle="pill" data-bs-target="#pills-ProfileSettings" type="button" role="tab" aria-controls="pills-ProfileSettings" aria-selected="true">Profile Settings</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-MyAccount-tab" data-bs-toggle="pill" data-bs-target="#pills-MyAccount" type="button" role="tab" aria-controls="pills-MyAccount" aria-selected="false">My Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-TermsConditions-tab" data-bs-toggle="pill" data-bs-target="#pills-TermsConditions" type="button" role="tab" aria-controls="pills-TermsConditions" aria-selected="false">Terms & Conditions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-PrivacyPolicy-tab" data-bs-toggle="pill" data-bs-target="#pills-PrivacyPolicy" type="button" role="tab" aria-controls="pills-PrivacyPolicy" aria-selected="false">Privacy Policy</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-BlockedUser-tab" data-bs-toggle="pill" data-bs-target="#pills-BlockedUser" type="button" role="tab" aria-controls="pills-BlockedUser" aria-selected="false">Blocked User</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-ProfileSettings" role="tabpanel" aria-labelledby="pills-ProfileSettings-tab">
                <div class="profile-section">
                    <form action="">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                                <label for="imageUpload" class="xy-center">
                                    <img src="assets/images/upload.png" alt="img">
                                </label>
                            </div> 
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url('assets/images/mem2.png');">
                                </div>
                            </div>
                        </div>
                        <div class="form-group confirmationField mb-3">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="form-group confirmationField mb-3">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="form-group confirmationField mb-3">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="form-group confirmationField mb-3">
                            <textarea placeholder="Bio"></textarea>
                        </div>
                        <div class="save_btn">
                            <a href="javascript:void(0)" class="genBtn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Save</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-MyAccount" role="tabpanel" aria-labelledby="pills-MyAccount-tab">
                <div class="myAcc-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="property_Owner_section">
                                <div class="property_Owner_detail">
                                    <div class="ownerImg">
                                        <img src="assets/images/stripe.png" alt="">
                                    </div>
                                    <div class="owner_desc">
                                        <p class="title">***** 5562 12354</p>
                                    </div>
                                </div>
                                <div class="book_now_sect">
                                    <img src="assets/images/delete-img.png" alt="">
                                </div>
                            </div>
                            <div class="property_Owner_section">
                                <div class="property_Owner_detail">
                                    <div class="ownerImg">
                                        <img src="assets/images/paypal.png" alt="">
                                    </div>
                                    <div class="owner_desc">
                                        <p class="title">***** 5562 12354</p>
                                    </div>
                                </div>
                                <div class="book_now_sect">
                                    <img src="assets/images/delete-img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="booking_confirmation_modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="title" id="exampleModalToggleLabel">Booking Confirmation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="property_conf_detail">
                                            <form action="">
                                                <div class="choose_paymentMethod">
                                                    <div class="payment_options">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault1a" id="flexRadioDefault1a">
                                                            <label class="form-check-label" for="flexRadioDefault1a">
                                                                <img src="assets/images/stripe.png" alt="">
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault1a" id="flexRadioDefault1b" checked>
                                                            <label class="form-check-label" for="flexRadioDefault1b">
                                                            <img src="assets/images/mastercard.png" alt="">
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault1a" id="flexRadioDefault1c">
                                                            <label class="form-check-label" for="flexRadioDefault1c">
                                                            <img src="assets/images/apple-pay.png" alt="">
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault1a" id="flexRadioDefault1d">
                                                            <label class="form-check-label" for="flexRadioDefault1d">
                                                            <img src="assets/images/paypal.png" alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cardDetail">
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
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="col-12">
                                                <button class="genBtn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-TermsConditions" role="tabpanel" aria-labelledby="pills-TermsConditions-tab">
                <div class="TermsConditions_wrapper">
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit ridiculus metus sodales, et facilisis volutpat nullam aliquam habitasse sagittis habitant mus risus mauris, leo enim platea class penatibus in euismod proin posuere. Fames sodales sociosqu placerat blandit tristique vel feugiat nam varius, lobortis velit etiam malesuada at mattis augue aenean condimentum nisl, primis porta natoque congue gravida tempus pretium fusce. Mus dictumst ullamcorper lobortis hac vel augue eget nascetur id, congue morbi dignissim sollicitudin dui sociis eros proin, malesuada tortor quisque ante arcu diam eleifend justo.
                    </p>
                    <p class="paragraph">
                        Elementum posuere feugiat fringilla neque montes sociis penatibus hendrerit, egestas id vitae mattis taciti massa gravida integer, fermentum dui sociosqu magnis nullam faucibus accumsan. Taciti aptent gravida pulvinar tristique tincidunt himenaeos felis, a sollicitudin vestibulum sagittis eu euismod viverra arcu, curae commodo vivamus auctor praesent mus. Metus fringilla pharetra eros justo sem cum sociosqu inceptos, nibh habitant etiam habitasse praesent luctus nascetur, venenatis fames mus parturient sociis tellus integer.
                    </p>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit ridiculus metus sodales, et facilisis volutpat nullam aliquam habitasse sagittis habitant mus risus mauris, leo enim platea class penatibus in euismod proin posuere. Fames sodales sociosqu placerat blandit tristique vel feugiat nam varius, lobortis velit etiam malesuada at mattis augue aenean condimentum nisl, primis porta natoque congue gravida tempus pretium fusce. Mus dictumst ullamcorper lobortis hac vel augue eget nascetur id, congue morbi dignissim sollicitudin dui sociis eros proin, malesuada tortor quisque ante arcu diam eleifend justo.
                    </p>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-PrivacyPolicy" role="tabpanel" aria-labelledby="pills-PrivacyPolicy-tab">
                <div class="TermsConditions_wrapper">
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit ridiculus metus sodales, et facilisis volutpat nullam aliquam habitasse sagittis habitant mus risus mauris, leo enim platea class penatibus in euismod proin posuere. Fames sodales sociosqu placerat blandit tristique vel feugiat nam varius, lobortis velit etiam malesuada at mattis augue aenean condimentum nisl, primis porta natoque congue gravida tempus pretium fusce. Mus dictumst ullamcorper lobortis hac vel augue eget nascetur id, congue morbi dignissim sollicitudin dui sociis eros proin, malesuada tortor quisque ante arcu diam eleifend justo.
                    </p>
                    <p class="paragraph">
                        Elementum posuere feugiat fringilla neque montes sociis penatibus hendrerit, egestas id vitae mattis taciti massa gravida integer, fermentum dui sociosqu magnis nullam faucibus accumsan. Taciti aptent gravida pulvinar tristique tincidunt himenaeos felis, a sollicitudin vestibulum sagittis eu euismod viverra arcu, curae commodo vivamus auctor praesent mus. Metus fringilla pharetra eros justo sem cum sociosqu inceptos, nibh habitant etiam habitasse praesent luctus nascetur, venenatis fames mus parturient sociis tellus integer.
                    </p>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit ridiculus metus sodales, et facilisis volutpat nullam aliquam habitasse sagittis habitant mus risus mauris, leo enim platea class penatibus in euismod proin posuere. Fames sodales sociosqu placerat blandit tristique vel feugiat nam varius, lobortis velit etiam malesuada at mattis augue aenean condimentum nisl, primis porta natoque congue gravida tempus pretium fusce. Mus dictumst ullamcorper lobortis hac vel augue eget nascetur id, congue morbi dignissim sollicitudin dui sociis eros proin, malesuada tortor quisque ante arcu diam eleifend justo.
                    </p>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-BlockedUser" role="tabpanel" aria-labelledby="pills-BlockedUser-tab">
                <div class="blockedUser-section">
                    <div class="property_Owner_section">
                        <div class="property_Owner_detail">
                            <div class="ownerImg">
                                <img src="assets/images/owner-img.png" alt="">
                            </div>
                            <div class="owner_desc">
                                <p class="title">Owner</p>
                                
                            </div>
                        </div>
                        <div class="book_now_sect">
                            <a class="genBtn" href="javascript:void(0)">Unblock</a>
                        </div>
                    </div>
                    <div class="property_Owner_section">
                        <div class="property_Owner_detail">
                            <div class="ownerImg">
                                <img src="assets/images/owner-img.png" alt="">
                            </div>
                            <div class="owner_desc">
                                <p class="title">Owner</p>
                                
                            </div>
                        </div>
                        <div class="book_now_sect">
                            <a class="genBtn" href="javascript:void(0)">Unblock</a>
                        </div>
                    </div>
                    <div class="property_Owner_section">
                        <div class="property_Owner_detail">
                            <div class="ownerImg">
                                <img src="assets/images/owner-img.png" alt="">
                            </div>
                            <div class="owner_desc">
                                <p class="title">Owner</p>
                                
                            </div>
                        </div>
                        <div class="book_now_sect">
                            <a class="genBtn" href="javascript:void(0)">Unblock</a>
                        </div>
                    </div>
                    <div class="property_Owner_section">
                        <div class="property_Owner_detail">
                            <div class="ownerImg">
                                <img src="assets/images/owner-img.png" alt="">
                            </div>
                            <div class="owner_desc">
                                <p class="title">Owner</p>
                                
                            </div>
                        </div>
                        <div class="book_now_sect">
                            <a class="genBtn" href="javascript:void(0)">Unblock</a>
                        </div>
                    </div>
                    <div class="property_Owner_section">
                        <div class="property_Owner_detail">
                            <div class="ownerImg">
                                <img src="assets/images/owner-img.png" alt="">
                            </div>
                            <div class="owner_desc">
                                <p class="title">Owner</p>
                                
                            </div>
                        </div>
                        <div class="book_now_sect">
                            <a class="genBtn" href="javascript:void(0)">Unblock</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer-links.php';?>