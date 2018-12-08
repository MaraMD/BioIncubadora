<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
                    <center>
                    <FONT FACE="" COLOR="gray">
                    <h1>DATOS DEL DOCTOR</h1>
                    </FONT>
                    </center>


                <br>
                <center>
    <a class="btn btn-info" href="index.php" role="submit">Volver</a>
</center>
<br>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID Medico</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
            </tr>
        
        </thead>

        <tbody>
        <?php
            include '../conection/conection.php';
            $pdo =  Database::connect();
            $sql = 'SELECT * FROM medico ORDER BY id_medico DESC';
            foreach($pdo->query($sql) as $row){
                echo '<tr>';
                echo '<td>'.$row['id_medico'].'</td>';
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['p_apellido'].'</td>';
                echo '<td>'.$row['s_apellido'].'</td>';

                echo '<td><a class="btn btn-success" href="editar.php?id_medico='.$row['id_medico'].'">Editar</a> </td>';
                echo '</tr>';
            }
            Database::disconnect();
        ?>
        </tbody>

    </table>
</body>
</html>