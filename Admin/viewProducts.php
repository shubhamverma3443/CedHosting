<?php
require_once '../processLogic.php';
$viewProducts = new admin();
$arr = $viewProducts->viewProducts();
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
                <div class="col-lg-11 col-md-10 bg-secondary p-5 rounded shadow table-responsive">
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Category</th>
                                <th scope="col" class="sort" data-sort="budget">Availability</th>
                                <th scope="col" class="sort" data-sort="status">Launch Date</th>
                                <th scope="col">Description</th>
                                <th scope="col" class="sort" data-sort="completion">Monthly Price</th>
                                <th scope="col" class="sort" data-sort="completion">Annualy Price</th>
                                <th scope="col" class="sort" data-sort="completion">Sku</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        <?php
                        for ($i = 0; $i < 2; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j < 7; $j++) {
                                if($j==3){
                                    $data=json_decode($arr[$i][$j]);
                                    echo '<td>';
                                    foreach($data as $x=>$y){
                                        echo "<span class='text-primary'>",$x,":    ","</span>",$y,"<br>";
                                    }
                                    echo '</td>';
                                }else{
                                echo "<td>", $arr[$i][$j], "</td>";
                                }
                            }
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
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