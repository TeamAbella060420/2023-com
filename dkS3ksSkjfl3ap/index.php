<?php include_once('config/account.php')  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Credentials</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- SweetAlert2 -->
  <link href="assets/sweetalert/sweetalert2new.css" rel="stylesheet" type="text/css">
  <script src="assets/sweetalert/sweetalert2.min.js"></script>

  <style>
    .swal2-popup {
      font-size: 0.9rem !important;
    }
  </style>

</head>

<body class="bg-dark">
  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card bg-white">
            <div class="card-body p-5">
              <form class="mb-3 mt-md-4" id="loginForm">
                <h2 class="fw-bold mb-2 text-uppercase"><img src="assets/img/logo.png" width="200"></h2>
                <p class=" mb-5">Please enter your credentials to start your session!</p>
                <div class="mb-3">
                  <label for="username" class="form-label ">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                </div>

                <div class="d-grid">
                  <button class="btn btn-outline-dark" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/account.js"></script>
</body>

</html>
