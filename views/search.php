<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Buscar</title>
</head>
<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Incubadora</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link" href="index.php">Index</a>
                    <a class="nav-link" href="tabla.php">Neonatos</a>
                    <a class="nav-link active" href="#">Buscar</a>
                </nav>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-body text-body">
                            <div class="card-title text-center">
                            <h1 class="text-secondary">Buscar</h1>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4 text-center">
                                    <form action="" method="post">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Ingresa nombre..." name="nombre" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-4"></div>
                            </div>                
                            <br>
                                <table class="table table-hover table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Paciente</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">edad</th>
                                            <th scope="col">ubicacion hospitalaria</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Incubadora</th>
                                            <th scope="col">Operacion</th>
                                            <th scope="col">Operacion</th>
                                        </tr>
                                    
                                    </thead>

                                    <tbody>
                                    

                                            <?php
                                            if (isset($_POST['nombre'])){

                                                $name = $_POST['nombre'];
                                                include '../conection/conection.php';
                                                $pdo =  Database::connect();
                                                
                                                $sql = "SELECT * FROM paciente WHERE cmp_nombre LIKE '%$name%'";
                                                foreach($pdo->query($sql) as $row){
                                                    echo '<tr>';
                                                    echo '<td>'.$row['id'].'</td>';
                                                    echo '<td>'.$row['cmp_nombre'].'</td>';
                                                    echo '<td>'.$row['cmp_edad'].'</td>';
                                                    echo '<td>'.$row['cmp_direccion'].'</td>';
                                                    echo '<td>'.$row['fecha'].'</td>';
                                                    echo '<td>'.$row['incubadora'].'</td>';

                                                    echo '<td><a class="btn btn-success" href="editar.php?id='.$row['id'].'">Editar</a> </td>';
                                                    echo '<td><a class="btn btn-success" href="eliminar.php?id='.$row['id'].'">Eliminar</a> </td>';
                                                    echo '</tr>';
                                                }
                                                Database::disconnect();
                                            }
                                        ?>
                                    </tbody>
                                </table>
                        
                        </div>
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
</body>
</html>