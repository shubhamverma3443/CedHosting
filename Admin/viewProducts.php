<?php
session_start();
if (isset($_SESSION['admin'])) {
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
        <!-- Sidenav -->
        <?php include 'header.php' ?>
        <!-- Page content -->
        <div class="main-content" id="panel">
            <?php include 'content.php' ?><br>
            <div class="container mt--6 ">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-md-10 bg-secondary p-5 rounded shadow table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Id</th>
                                    <th scope="col" class="sort" data-sort="name">Product Category</th>
                                    <th scope="col" class="sort" data-sort="budget">Product Name</th>
                                    <th scope="col" class="sort" data-sort="status">Url</th>
                                    <th scope="col" class="sort" data-sort="status">Web Space (GB)</th>
                                    <th scope="col" class="sort" data-sort="completion">Bandwidth (GB)</th>
                                    <th scope="col" class="sort" data-sort="completion">Free Domain</th>
                                    <th scope="col" class="sort" data-sort="completion">Language</th>
                                    <th scope="col" class="sort" data-sort="completion">Mailbox</th>
                                    <th scope="col" class="sort" data-sort="completion">Monthly Price (Rs)</th>
                                    <th scope="col" class="sort" data-sort="completion">Annualy Price (Rs)</th>
                                    <th scope="col" class="sort" data-sort="completion">Sku</th>
                                    <th scope="col" class="sort" data-sort="completion">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php
                                if($arr!=''){
                                foreach ($arr as $key => $row) {
                                    echo "<tr>";
                                    foreach ($row as $key2 => $val) {
                                        if ($key2 == '1') {
                                            $data = json_decode($val);
                                            foreach ($data as $x => $y) {
                                                if ($x == 'Product Name') {
                                                    $name = $y;
                                                }
                                                echo "<td>", $y, "</td>";
                                            }
                                        } else {
                                            echo "<td>", $val, "</td>";
                                        }
                                    }
                                    $opdata = $row['0'] . " " . $name;
                                ?>
                                    <td><button class="btn btn-primary edit" type="button" value="<?php echo $opdata ?>">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn btn-danger delete" type="button" value="<?php echo $opdata ?>">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                <?php
                                    echo "</tr>";
                                }
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
    <script>
        $(".delete").click(function() {
            $confirm = confirm("Are you sure?")
            if ($confirm == true) {
                var fired_button = $(this).val();
                console.log(fired_button);
                $.post("transition.php", {
                        id: fired_button,
                        operation: "delete"
                    },
                    function(response) {
                        if (response == 'success') {
                            alert('Data Deleted Successfully');
                            location.reload();
                        } else {
                            alert('Try Again!');
                        }
                    }
                )
            }
        });
        $(".edit").click(function() {
            var fired_button = $(this).val();
            $.post("transition.php", {
                    id: fired_button,
                    operation: "delete"
                },
                function(response) {
                    console.log("success");
                })
        })
    </script>

    </html>
<?php } else {
    header('location:../login.php');
} ?>