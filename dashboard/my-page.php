<!doctype html>
<html>

<head>
    <title>Add Listing -- ELUSIVEHUNTERS</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header.php'); ?>
    <main index class="dash_bdy">
        <section class="dash">
            <div class="contain">
                <div class="dash_heading_sec">
                    <div class="main_page_heading">
                        <a href="index.php">Dashboard</a>
                        <span>/</span>
                        <a href="listing.php">My Listings</a>
                        <span>/</span>
                        <h2>Add New</h2>
                    </div>
                </div>
                <div class="dash_body">
                    <div class="inner_dash_body">
                        <div class="option_lbl option_lbl_lg">
                            <ul>
                                <li class="active">Location</li>
                                <li>Description</li>
                                <li>Property and rooms</li>
                                <li>Media</li>
                            </ul>
                        </div>
                        <div class="dash_form_blk">
                            <form action="">

                                <fieldset>
                                    <div class="form_row row">
                                        <div class="col-xs-12">
                                            <h6>Property Title</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h6>Address Line 1</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h6>Address Line 2</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <h6>City</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <h6>State</h6>
                                            <div class="form_blk">
                                                <select name="" class="input">
                                                    <option value="">- Select State -</option>
                                                    <option value="1">Alabama</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Arizona</option>
                                                    <option value="4">Arkansas</option>
                                                    <option value="5">California</option>
                                                    <option value="6">Colorado</option>
                                                    <option value="7">Connecticut</option>
                                                    <option value="8">Delaware</option>
                                                    <option value="9">District of Columbia</option>
                                                    <option value="10">Florida</option>
                                                    <option value="11">Georgia</option>
                                                    <option value="12">Hawaii</option>
                                                    <option value="13">Idaho</option>
                                                    <option value="14">Illinois</option>
                                                    <option value="15">Indiana</option>
                                                    <option value="16">Iowa</option>
                                                    <option value="17">Kansas</option>
                                                    <option value="18">Kentucky</option>
                                                    <option value="19">Louisiana</option>
                                                    <option value="20">Maine</option>
                                                    <option value="21">Maryland</option>
                                                    <option value="22">Massachusetts</option>
                                                    <option value="23">Michigan</option>
                                                    <option value="24">Minnesota</option>
                                                    <option value="25">Mississippi</option>
                                                    <option value="26">Missouri</option>
                                                    <option value="27">Montana</option>
                                                    <option value="28">Nebraska</option>
                                                    <option value="29">Nevada</option>
                                                    <option value="30">New Hampshire</option>
                                                    <option value="31">New Jersey</option>
                                                    <option value="32">New Mexico</option>
                                                    <option value="33">New York</option>
                                                    <option value="34">North Carolina</option>
                                                    <option value="35">North Dakota</option>
                                                    <option value="36">Ohio</option>
                                                    <option value="37">Oklahoma</option>
                                                    <option value="38">Oregon</option>
                                                    <option value="39">Pennsylvania</option>
                                                    <option value="40">Rhode Island</option>
                                                    <option value="41">South Carolina</option>
                                                    <option value="42">South Dakota</option>
                                                    <option value="43">Tennessee</option>
                                                    <option value="44">Texas</option>
                                                    <option value="45">Utah</option>
                                                    <option value="46">Vermont</option>
                                                    <option value="47">Virginia</option>
                                                    <option value="48">Washington</option>
                                                    <option value="49">West Virginia</option>
                                                    <option value="50">Wisconsin</option>
                                                    <option value="51">Wyoming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <h6>ZIP Code</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="br_mini"></div>
                                    <hr>
                                    <div class="sharing_location_blk">
                                        <div class="info_heading_confirm sharing_location_toggle">
                                            <h4>Location Sharing</h4>
                                        </div>
                                        <div class="sharing_location_bdy">
                                            <div class="location_blk">
                                                <div class="lbl_btn">
                                                    <input type="radio" name="location-share" value="genral" id="general_location">
                                                    <label for="general_location">
                                                        <div class="flex">
                                                            <div class="colL">
                                                                <div class="icon_location">
                                                                    <img src="<?= $baseurl ?>assets/images/preview.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="colR">
                                                                <h5>General location</h5>
                                                                <p>Bowhunting, Calling, Fair Chase</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="location_map_main">
                                                <div id="map_canvas"></div>
                                            </div>
                                            <div class="br"></div>
                                            <div class="lbl_btn privacy_lbl">
                                                <input type="checkbox" name="cancellation" value="" id="cancellation">
                                                <label for="cancellation">
                                                    <h6>Address privacy for cancellation</h6>
                                                    <p><small>Escape from the hustle and hassle of your everyday routine and come away to the Ami Homestay, where a serene world awaits you.</small></p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk text-center">
                                        <button type="button" class="site_btn nextBtn">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="form_row row">
                                        <div class="col-xs-6">
                                            <div class="lbl_btn switch_lbl_btn">
                                                <label for="">
                                                    <h6>Smart Pricing</h6>
                                                    <p><small>Automatically adjust your price based on demand. Your price stays within the range you set, and you can change it at any time.</small></p>
                                                </label>
                                                <div class="switch">
                                                    <input type="checkbox" name="" id="smart_pricing"><em></em>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h6>Price</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input" value="$190">
                                                <small>Tip: $190, Set your base price.</small>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="tip_blk">
                                                <div class="inner">
                                                    <span><i class="fa fa-lightbulb-o"></i></span>
                                                    <div class="cntnt">
                                                        <h6>Activate Smart Pricing to increase your total income</h6>
                                                        <p><small>We'll help you to set competitive prices that get you booked, maximizing your long-term earnings.</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <h6>Housing Provided</h6>
                                            <div class="flex gap_flex_lbl">
                                                <div class="lbl_btn">
                                                    <input type="radio" name="house-provided" value="Yes" id="house_provides_yes">
                                                    <label for="house_provides_yes">Yes</label>
                                                </div>
                                                <div class="lbl_btn">
                                                    <input type="radio" name="house-provided" value="No" id="house_provides_no">
                                                    <label for="house_provides_no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 house_hold_yes_drop">
                                            <div class="info_heading_confirm">
                                                <h4>Which areas can guests use?</h4>
                                                <div class="br_mini"></div>
                                                <h6>Let's start with these areas</h6>
                                                <p><small>Based on your listing info</small></p>
                                            </div>
                                            <div class="inner_add_listing_drop">
                                                <div class="filter_lst">
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Bedrooms</h5>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Full Bathroom</h5>
                                                            <p><small>Tollet, sink, shower and/or tub</small></p>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Full Kitchen</h5>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Living room</h5>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Laundry room</h5>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Exterior</h5>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="br_mini"></div>
                                                <div class="info_heading_confirm">
                                                    <h4>How about these?</h4>
                                                    <div class="br_mini"></div>
                                                </div>
                                                <div class="filter_lst">
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Half bathroom</h5>
                                                            <p><small>Tollet and sink</small></p>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Kitchenette</h5>
                                                            <p><small>A compact space to prepare food</small></p>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                    <div class="flex_filter">
                                                        <div class="left_drop">
                                                            <h5>Dinning area</h5>
                                                        </div>
                                                        <div class="qtyBtn">
                                                            <input type="button" value="-" class="qtyminus readBtn">
                                                            <input type="text" name="quantity" value="1" class="qty">
                                                            <input type="button" value="+" class="qtyplus readBtn">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xs-12">
                                            <h6>Description for how to arrive at the property</h6>
                                            <div class="form_blk">
                                                <textarea name="" class="input" placeholder="write description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="info_heading_confirm">
                                                <h4>Hunt Duration</h4>
                                                <div class="br_mini"></div>
                                            </div>
                                            <div class="form_row row">
                                                <div class="col-xs-6">
                                                    <h6>From</h6>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <h6>To</h6>
                                                    <div class="form_blk">
                                                        <input type="text" name="" id="" class="input datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <h6>Maximum Number of Hunters</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <h6>Land Type</h6>
                                            <div class="form_blk">
                                                <select name="" class="input">
                                                    <option value="">- Select Land Type -</option>
                                                    <option value="">Public</option>
                                                    <option value="">Private</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <h6>Hunting Method</h6>
                                            <div class="form_blk">
                                                <select name="" class="input">
                                                    <option value="">- Select Hunting Method -</option>
                                                    <option value="">Calling</option>
                                                    <option value="">Fair Chase</option>
                                                    <option value="">Meat Hunt</option>
                                                    <option value="">Muzzleloader</option>
                                                    <option value="">Stalking</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <h6>Hunting Animals</h6>
                                            <div class="flex animal_hunt_flex">
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="moose" class="hide" id="moose">
                                                        <label for="moose">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/moose.png" alt="">
                                                            </div>
                                                            <p>Moose</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner active">
                                                        <input type="checkbox" name="species" value="stone-sheep" class="hide" id="sheep">
                                                        <label for="sheep">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/sheep.png" alt="">
                                                            </div>
                                                            <p>Stone Sheep</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="bighorn-sheep" class="hide" id="bighorn_sheep">
                                                        <label for="bighorn_sheep">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/bighorn.png" alt="">
                                                            </div>
                                                            <p>Bighorn Sheep</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="goat" class="hide" id="goat">
                                                        <label for="goat">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/goat.png" alt="">
                                                            </div>
                                                            <p>Mountain Goat</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="caribou" class="hide" id="caribou">
                                                        <label for="caribou">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/caribou.png" alt="">
                                                            </div>
                                                            <p>Caribou</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="teal" class="hide" id="teal">
                                                        <label for="teal">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/teal.png" alt="">
                                                            </div>
                                                            <p>Teal</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="bison" class="hide" id="bison">
                                                        <label for="bison">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/bison.png" alt="">
                                                            </div>
                                                            <p>Bison</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="lion" class="hide" id="lion">
                                                        <label for="lion">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/lion.png" alt="">
                                                            </div>
                                                            <p>Mountain Lion</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="goose" class="hide" id="goose">
                                                        <label for="goose">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/goose.png" alt="">
                                                            </div>
                                                            <p>Canada Goose</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="turkey" class="hide" id="turkey">
                                                        <label for="turkey">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/turkey.png" alt="">
                                                            </div>
                                                            <p>Turkey</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="coues_deer" class="hide" id="coues_deer">
                                                        <label for="coues_deer">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/reindeer.png" alt="">
                                                            </div>
                                                            <p>Coues Deer</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="mule_deer" class="hide" id="mule_deer">
                                                        <label for="mule_deer">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/deer.png" alt="">
                                                            </div>
                                                            <p>Mule Deer</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="_col">
                                                    <div class="_inner">
                                                        <input type="checkbox" name="species" value="whitetail" class="hide" id="whitetail">
                                                        <label for="whitetail">
                                                            <div class="img_icon">
                                                                <img src="<?= $baseurl ?>assets/images/whitetail.png" alt="">
                                                            </div>
                                                            <p>Whitetail Deer</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <h6>Details</h6>
                                            <div class="form_blk">
                                                <textarea name="" class="input" placeholder="write description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn_blk text-center">
                                        <button type="button" class="site_btn blank backBtn">Back</button>
                                        <button type="button" class="site_btn nextBtn">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="form_row row">
                                        <div class="col-xs-12">
                                            <h6>Which is most like your place?</h6>
                                            <div class="form_blk">
                                                <select name="" id="" name="" class="input">
                                                    <option value="">House</option>
                                                    <option value="">House</option>
                                                    <option value="">House</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <h6>Property type</h6>
                                            <div class="form_blk">
                                                <select name="" id="" name="" class="input">
                                                    <option value="">Home</option>
                                                    <option value="">House</option>
                                                    <option value="">House</option>
                                                </select>
                                                <small>A home that may stand-alone or have shared walls.</small>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <h6>Listing type</h6>
                                            <div class="form_blk">
                                                <select name="" id="" name="" class="input">
                                                    <option value="">Entire place</option>
                                                    <option value="">Entire place</option>
                                                    <option value="">Entire place</option>
                                                </select>
                                                <small>Guests have the whole place to themselves, This usually includes bedroom, a bathroom and a kitchen.</small>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h6>How may floors does the buildiing have?</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h6>Which floor is the listing on?</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h6>Year built</h6>
                                            <div class="form_blk">
                                                <input type="text" name="" id="" class="input datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h6>Property size</h6>
                                            <div class="form_blk">
                                                <select name="" class="input">
                                                    <option value="">Unite</option>
                                                    <option value=""></option>
                                                </select>
                                                <small>The amount of indoor space that's available to guests.</small>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="btn_blk text-center">
                                        <button type="button" class="site_btn blank backBtn">Back</button>
                                        <button type="button" class="site_btn nextBtn">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="crud_image">
                                        <h4>Upload Images</h4>
                                        <div class="upLoadBlk input">
                                            <div class="inside">
                                                <ul class="imgLst flex">
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/hunt2.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/destination3.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/destination1.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/destination4.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/destination5.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/e4.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/e3.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <img src="<?= $baseurl ?>assets/images/e2.jpg" alt="">
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="image_upload_blk uploadImg" data-upload="gallery_image">
                                                <div class="small_upload_icon">
                                                    <img src="<?= $baseurl ?>assets/images/dashboard/upload.png" alt="">
                                                </div>
                                                <h3>Upload</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crud_image">
                                        <h4>Upload Videos</h4>
                                        <div class="upLoadBlk input">
                                            <div class="inside">
                                                <ul class="imgLst flex">
                                                    <li>
                                                        <div class="image">
                                                            <video src="<?= $baseurl ?>assets/images/animal.mp4" controls>
                                                                <source src="<?= $baseurl ?>assets/images/animal.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <video src="<?= $baseurl ?>assets/images/animal.mp4" controls>
                                                                <source src="<?= $baseurl ?>assets/images/animal.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image">
                                                            <video src="<?= $baseurl ?>assets/images/animal.mp4" controls>
                                                                <source src="<?= $baseurl ?>assets/images/animal.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="closeBtn"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="image_upload_blk uploadImg" data-upload="gallery_image">
                                                <div class="small_upload_icon">
                                                    <img src="<?= $baseurl ?>assets/images/dashboard/upload.png" alt="">
                                                </div>
                                                <h3>Upload</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk text-center">
                                        <button type="button" class="site_btn blank backBtn">Back</button>
                                        <button type="submit" class="site_btn">Submit</button>
                                    </div>
                                </fieldset>
                                <input type="file" name="" id="" class="uploadFile" data-upload="gallery_image">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once('../includes/commonjs.php'); ?>
</body>

</html>