<?php
session_start();
require_once 'processLogic.php';
?>
<!DOCTYPE HTML>
<html>

<head>
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
                            <li class="dropdown">
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
                            <li class="active"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Category</th>
                <th scope="col">Product Name</th>
                <th scope="col">Url</th>
                <th scope="col">WebSpace</th>
                <th scope="col">Bandwidth</th>
                <th scope="col">Free Domain</th>
                <th scope="col">Language</th>
                <th scope="col">Mailbox</th>
                <th scope="col">Plan</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // $arr2 = $_SESSION['cartData'];
            // foreach ($arr2 as $key => $row) {
            //     if ($key == 0) {
            //         foreach ($row as $y => $z) {
            //             echo "<td>$z</td>";
            //         }
            //     } else {
            //         echo "<td>$row</td>";
            //     }
            // }
            // print_r($arr2);
            // if (isset($_GET['id'])) {
            //     $id = $_GET['id'];
            //     $select = $_GET['plan'];
            //     $addProductInCart = new common();
            //     $res = $addProductInCart->addProductInCart($id, $select);
            //     print_r($res);
            //     if ($x == 'description') {
            //     $data = json_decode($res);
            //         foreach ($data as $a => $b) {
            //             echo "<td>$b</td>";
            //         }
            //     array_push($res, $select);
            //     $_SESSION['cartData'] = $res;
            // // }
            // $arr2 = $_SESSION['cartData'];
            // print_r($arr2);
            // foreach ($arr2 as $x => $y) {
            //     if ($x == 'description') {
            //         $data = json_decode($y);
            //         foreach ($data as $a => $b) {
            //             echo "<td>$b</td>";
            //         }
            //     } else {
            //         echo "<td>$y</td>";
            //     }
            // }
            // echo "<tr>";
            // $arr2 = $_SESSION['cartData'];
            // foreach($arr2 as $key=>$row){
            //     foreach($row as $key2=>$x){
            //         if($key2==0){
            //             foreach($x as $y=>$z){
            //                 echo "<td>$z</td>";
            //             }
            //         }else{
            //             echo "<td>$x</td>";
            //         }
            //     }
            // }
            // foreach ($arr[0] as $x => $y) {
            //     echo "<td>$y</td>";
            // }
            // if ($select == 'annual_price') {
            //     $newSelect = 'Annual Plan';
            // } else {
            //     $newSelect = 'Monthly Plan';
            // }
            // echo "<td>$newSelect</td><br>";
            // echo "<td>", $res[$select], "</td>";
            // echo "</tr>";
            // } else {
            //     echo "<tr><td>your cart is empty</td></tr>";
            // }
            ?>
        </tbody>
    </table>
    <!---footer--->
    <?php require_once 'footer.php' ?>
    <!---footer--->


</body>

</html>