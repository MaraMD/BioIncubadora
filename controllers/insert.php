<?php
    require '../conection/conection.php';

    if(!empty($_POST)){
        $a = $_POST['cmp_nombre'];
        $b = $_POST['cmp_edad'];
        $c = $_POST['cmp_direccion'];
        $d = $_POST['fecha'];
        $e = $_POST['incubadora'];

        $valid = true;

        if($valid){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO paciente (cmp_nombre, cmp_edad, cmp_direccion, fecha, incubadora) values(?, ?, ?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($a, $b, $c, $d, $e));
            Database::disconnect();
            header("Location: ../views/index.php");
        }
    }

?>