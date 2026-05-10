<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Taste-Hub</title> <?php require_once('includes/site-master.php'); ?>
</head>

<body> <?php require_once('includes/header.php'); ?>
    <main>
        <section class="sub_banner">
            <div class="contain">
                <div class="cntnt">
                    <h1>Register Reservation</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </section>
        <!-- ===contact-form====== -->
        <section class="contact-form" style="margin-top: 0;">
            <div class="contain">
                <div class="text">
                    <div class="title-white">Registration</div>
                    <h2>Register Your Restaurant Here</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="inner">
                    <div class="sec_heading">
                        <h2>Let's Start</h2>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="Restaurant Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="Restaurant Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="Manager Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="Manager Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <select name="" id="" class="txtBox">
                                        <option value="1">Country</option>
                                        <option value="2">Pakistan</option>
                                        <option value="3">America</option>
                                        <option value="4">China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <h4>Location</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="State">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <select name="" id="" class="txtBox">
                                        <option value="1">City</option>
                                        <option value="2">Sargodha</option>
                                        <option value="3">Lahore</option>
                                        <option value="4">Karachi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="Latitude">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="Longitude">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <h4>Discount</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <input type="text" class="txtBox" required="required" placeholder="Discount You Want">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="lbl_btn">
                                    <input type="checkbox" name="confirm" id="confirm" checked="">
                                    <label for="confirm">By Registering You Confirm That You Accept The
                                        <a href="terms-and-conditions.php" target="_blank">Terms &amp; Conditions</a>
                                        and
                                        <a href="privacy-policy.php" target="_blank">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-box">
                                    <button class="webBtn default-btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require_once('includes/footer.php'); ?>
    <?php include_once('includes/commonjs.php') ?>
</body>

</html>