<?php
    require '../conection/conection.php';

    $id = null;

    if(!empty($_GET['id'])){
        $id = $_REQUEST['id'];
    }

    if(null == $id){
        header("Location: ../views/index.php");
    }

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
            $sql = "UPDATE paciente set cmp_nombre = ?, cmp_edad = ?, cmp_direccion = ?, fecha = ?, incubadora = ?  WHERE id=?";
            $q = $pdo->prepare($sql);
            $q->execute(array($a,$b,$c,$d,$e,$id));
            Database::disconnect();
            header("Location: ../views/index.php");
        }
    }
     else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM paciente Where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $a = $data['cmp_nombre'];
    $b = $data['cmp_edad'];
    $c = $data['cmp_direccion'];
    $d = $data['fecha'];
    $e = $data['incubadora'];
    Database::disconnect();
    // header("Location: ../views/index.php");
}
?>