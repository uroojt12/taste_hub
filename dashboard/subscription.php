<!doctype html>
<html>

<head>
    <title>Payments -- ELUSIVEHUNTERS</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/d-header.php'); ?>
    <main index class="dash_bdy">
        <section id="plans" class="dash update">
            <div class="contain">
                <div class="dash_heading_sec">
                    <div class="main_page_heading">
                        <a href="index.php">Dashboard</a>
                        <span>/</span>
                        <h2>Subscription Plan</h2>
                    </div>
                </div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="planBlk basic">
                            <h4>Basic</h4>
                            <div class="price"><small></small>FREE<small></small></div>
                            <ul>
                                <li>Searchable listing</li>
                                <li>Restaurant name</li>
                                <li>Restaurant description</li>
                                <li>Restaurant photo</li>
                                <li>Restaurant location (country)</li>
                                <li>Website link
                                </li>
                                <li>Sustainability score</li>
                                <li>One category</li>
                            </ul>
                            <div class="bTn text-center"><a href="<?= $baseurl ?>check.php" class="webBtn simpleBtn">Choose Plan</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="planBlk pro">
                            <div class="ribbon">10% OFF</div>
                            <h4>Pro</h4>
                            <div class="price"><small>£</small>19<small>/month</small></div>
                            <ul>
                                <li>OR £205.2 / year (10% off)</li>
                                <li>Searchable listing</li>
                                <li>Restaurant name</li>
                                <li>Restaurant description</li>
                                <li>Restaurant photo</li>
                                <li>Restaurant location (country)</li>
                                <li>Website link</li>
                            </ul>
                            <div class="bTn text-center"><a href="<?= $baseurl ?>check.php" class="webBtn simpleBtn">Current Plan</a></div>
                            <div class="expire">
                                <p>Expiry Date: <strong>03/4/2023</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                            <div class="bTn text-center"><a href="<?= $baseurl ?>check.php" class="webBtn simpleBtn">Choose Plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="card">
            <div class="contain">
                <div class="flex">
                    <div class="col col1">
                        <div class="inner">

                            <h2>How to Get Membershipcard</h2>

                            <p>The EB-3 visa gives foreign workers a path to permanent residency with a promise of long-term work commitment with a US employer.</p>

                            <ul>
                                <li> Customers earn points or rewards based on their purchases or engagement with the company. </li>
                                <li> To reach a higher membership tier and obtain the corresponding membership card, individuals may need to accumulate a certain number of points.</li>
                                <li>Membership cards are obtained by paying a membership fee.</li>
                                <li>Membership cards is recognition for achieving specific milestones, such as completing a certain number of activities</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col col2">
                        <div class="inside">
                            <div class="card">
                                <div class="img">
                                    <img src="<?= $baseurl ?>images/logo-card.png" alt="">
                                </div>
                                <div class="card-header">Membership Card</div>
                                <DIV class="name">
                                    <h6>Jhon Scar</h6>
                                </DIV>
                                <div class="card-content">
                                    <p>Membership Id: #75658</p>
                                    <p>Member till: 11/12/2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once('../includes/commonjs.php'); ?>
</body>

</html>