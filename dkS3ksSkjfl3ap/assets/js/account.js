$(document).ready(function () {
  $('#loginForm').submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: 'controller/LoginController.php',
      method: 'POST',
      data: formData,
      dataType: 'json',
      success: function (response) {
        if (response.status == 'success') {

          window.location.replace(response.url);
        } else {

          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: response.message
          });
        }
      },
      error: function (xhr, status, error) {

        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: error.message
        });
      }
    });
  });
});
