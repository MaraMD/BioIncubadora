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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\proyectoBio-master\views\estilos.css">
    <title>Incubadora</title>
</head>
    <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">Incubadora</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="#">Index</a>
                <a class="nav-link" href="tabla.php">Neonatos</a>
                <a class="nav-link" href="search.php">Buscar</a>
            </nav>
        </div>
    </header>
    <div class="accordion border-secondary rounded shadow-lg" id="accordionExample">
        <div class="card text-center rounded">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item" id="headingOne">
                        <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="nav-link active" >Neonatos</button>
                    </li>
                    <li class="nav-item" id="headingTwo">
                        <button class="nav-link disabled"  type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Medicos</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link disabled" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Paciente</button>
                    </li>
                </ul>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <form class="needs-validation" action="../controllers/insert.php" method="post" >
                                <div class="row">
                                    <div class="col-md-4 mb-3 text-dark">
                                        <label for="cmp_nombre ">Nombre</label>
                                        <input type="text" class= "form-control" name="cmp_nombre" required>
                                    </div>

                                    <div class="col-md-4 mb-3 text-dark">
                                        <label for="cmp_edad">edad</label>
                                        <input type="text" class= "form-control" name="cmp_edad" required>
                                    </div>

                                    <div class="col-md-4 mb-3 text-dark">
                                        <label for="cmp_direccion">ubicacion hospitalaria</label>
                                        <input type="text" class= "form-control" name="cmp_direccion" required>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-md-6 mb-3 text-dark">
                                        <label for="fecha">Fecha de ingreso</label>
                                        <input type="text" class= "form-control" name="fecha" required>
                                    </div>

                                    <div class="col-md-6 mb-3 text-dark">
                                        <label for="incubadora">Numero incubadora</label>
                                        <input type="text" class= "form-control" name="incubadora" required>
                                    </div>
                                </div>

                                <div style="text-align: center !important;">
                                    <button
                                        class="btn btn-info btn-lg btn"
                                        type="submit"
                                    >
                                    <i class="far fa-save"></i> 
                                        Guardar
                                    </button>
                                    <a class="btn btn-success btn-lg ml-2" href="tabla.php" role="submit"><i class="far fa-eye"></i> Base</a>
                                </div>
                    </form>
                </div>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                <form class="needs-validation" action="../controllers/insert2.php" method="post" >
                    <div class="row">
                        <div class="col-md-4 mb-3 text-body">
                            <label for="nombre">Nombre</label>

                            <input type="text" class= "form-control" name="nombre" required>
                        </div>

                        <div class="col-md-4 mb-3 text-body">
                            <label for="p_apellido">Apellido Paterno</label>
                            <input type="text" class= "form-control" name="p_apellido" required>
                        </div>

                        <div class="col-md-4 mb-3 text-body">
                            <label for="s_apellido">Apellido Materno</label>
                            <input type="text" class= "form-control" name="s_apellido" required>
                        </div>
                    </div>

                    <div style="text-align: center !important;">
                        <button
                            class="btn btn-success btn-lg btn"
                            type="submit"
                        ><i class="far fa-save"></i> 
                            Guardar
                        </button>
                        <a class="btn btn-info btn-lg ml-2" href="tabala2.php" role="submit"><i class="far fa-eye"></i> Base</a>

                    </div>

                </form>
                </div>
            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <form class="needs-validation" action="../controllers/insert3.php" method="post" >
                        <div class="row">
                            <div class="col-md-4 mb-3 text-body">
                                <label for="id_paciente">ID paciente</label>

                                <input type="text" class= "form-control" name="id_paciente" required>
                            </div>

                            <div class="col-md-4 mb-3 text-body">
                                <label for="id_medico">ID medico</label>
                                <input type="text" class= "form-control" name="id_medico" required>
                            </div>

                            <div class="col-md-4 mb-3 text-body">
                                <label for="area">Area que se encuentra</label>
                                <input type="text" class= "form-control" name="area" required>
                            </div>
                            
                            <div class="col-md-4 mb-3 text-body">
                                <label for="observacion">Observacion</label>
                                <input type="text" class= "form-control" name="observacion" required>
                            </div>
                        </div>

                        <div style="text-align: center !important;">
                            <button
                                class="btn btn-warning btn-lg btn"
                                type="submit"
                            ><i class="far fa-save"></i>  
                                Guardar
                            </button>
                            <a class="btn btn-info btn-lg ml-2" href="tabla3.php" role="submit"><i class="far fa-eye"></i> Base</a>

                        </div>

                    </form>
                </div>
            </div>    

        </div>
    </div>   

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="mb-1">Proyecto Neonatal</p>
                <ul class="list-inline">
                    <p>Biomedica</p>
                </ul>
            </div>
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
            document.getElementById("LM351").innerHTML = datos;
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
