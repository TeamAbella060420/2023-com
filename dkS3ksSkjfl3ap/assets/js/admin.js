$(document).ready(function () {
  $(document).on('click', '.btn-save-link', function () {
    var form_number = $(this).data('link_form_number');
    var formData = new FormData(document.querySelector('.' + form_number));
    $.ajax({
      type: 'POST',
      url: './controller/LinksController.php',
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        });

        Toast.fire({
          icon: 'success',
          title: 'Data saved successfully!'
        }).then((result) => {
          // Reload the table after the Swal toast notification is closed
          location.reload(); // Replace with your table reload URL
        });


      },
      error: function (xhr, status, error) {
        console.log(xhr);
        console.log(status);
        console.log(error);
        if (xhr.status === 400) {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })

          Toast.fire({
            icon: 'error',
            title: 'Error: ' + xhr.responseText
          })

        } else {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })

          Toast.fire({
            icon: 'error',
            title: 'Error saving data!'
          })
        }
      }
    });
  });


});

