<!doctype html>
<html>

<head>
    <title>Payments -- ELUSIVEHUNTERS</title>
    <?php include_once('includes/site-master.php') ?>
</head>

<body id="home-page">
    <?php include_once('includes/header.php') ?>
    <!-- ============ -->
    <main>
        <section class="dash update sub_pages chk">
            <div class="contain">
                <form action="" method="post" autocomplete="off" id="payment-form">
                    <div class="flexRow flex">
                        <div class="col col1">
                            <div class="blk">
                                <div class="flex">
                                    <p>If you have an account then <a href="javascript:void(0)" class="popBtn style_btn" data-popup="form2"> SignIn </a> first or <a href="javascript:void(0)" class="popBtn style_btn" data-popup="form1"> Create an account </a></p>
                                </div>
                            </div>
                            <div class="blk">
                                <div class="guset_user">
                                    <div class="_header">
                                        <h3>PERSONAL DETAILS</h3>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" id="g_fullname" name="" class="txtBox" value="" placeholder="Full Name" required="required">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="email" id="mem_guest" name="" class="txtBox" value="" placeholder="Email Address" required="required">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" id="g_phone" name="" class="txtBox" value="" placeholder="Phone Number" required="required">
                                        </div>


                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" id="g_city" name="" class="txtBox" value="" placeholder="City" required="required">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" name="" id="" class="txtBox" value="" placeholder="Postcode" required="required">
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="blk">

                                <div class="guset_user">
                                    <div class="_header">
                                        <h3>BILLING DETAILS</h3>
                                    </div>
                                    <div class="row formRow">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" id="g_fullname" name="" class="txtBox" value="" placeholder="Full Name" required="required">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="email" id="mem_guest" name="" class="txtBox" value="" placeholder="Email Address" required="required">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" id="g_phone" name="" class="txtBox" value="" placeholder="Phone Number" required="required">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" name="" id="g_add1" class="txtBox" value="" placeholder="Billing Address" required="required">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <select id="g_country" name="" class="txtBox" required="required">
                                                <option value="">- Select Country -</option>
                                                <option value="United States">United States</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <select id="g_state" name="" class="txtBox" required="required">
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" id="g_city" name="" class="txtBox" value="" placeholder="City" required="required">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12  ">
                                            <input type="text" name="" id="" class="txtBox" value="" placeholder="Postcode" required="required">
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col col2">
                            <div class="blk">
                                <div class="_header">
                                    <h3>Your Order</h3>
                                </div>
                                <div class="inner">
                                    <div class="planBlk feature">
                                        <div class="ribbon">15% OFF</div>
                                        <h4>Featured</h4>
                                        <div class="price"><small>£</small>119<small>/year</small></div>
                                        <ul>
                                            <li>OR £348.85 / year (15% off)</li>
                                            <li>Searchable listing</li>
                                            <li>Restaurant name</li>
                                            <li>Restaurant description</li>
                                            <li>Restaurant photo</li>
                                            <li>Restaurant location (country)</li>
                                            <li>Website link</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blk">
                                <div class="_header">
                                    <h3>Payment Method</h3>
                                </div>
                                <div class="creditCard">
                                    <div class="flex flex-2 headCredit cardSecBar">
                                        <div class="inner">
                                            <div class="lblBtn text-left">
                                                <input type="radio" id="card1" tabindex="1" name="card" checked="">
                                                <label for="card1">Credit Card</label>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <ul class="text-right">
                                                <li><img src="<?= $baseurl ?>images/card1.svg" alt=""></li>
                                                <li><img src="<?= $baseurl ?>images/card2.svg" alt=""></li>
                                                <li><img src="<?= $baseurl ?>images/card3.svg" alt=""></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex flex-2 cardSec">
                                        <div class="inner">
                                            <input type="text" name="" placeholder="Card Number" value="" class="txtBox">
                                        </div>
                                        <div class="inner">
                                            <input type="text" name="" placeholder="Card Holder" value="" class="txtBox">
                                        </div>
                                        <div class="inner">
                                            <input type="text" id="dp1606474773409" name="" class="txtBox datepicker hasDatepicker" placeholder="Expiry (mm/dd/yy)">
                                        </div>
                                        <div class="inner">
                                            <input type="text" id="" name="" class="txtBox" placeholder="CVC ?">
                                            <div class="info">
                                                <i class="fa fa-question"></i>
                                                <div class="infoTip">3-digit security code usually found on the back of your card. American Express cards have a 4-digit code located on the front.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-2 headCredit paypalSecBar">
                                        <div class="inner">
                                            <div class="lblBtn text-left">
                                                <input type="radio" id="card2" tabindex="1" name="card">
                                                <label for="card2">Pay Pal</label>
                                            </div>
                                        </div>
                                        <div class="inner">
                                        </div>
                                    </div>
                                    <div class="paypalSec text-center">
                                        <div class="ico-1"><img src="<?= $baseurl ?>images/card-out.svg" alt=""></div>
                                        <p>After clicking "Complete order", you will be redirected to PayPal to complete your purchase securely.</p>
                                    </div>



                                </div>
                                <div class="sq-field text-center">
                                    <button type="submit" class="webBtn default-btn" id="sq-creditcard">Pay Now</button>
                                    <div class="total">
                                        <ul>
                                            <li><span>Total:</span></li>
                                            <li>$698</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </form>
            </div>
        </section>

    </main>
    <?php include_once('includes/footer.php') ?>
    <?php include_once('includes/commonjs.php') ?>
</body>

</html>
<section class="popup" data-popup="form1">
    <div class="tableDv">
        <div class="tableCell">
            <div class="crosBtn"></div>
            <div class="contain">
                <div class="_inner">
                    <form action="">
                        <h3>SignUp Here</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="text" id="Firstname" placeholder="First Name" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="text" id="lastname" placeholder="Last Name" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="text" id="email" placeholder="Email" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="text" id="PhoneNo" placeholder="Phone No" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="password" id="PhoneNo" placeholder="Password" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp text-center">
                                    <button class="webBtn default-btn">SignUp</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popup" data-popup="form2">
    <div class="tableDv">
        <div class="tableCell">
            <div class="crosBtn"></div>
            <div class="contain">
                <div class="_inner">
                    <form action="">
                        <h3>SignIn Here</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="text" id="email" placeholder="Email" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="text" id="PhoneNo" placeholder="Phone No" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="password" id="PhoneNo" placeholder="Password" class="txtBox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp text-center">
                                    <button class="webBtn default-btn">SignIn</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>