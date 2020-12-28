<?php 

  $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/must.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="images/must.png">
              </div>
              <h4>Baru disini?</h4>
              <h6 class="font-weight-light">Yuk Daftar dulu biar bisa Login</h6>
              <form class="pt-3" action="proses-register.php" method="POST">
              <?php if ($notif == "password"): ?>
                <div class="alert alert-danger text-center">
                  password anda tidak sama
                </div>
              <?php endif ?>
              <?php if ($notif == "username"): ?>
                <div class="alert alert-danger text-center">
                  Username sudah terdaftar  
                </div>
              <?php endif ?>
                <div class="form-group">
                  <input required type="text" class="form-control form-control-lg" name="username" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <textarea name="alamat" placeholder="Masukkan e-mail" class="form-control form-control-lg"></textarea>
                </div>
                 <div class="form-group">
                  <textarea name="no_telp" placeholder="Masukkan no. telp" class="form-control form-control-lg"></textarea>
                </div>
                <div class="form-group">
                  <input required type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input required type="password" name="password2" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Konfirmasi Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">REGISTER</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already Have an Account ? <a href="login.php" class="text-primary">Login Here</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
