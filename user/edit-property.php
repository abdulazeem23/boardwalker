<?php include 'includes/header.php';?>

<section class="rightContent_wrapper edit_property_section">
    <div class="addProperty_wrapper">
        <p class="title text-center">Add Property</p>
        <form action="">
            <div class="row">
                <div class="col-12">
                    <div class="form-group confirmationField mb-3">
                        <label for="">Property Title</label>
                        <input type="text" placeholder="Title">
                    </div>
                </div>
                <div class="col-12">
                    <p class="title">Property Type</p>
                    <div class="property_type_option">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="propertyType" id="propertyTypebtn1">
                            <label class="form-check-label" for="propertyTypebtn1">
                                Apartment
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="propertyType" id="propertyTypebtn2" checked>
                            <label class="form-check-label" for="propertyTypebtn2">
                                Bunglow
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="propertyType" id="propertyTypebtn3">
                            <label class="form-check-label" for="propertyTypebtn3">
                                Farmhouse
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="propertyType" id="propertyTypebtn4">
                            <label class="form-check-label" for="propertyTypebtn4">
                                House
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="title">Property Photos</p>
                    <div class="addProperty_image">
                        <div class="upload_box">
                            <a href="javascript:void(0)">
                                <img src="assets/images/upload-img.png" alt="">
                            </a>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form action="" method="post" enctype="multipart/form-data" id="form-upload">
                                    <div class="form-group mt-5">
                                    <label for=""></label>
                                    <input type="file" class="form-control" name="images[]" multiple id="upload-img" />
                                    </div>
                                    <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group confirmationField mb-3">
                        <label for="">Location</label>
                        <input type="text" placeholder="Lorem Ipsum">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group confirmationField mb-3">
                        <label for="">Description</label>
                        <input type="text" placeholder="Write a text.....">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group confirmationField mb-3">
                        <label for="">Renting Price</label>
                        <input type="text" placeholder="$0">
                    </div>
                </div>  
                <div class="col-12 confirmationField">
                    <label>Bedrooms</labelp>
                    <div class="bedroom_option">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption1">
                            <label class="form-check-label" for="bedroomOption1">
                                1
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bedroomOption" id="bedroomOption2" checked>
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
                    <label>Bathrooms</labelp>
                    <div class="bedroom_option">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms1">
                            <label class="form-check-label" for="Bathrooms1">
                                1
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Bathrooms" id="Bathrooms2" checked>
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
                <div class="col-12 confirmationField">
                    <label>Parking (No. of Cars)</labelp>
                    <div class="bedroom_option">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Parking" id="Parking1">
                            <label class="form-check-label" for="Parking1">
                                1
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Parking" id="Parking2">
                            <label class="form-check-label" for="Parking2">
                                2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Parking" id="Parking3" checked>
                            <label class="form-check-label" for="Parking3">
                                3
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Parking" id="Parking4">
                            <label class="form-check-label" for="Parking4">
                                4
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Parking" id="Parking5">
                            <label class="form-check-label" for="Parking5">
                                5
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Parking" id="Parking6">
                            <label class="form-check-label" for="Parking6">
                                6
                            </label>
                        </div>   
                    </div>
                </div>  
                <div class="col-lg-6 col-md-6 col-12 confirmationField">
                    <label for="">Internet Connectivity </label>
                    <div class="internetOption">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="internet" id="internet1" checked>
                            <label class="form-check-label" for="internet1">
                                Yes
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="internet" id="internet2">
                            <label class="form-check-label" for="internet2">
                                No
                            </label>
                        </div>
                    </div>
                </div>   
                <div class="col-lg-6 col-md-6 col-12 confirmationField">
                    <label for="">Airconditioning </label>
                    <div class="internetOption">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Airconditioning" id="Airconditioning1" checked>
                            <label class="form-check-label" for="Airconditioning1">
                                Yes
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Airconditioning" id="Airconditioning2">
                            <label class="form-check-label" for="Airconditioning2">
                                No
                            </label>
                        </div>
                    </div>
                </div> 
                <div class="col-12 ">
                    <p class="title">Availability</p>
                    <div class="property_type_option">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Availability" id="Availability1">
                            <label class="form-check-label" for="Availability1">
                            Weekends
                            </label>
                        </div>       
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Availability" id="Availability2" checked>
                            <label class="form-check-label" for="Availability2">
                            Weekdays
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Availability" id="Availability3">
                            <label class="form-check-label" for="Availability3">
                            Holidays
                            </label>
                        </div> 
                    </div>
                </div>  
                <div class="col-8">
                <div class="calendar-container"></div>
                </div>  
                <div class="col-12 ">
                    <div class="form-check form-switch AddPropertyManager">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Add Property Manager</label>
                    </div>
                </div>
                <div class="col-12">
                <a class="genBtn" href="javascript:void(0)">Save</a>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'includes/footer-links.php';?>