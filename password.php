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
                        <h3>Reset your password here!</h3>
                        <div class="form_blk pass_blk">
                            <label for="" class="move">Current Password</label>
                            <input type="password" name="password" id="" class="input" required="">
                            <i class="icon-eye"></i>
                        </div>
                        <div class="form_blk pass_blk">
                            <label for="" class="move">New Password</label>
                            <input type="password" name="password" id="" class="input" required="">
                            <i class="icon-eye"></i>
                        </div>
                        <div class="btn_blk text-center">
                            <button type="submit" class="webBtn default-btn">Reset Password<i class="spinner hidden"></i></button>
                        </div>
                    </form>
                    <div class="br"></div>
                    <div class="have_account text-center">
                        <span>Don’t have an account?</span>
                        <a href="signup.php">Sign up</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php include_once('includes/footer.php') ?>
    <?php include_once('includes/commonjs.php') ?>
</body>

</html>