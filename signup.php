<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Taste Hub</title>
    <?php include_once('includes/site-master.php') ?>
</head>

<body>
    <?php include_once('includes/header.php') ?>
    <!-- =========================banner=================== -->
    <main>
        <section class="logon">
            <div class="contain">
                <div class="log_blk">
                    <form action="" method="">
                        <h3>Sign Up</h3>
                        <div class="form_blk">
                            <label for="" class="move">First Name</label>
                            <input type="text" name="name" id="" class="input" required="">
                        </div>
                        <div class="form_blk">
                            <label for="" class="move">Last Name</label>
                            <input type="text" name="name" id="" class="input" required="">
                        </div>
                        <div class="form_blk">
                            <label for="" class="move">Email Address</label>
                            <input type="text" name="email" id="" class="input" required="">
                        </div>
                        <div class="form_blk pass_blk">
                            <label for="" class="move">Password</label>
                            <input type="password" name="password" id="" class="input" required="">
                            <i class="icon-eye"></i>
                        </div>
                        <div class="form_blk flex">
                            <div class="lbl_btn">
                                <input type="checkbox" name="confirm" id="confirm" checked="">
                                <label for="confirm">By signing up, I agree to elusivehunters
                                    <a href="terms-and-conditions.php" target="_blank">Terms &amp; Conditions</a>
                                    and
                                    <a href="privacy-policy.php" target="_blank">Privacy Policy.</a>
                                </label>
                            </div>
                        </div>
                        <div class="btn_blk text-center">
                            <button type="submit" class="webBtn default-btn">Sign up<i class="spinner hidden"></i></button>
                        </div>
                    </form>
                    <div class="br"></div>
                    <div class="have_account text-center">
                        <span>Don’t have an account?</span>
                        <a href="login.php">Sign in</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php include_once('includes/footer.php') ?>
    <?php include_once('includes/commonjs.php') ?>
</body>

</html>