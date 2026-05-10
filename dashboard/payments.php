<!doctype html>
<html>

<head>
    <title>Payments -- ELUSIVEHUNTERS</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/d-header.php'); ?>
    <main index class="dash_bdy">
        <section class="dash">
            <div class="contain">
                <div class="dash_heading_sec">
                    <div class="main_page_heading">
                        <a href="index.php">Dashboard</a>
                        <span>/</span>
                        <h2>Payments</h2>
                    </div>
                </div>
                <div class="payblr">
                    <div class="dash_body">
                        <div class="dash_heading">
                            <h2>Add New Payment Method</h2>
                        </div>
                        <div class="dash_blk_box">
                            <form action="" method="post" class="frmAjax" id="frmTopic">
                                <div class="formRow row">
                                    <div class="col-md-6">
                                        <div class="txtGrp">
                                            <label for="" class="move move_important">Name On Card</label>
                                            <input type="text" name="" id="" value="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="txtGrp">
                                            <label for="" class="move move_important">Card Number</label>
                                            <input type="text" name="" id="" value="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="txtGrp">
                                            <label for="" class="move move_important">Expiration</label>
                                            <input type="text" name="" id="" value="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="txtGrp">
                                            <label for="" class="move move_important">CVC</label>
                                            <input type="text" name="" id="" value="" class="txtBox">
                                        </div>
                                    </div>
                                </div>

                                <div class="bTn formBtn text-center">
                                    <button type="submit" class="webBtn default-btn">Submit <i class="spinner hidden"></i></button>
                                </div>
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