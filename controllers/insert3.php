<?php
    require '../conection/conection.php';

    if(!empty($_POST)){
        $a = $_POST['id_paciente'];
        $b = $_POST['id_medico'];
        $c = $_POST['area'];
        $d = $_POST['observacion'];

        $valid = true;

        if($valid){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO control (id_paciente, id_medico, area, observacion) values(?, ?, ?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($a, $b, $c, $d));
            Database::disconnect();
            header("Location: ../views/index.php");
        }
    }

?>