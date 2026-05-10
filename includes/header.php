<!-- header -->
<header class="ease">
    <div class="topNav">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    <a href="tel:+(844) 331-5323">
                        <div class="img">
                            <img src="images/phone.png" alt="">
                        </div>
                        <span>+(844) 331-5323</span>
                    </a>
                    <a href="">
                        <div class="img">
                            <img src="images/mail.png" alt="">
                        </div>
                        <span>tastehub123@gmail.com</span>
                    </a>
                </div>
                <div class="colM">
                    <div class="login-1">
                        <p><a href="login.php">SignIn </a> /
                            <a href="signup.php"> Register</a>
                        </p>
                    </div>
                </div>
                <div class="colR flex">
                    <ul class="social flex">
                        <li>
                            <a href="">
                                <img src="images\facebook.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images\instagram-1.png" alt="">
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <img src="images\youtube.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images\twitter.png" alt="">
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contain">
        <div class="logo">
            <a href="index.php" style="display:block;">
                <img src="images/logo.jpg" alt="">
            </a>
        </div>
        <div class="toggle">
            <span></span>
        </div>
        <nav class="ease">
            <div nav>
                <ul id="nav">
                    <li>
                        <a class="<?= ($page == 'index' || $page == '') ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php" class="<?= ($page == 'about') ? 'active' : '' ?>">About
                        </a>
                    </li>
                    <li>
                        <a href="price.php" class="<?= ($page == 'price') ? 'active' : '' ?>">Pricing
                        </a>
                    </li>
                    <!-- <li>
                        <a href="partner.php" class="<?= ($page == 'patner') ? 'active' : '' ?>">Our Partners
                        </a>
                    </li> -->
                    <li>
                        <a href="faq.php" class="<?= ($page == 'faq') ? 'active' : '' ?>">FAQ
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="<?= ($page == 'contact') ? 'active' : '' ?>">Contact
                        </a>
                    </li>
                </ul>
                <div id="cta">
                    <a href="restaurant.php" class="webBtn default-btn" class="<?= ($page == 'restuarant') ? 'active' : '' ?>">
                        Register Restaurant
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>