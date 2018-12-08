<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-auto text-left">
                <a class="btn btn-outline-secondary btn-lg" href="index.php" role="submit"><i class="fas fa-arrow-circle-left"></i> Volver</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="card-title text-center">
                        <h1 class="text-secondary">DATOS DEL PACIENTE</h1>
                        </div>
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4 text-center">
                                <form action="../controllers/search.php" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Ingresa nombre..." aria-label="Recipient's username" aria-describedby="button-addon2">
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
                                    ?>
                                </tbody>
                            </table>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>