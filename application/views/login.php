
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $judul_halaman ?></title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('assets/polluxui/template/') ?>vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url('assets/polluxui/template/') ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/polluxui/template/') ?>css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/polluxui/template/') ?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Welcome to CMS!</h4>
              <h6 class="font-weight-light">Login untuk melanjutkan.</h6>
              <form class="pt-3" action="<?= base_url('auth/login') ?>" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    login
                  </button>
                  <div id="ngilang">
	              <?= $this->session->flashdata('alert') ?>
                </div>
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
  <!-- base:js -->
  <script src="<?= base_url('assets/polluxui/template/') ?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/polluxui/template/') ?>js/off-canvas.js"></script>
  <script src="<?= base_url('assets/polluxui/template/') ?>js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/polluxui/template/') ?>js/template.js"></script>
  <script src="<?= base_url('assets/polluxui/template/') ?>js/settings.js"></script>
  <script src="<?= base_url('assets/polluxui/template/') ?>js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
