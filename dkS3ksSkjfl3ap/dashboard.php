<?php
include_once('config/lock.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>789 Dashboard</title>
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <link rel="canonical" href="https://blog.appseed.us/bootstrap-for-beginners-with-examples/" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap CSS End -->
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Main CSS End -->
  <!-- Bootstrap Icons Start -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Bootstrap Icons End -->
  <link rel="stylesheet" href="assets/css/dark-mode.css">

  <!-- SweetAlert2 -->
  <link href="assets/sweetalert/sweetalert2new.css" rel="stylesheet" type="text/css">
  <script src="assets/sweetalert/sweetalert2.min.js"></script>

  <style>
    .swal2-popup {
      font-size: 0.9rem !important;
    }
  </style>

</head>

<body>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <!-- Sidebar Trigger Start -->
      <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><span class="navbar-toggler-icon"></span></button>
      <!-- Sidebar Trigger End -->
      <a class="navbar-brand fw-bold me-auto" href="#"><img src="assets/img/logo.png" style="max-height:40px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex ms-auto" style="visibility:hidden;">
          <div class="input-group my-3 my-lg-0">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="iconify fs-3" data-icon="material-symbols:settings-b-roll-outline"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content Start -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card shadow" style="border:1px solid black">
            <div class="card-header">
              <span class="iconify fs-2" data-icon="lucide:layout-dashboard"></span>&nbsp;Dashboard
            </div>
            <div class="card-body">

              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Link #</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $counter = 1;
                  foreach ($links as $link) { ?>
                    <form method="POST" class="form0<?= $link['id'] ?>">

                      <tr>
                        <td>
                          <?= $counter ?>
                          <input type="hidden" name="data_id" value="<?= $link['id'] ?>">
                        </td>

                        <td>
                          <?= $link['name'] ?>
                        </td>

                        <td> <input type="text" name="link_value" id="link_value" class="form-control" autocomplete="off" value="<?= $link['link'] ?>" placeholder="请输入跳转链接"></td>

                        <td></td>

                        <td> <button type="button" data-link_form_number="form0<?= $link['id'] ?>" class="btn btn-dark btn-save-link"><span class="iconify" data-icon="ion:save-outline"></span>
                            &nbsp;保存</button></td>

                      </tr>
                    </form>
                    <?php $counter++ ?>
                  <?php } ?>
                </tbody>

              </table>


            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <!-- Main Content End -->
  <!-- #region 
  
  <!-- Modal -->
  <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body text-center p-3">
          <h1 class="lead">Do you want to logout your account?</h1>
          <form method="POST" action="controller/LinksController.php">
            <button type="submit" class="btn btn-primary btn-sm" name="logout_account">Yes</button>
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">No</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Scripts Start -->
  <script src="assets/js/iconify.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/dark-mode-switch.min.js"></script>
  <!-- Scripts End -->
  <script src="assets/js/admin.js"></script>

  <script>
    <?php
    if (isset($_SESSION['error'])) : ?>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'gray',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      Toast.fire({
        icon: 'error',
        title: '<?php echo $_SESSION['error']; ?>'
      })
    <?php unset($_SESSION['error']);
    endif ?>



    <?php if (isset($_SESSION['success'])) : ?>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'gray',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      Toast.fire({
        icon: 'success',
        title: '<?php echo $_SESSION['success']; ?>'
      })
    <?php unset($_SESSION['success']);
    endif ?>
  </script>

</body>

</html>