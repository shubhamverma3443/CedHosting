<?php
session_start();
if (isset($_SESSION['admin'])) {
    require_once '../processLogic.php';
    if (isset($_POST['submit'])) {
        $productDetails['Product Category'] = $_POST['productCategory'];
        $productDetails['Product Name'] = $_POST['productName'];
        $productDetails['Url'] = $_POST['url'];
        $productValidity['Monthly Price'] = $_POST['monthlyPrice'];
        $productValidity['Annual Price'] = $_POST['annualPrice'];
        $productValidity['Sku'] = $_POST['sku'];
        $productDetails['WebSpace'] = $_POST['webSpace'];
        $productDetails['Bandwidth'] = $_POST['bandwidth'];
        $productDetails['Free Domain'] = $_POST['freeDomain'];
        $productDetails['Language'] = $_POST['language'];
        $productDetails['Mailbox'] = $_POST['mailbox'];
        $createProduct = new admin();
        $res = $createProduct->createProduct(json_encode($productDetails), $productValidity, $productDetails['Product Category'], $productDetails['Product Name']);
        if ($res == 0) {
            echo "<script>alert('Try Again')</script>";
        } elseif ($res == 1) {
            echo "<script>alert('Product Aleardy Exist')</script>";
        } elseif ($res == 3) {
            echo "<script>alert('Try Again')</script>";
        } else {
            echo "<script>alert('Product Added Successfully')</script>";
        }
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Admin Zone</title>
        <link rel="stylesheet" href="style.css">
        <!-- Favicon -->
        <link rel="icon" href="argon-dashboard-master/assets/img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="argon-dashboard-master/assets/css/argon.css?v=1.2.0" type="text/css">
    </head>

    <body>
        <!-- Sidenav -->
        <?php include 'header.php' ?>
        <!-- Page content -->
        <div class="main-content" id="panel">
            <?php include 'content.php' ?><br>
            <div class="container mt--6">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 bg-secondary p-5 rounded shadow">
                        <h1>Create New Product</h1>
                        <p>Enter Product Details</p>
                        <hr class="my-4">
                        <form method="POST">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Product Category</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="productCategory">
                                        <option>Please Select</option>
                                        <?php
                                        $selectCategory = new admin();
                                        $productList = $selectCategory->selectCategory();
                                        foreach ($productList as $product) {
                                            echo "<option value='$product'>", $product, "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Enter Product Name</label>
                                <input class="form-control" type="text" name="productName">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Page URL</label>
                                <input class="form-control" type="text" name="url">
                            </div>
                            <hr class="my-4">
                            <h1>Product Description</h1>
                            <p>Enter Product Description Below</p>
                            <hr class="my-4">
                            <div class="form-group">
                                <label class="form-control-label">Enter Monthly Price</label>
                                <input class="form-control" type="number" name="monthlyPrice" placeholder="ex:23">
                            </div>
                            <div class="form-group">
                                <label for="example-tel-input" class="form-control-label">Enter Annual Price </label>
                                <input class="form-control" type="number" name="annualPrice" placeholder="ex:23">
                            </div>
                            <div class="form-group">
                                <label for="example-password-input" class="form-control-label">SKU</label>
                                <input class="form-control" type="text" name="sku">
                            </div>
                            <hr class="my-4">
                            <h1>Features</h1>
                            <hr class="my-4">
                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Web Space(in GB)</label>
                                <input class="form-control" type="number" name="webSpace">
                            </div>
                            <div class="form-group">
                                <label for="example-datetime-local-input" class="form-control-label">Bandwidth (in GB)</label>
                                <input class="form-control" type="number" name="bandwidth">
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Free Domain</label>
                                <input class="form-control" type="text" name="freeDomain">
                            </div>
                            <div class="form-group">
                                <label for="example-month-input" class="form-control-label">Language / Technology Support</label>
                                <input class="form-control" type="text" name="language">
                            </div>
                            <div class="form-group">
                                <label for="example-week-input" class="form-control-label">Mailbox </label>
                                <input class="form-control" type="text" name="mailbox">
                            </div>
                            <hr class="my-4">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4" name="submit">Create New</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="argon-dashboard-master/assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="argon-dashboard-master/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="argon-dashboard-master/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="argon-dashboard-master/assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="argon-dashboard-master/assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="argon-dashboard-master/assets/js/argon.js?v=1.2.0"></script>
    </body>

    </html>
<?php } else {
    header('location:../login.php');
} ?>