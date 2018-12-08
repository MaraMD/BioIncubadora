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
                    <h1>CONTROL DEL PACIENTE</h1>
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
                <th scope="col">ID control</th>
                <th scope="col">ID paciente</th>
                <th scope="col">ID medico</th>
                <th scope="col">Area que se encuentra</th>
                <th scope="col">Observción</th>
                <th scope="col">operacion</th>
            </tr>
        
        </thead>

        <tbody>
        <?php
            include '../conection/conection.php';
            $pdo =  Database::connect();
            $sql = 'SELECT * FROM control ORDER BY id_control DESC';
            foreach($pdo->query($sql) as $row){
                echo '<tr>';
                echo '<td>'.$row['id_medico'].'</td>';
                echo '<td>'.$row['id_paciente'].'</td>';
                echo '<td>'.$row['id_medico'].'</td>';
                echo '<td>'.$row['area'].'</td>';
                echo '<td>'.$row['observacion'].'</td>';

                echo '<td><a class="btn btn-success" href="editar.php?id_control='.$row['id_control'].'">Editar</a> </td>';
                echo '</tr>';
            }
            Database::disconnect();
        ?>
        </tbody>

    </table>
</body>
</html>