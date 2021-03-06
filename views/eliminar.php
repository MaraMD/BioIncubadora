<?php
    include '../controllers/delete.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        >

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body class="bg-light">

        <div class="container">
            <br>
            <div class="row">

                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3 text-center">Registro de Neonatos</h4>
                    <form class="needs-validation" action="../controllers/delete.php?id=<?php echo $id?>" method="post" >
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="firstName">Desea Eliminar</label>
                                <input name="id" type="text" class="form-control" value="<?php echo !empty($id)?$id:'';?>" required >
                            </div>
                        </div>

                        <div style="text-align: center !important;">
                            <button
                                class="btn btn-primary btn-lg btn"
                                type="submit"
                            >
                                Actualizar
                            </button>

                        </div>

                    </form>
                    <br>
                   
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">Proyecto Neonatal</p>
                <ul class="list-inline">
                    <p>Biomedica</p>
                </ul>
            </footer>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
    
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
    
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
    </body>
</html>
