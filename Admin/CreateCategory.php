<!-- Process Form Data -->
<?php
session_start();
if (isset($_SESSION['admin'])) {
  if (isset($_POST['submit'])) {
    require '../processLogic.php';
    $addcategory = new admin();
    $addcategory->addcategory($_POST['pname']);
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
          <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary border-0 mb-0">
              <div class="card-body px-lg-5 py-lg-5">
                <form role="form" action="" id="form" method="POST">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                      <input class="form-control" type="button" value="Hosting">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                      </div>
                      <input class="form-control" placeholder="Product Name" type="text" name="pname" required>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4" name="submit">Create Category</button>
                  </div>
                </form>
              </div>
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
<?php }else{
  header('location:../login.php');
} ?>