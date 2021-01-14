<?php
$id = $_GET['id'];
$name = $_GET['name'];
require_once 'processLogic.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <?php require_once 'head.php' ?>
</head>

<body>
    <!---header--->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="sr-only">Toggle navigation</i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </button>
                        <div class="navbar-brand">
                            <h1><a href="index.html">Planet Hosting</a></h1>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $selectCategory = new admin();
                                    $productList = $selectCategory->selectCategory();
                                    foreach ($productList as $x => $y) {
                                        echo "<li><a href='productDetails.php?id=$x&name=$y'>$y</a></li>";
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!---header--->
    <div class="content">
        <div class="linux-section">
            <div class="container">
                <div class="linux-grids">
                    <div class="col-md-8 linux-grid">
                        <h2><?php echo $name ?></h2>
                        <ul>
                            <li><span>Unlimited </span> domains, email and disk space</li>
                            <li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
                            <li><span>1 click</span> WordPress Installation with cPanel (demo) platform</li>
                            <li><span>Launch </span> your business with Rs. 1000* Google AdWords Credit *</li>
                            <li><span>30 day </span> Money Back Guarantee</li>
                        </ul>
                        <a href="#">view plans</a>
                    </div>
                    <div class="col-md-4 linux-grid1">
                        <img src="images/cms.png" class="img-responsive" alt="" />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="tab-prices">
            <div class="container">
                <div class="linux-top us-top">
                    <h4>Products</h4>
                </div>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="linux-prices">
                                <?php
                                $productDescription = new common();
                                $value = $productDescription->productDescription($id);
                                $arr = array('Description : ', 'Monthly Price(Rs) : ', 'Annual Price(Rs) :  ', 'Sku :   ');
                                if ($value != '') {
                                    foreach ($value as $key => $row) {
                                ?>
                                        <div class="col-md-3 linux-price">
                                            <div class="linux-bottom us-bottom">
                                                <h5><i class='fas fa-rupee-sign'></i> <?php echo $row[1] ?><span class="month"> per month</span></h5>
                                                <ul>
                                                    <?php
                                                    $i = 0;
                                                    foreach ($row as $key2 => $val) {
                                                        if ($key2 == 0) {
                                                            $des = json_decode($val);
                                                            // --To display Product name--
                                                            foreach ($des as $x => $y) {
                                                                if ($x == 'Product Name') {
                                                                    echo "<h6>", $y, "</h6>";
                                                                }
                                                            }
                                                            // ------------------
                                                            echo "<li><strong>$arr[$i]</strong></li>";
                                                            foreach ($des as $x => $y) {
                                                                echo "$x:  $y<br>";
                                                            }
                                                        } else {
                                                            echo "<li><strong>$arr[$i]</strong>$val</li>";
                                                        }
                                                        $i++;
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <a href="#" class="us-button">buy now</a>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---footer--->
    <?php require_once 'footer.php' ?>
    <!---footer--->


</body>

</html>