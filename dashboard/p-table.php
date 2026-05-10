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
                <div class="dash_body">
                    <div class="cta add_pay">
                        <a href="payments.php" class="webBtn default-btn">Add New Payment</a>
                    </div>
                    <div class="inner_dash_body payments_dash">
                        <div class="blk">
                            <div class="block_lst">
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="20%">User Name</th>
                                            <th width="15%">Bank Name</th>
                                            <th width="15%">Account Title</th>
                                            <th width="20%">Account Number</th>
                                            <th width="15%">Status</th>
                                            <th width="15%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Umer Hassan</td>
                                            <td>HSBC </td>
                                            <td>John Doe</td>
                                            <td>************3345</td>

                                            <td><span class="miniLbl green">Complete</span></td>
                                            <td class="dash_actions">
                                                <a href="add-payment-method.php" class="webBtn labelBtn blue-color">Edit</a>
                                                <a href="payment-method.php" onclick="return confirm('Are you sure?');" class="webBtn labelBtn red-color">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Umer Hassan</td>
                                            <td>HSBC</td>
                                            <td>John Doe</td>
                                            <td>************3345</td>

                                            <td><span class="miniLbl yellow">Pending</span></td>
                                            <td class="dash_actions">
                                                <a href="add-payment-method.php" class="webBtn labelBtn blue-color">Edit</a>
                                                <a href="payment-method.php" onclick="return confirm('Are you sure?');" class="webBtn labelBtn red-color">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Umer Hassan</td>
                                            <td>HSBC</td>
                                            <td>John Doe</td>
                                            <td>************3345</td>

                                            <td><span class="miniLbl red">Canceled</span></td>
                                            <td class="dash_actions">
                                                <a href="add-payment-method.php" class="webBtn labelBtn blue-color">Edit</a>
                                                <a href="payment-method.php" onclick="return confirm('Are you sure?');" class="webBtn labelBtn red-color">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Umer Hassan</td>
                                            <td>HSBC</td>
                                            <td>John Doe</td>
                                            <td>************3345</td>

                                            <td><span class="miniLbl yellow">Pending</span></td>
                                            <td class="dash_actions">
                                                <a href="add-payment-method.php" class="webBtn labelBtn blue-color">Edit</a>
                                                <a href="payment-method.php" onclick="return confirm('Are you sure?');" class="webBtn labelBtn red-color">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Umer Hassan</td>
                                            <td>HSBC</td>
                                            <td>John Doe</td>
                                            <td>************3345</td>

                                            <td><span class="miniLbl green">Complete</span></td>
                                            <td class="dash_actions">
                                                <a href="add-payment-method.php" class="webBtn labelBtn blue-color">Edit</a>
                                                <a href="payment-method.php" onclick="return confirm('Are you sure?');" class="webBtn labelBtn red-color">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Umer Hassan</td>
                                            <td>HSBC</td>
                                            <td>John Doe</td>
                                            <td>************3345</td>

                                            <td><span class="miniLbl yellow">Pending</span></td>
                                            <td class="dash_actions">
                                                <a href="add-payment-method.php" class="webBtn labelBtn blue-color">Edit</a>
                                                <a href="payment-method.php" onclick="return confirm('Are you sure?');" class="webBtn labelBtn red-color">Delete</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <!-- <tbody>
                                        <tr>
                                            <td>#7F6823</td>
                                            <td class="price_bold">$250</td>
                                            <td>September 25, 2018</td>
                                            <td>12:20 AM</td>
                                            <td><span class="miniLbl green">Complete</span></td>
                                        </tr>
                                        <tr>
                                            <td>#GH2538</td>
                                            <td class="price_bold">$150</td>
                                            <td>September 20, 2018</td>
                                            <td>10:20 AM</td>
                                            <td><span class="miniLbl yellow">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>#7F6823</td>
                                            <td class="price_bold">$250</td>
                                            <td>September 25, 2018</td>
                                            <td>12:20 AM</td>
                                            <td><span class="miniLbl red">Canceled</span></td>
                                        </tr>
                                        <tr>
                                            <td>#GH2538</td>
                                            <td class="price_bold">$150</td>
                                            <td>September 20, 2018</td>
                                            <td>10:20 AM</td>
                                            <td><span class="miniLbl yellow">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>#GH2538</td>
                                            <td class="price_bold">$150</td>
                                            <td>September 20, 2018</td>
                                            <td>10:20 AM</td>
                                            <td><span class="miniLbl green">Complete</span></td>
                                        </tr>
                                        <tr>
                                            <td>#7F6823</td>
                                            <td class="price_bold">$250</td>
                                            <td>September 25, 2018</td>
                                            <td>12:20 AM</td>
                                            <td><span class="miniLbl red">Canceled</span></td>
                                        </tr>
                                        <tr>
                                            <td>#GH2538</td>
                                            <td class="price_bold">$150</td>
                                            <td>September 20, 2018</td>
                                            <td>10:20 AM</td>
                                            <td><span class="miniLbl green">Complete</span></td>
                                        </tr>

                                    </tbody> -->
                                </table>
                            </div>
                        </div>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a class="active" href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="popup sm withdraw_popup" data-popup="withdraw">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner">
                            <div class="x_btn"></div>
                            <h5>Withdrawal Confirmation</h5>
                            <div class="">
                                <div class="bankAccList">
                                    <div class="inner">
                                        <p> <strong>Account Balance:</strong> $820</p>
                                    </div>
                                    <form method="" action="">
                                        <div class="inner">
                                            <select name="" class="input">
                                                <option value="0">Bank Account</option>
                                                <option value="hsbc">HSBC Holdings</option>
                                                <option value="chase">JPMorgan Chase</option>
                                                <option value="chase">JPMorgan Chase</option>
                                                <option value="chase">JPMorgan Chase</option>
                                                <option value="citigroup">Citigroup</option>
                                            </select>
                                        </div>
                                        <div class="btn_blk text-center">
                                            <input type="submit" name="" value="Submit" class="site_btn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once('../includes/commonjs.php'); ?>
</body>

</html>