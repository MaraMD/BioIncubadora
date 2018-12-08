<?php
    require '../conection/conection.php';

    if(!empty($_POST)){
        $a = $_POST['nombre'];
        $b = $_POST['p_apellido'];
        $c = $_POST['s_apellido'];

        $valid = true;

        if($valid){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO medico (nombre, p_apellido, s_apellido) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($a, $b, $c));
            Database::disconnect();
            header("Location: ../views/index.php");
        }
    }

?>