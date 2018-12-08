<?php
    include '../controllers/update.php';
?>
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

        <title>Incubadora</title>
    </head>
    <body class="bg-light">

        <div class="container">
            <br>
            <div class="row">

                <div class="col-md-12 order-md-1">
                
                    <h4 class="mb-3 text-center">Registro de Neonatos</h4>
                    <form
                        class="needs-validation"
                        action="../controllers/update.php?id=<?php echo $id?>"
                        method="post"
                    >
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="cmp_nombre">Nombre</label>
                                <input type="text" class="form-control" name="cmp_nombre" value="<?php echo !empty($a)?$a:'';?>" required >
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="cmp_edad">edad</label>
                                <input type="text" class="form-control" name="cmp_edad" value="<?php echo !empty($b)?$b:'';?>" required >
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="cmp_direccion">ubicacion hospitalaria</label>
                                <input type="text" class="form-control" name="cmp_direccion" value="<?php echo !empty($c)?$c:'';?>" required >
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="fecha">Fecha</label>
                                <input type="text" class="form-control" name="fecha" value="<?php echo !empty($d)?$d:'';?>" required >
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="incubadora">INCUBADORA</label>
                                <input type="text" class="form-control" name="incubadora" value="<?php echo !empty($e)?$e:'';?>" required >
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
                        <br>

                    </form>
                    <br>
                    <div style="text-align: center !important;">
                        <button
                            class="btn btn-primary btn-lg btn"
                            onclick="on();"
                        >
                            Prender
                        </button>
                        <br>
                        <br>
                        <button
                            class="btn btn-primary btn-lg btn"
                            onclick="off();"
                        >
                            Apagar
                        </button>
                    </div>
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">Proyecto Neonatal</p>
                <ul class="list-inline">
                    <p>Biomedica</p>
                </ul>
                <h4 class="mb-1">Temperatura Tiempo Real</h4>
                <ul class="list-inline">
                    <h5 id="LM35"></h5>
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
        <script src="http://172.16.56.117:5678/socket.io/socket.io.js"></script>
        <script src="../js/cliente.js"></script>
        <script>
            function imprimeTemperatura(datos){
            document.getElementById("LM35").innerHTML = datos;
        }
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
