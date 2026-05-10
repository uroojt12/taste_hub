<!-- header -->
<header class="ease header">
    <div class="contain">
        <div class="logo">
            <a href="index.php" style="display:block;">
                <img src="<?= $baseurl ?>images/logo.jpg" alt="">
            </a>
        </div>
        <div class="toggle dash_toggle">
            <span></span>
        </div>
        <nav class="ease">
            <div nav>
                <ul id="nav">
                    <li>
                        <a href="index.php" class="<?= ($page == 'index') ? 'active' : '' ?>">Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="subscription.php" class="<?= ($page == 'subscription') ? 'active' : '' ?>">Subscription Plans
                        </a>
                    </li>
                    <li>
                        <a href="p-table.php" class="<?= ($page == 'p-table') ? 'active' : '' ?>">Payment methods
                        </a>
                    </li>
                    <li>
                        <a href="rest.php" class="<?= ($page == 'rest') ? 'active' : '' ?>">Restaurants
                        </a>
                    </li>
                    <li>
                        <a href="analytic.php" class="<?= ($page == 'analytic') ? 'active' : '' ?>">Analytics
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
        <ul class="login_lnks">
            <li class="drop">
                <a href="javascript:void(0)" class="drop_btn">
                    <span>
                        <img src="<?= $baseurl ?>images/t-1.jpg" alt="">
                    </span>
                    <em></em>
                </a>
                <div class="drop_cnt dash_drop">
                    <ul class="drop_lst">
                        <li>
                            <div class="inner_dp">
                                <div class="_dp">
                                    <img src="<?= $baseurl ?>images/t-1.jpg" alt="">
                                </div>
                                <div class="account_cnt">
                                    <h5>Zaviyar Ali</h5>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <a href="profile.php">Profile Settings</a>
                        </li>
                        <li class="btn_blk">
                            <a href="" class="webBtn default-btn">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</header>