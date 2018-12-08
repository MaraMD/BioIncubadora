<?php
    require '../conection/conection.php';

    $name = null;


        $name = $_POST['nombre'];

        $valid = true;
        if($valid){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * from paciente where cmp_nombre=?";
            $search = $pdo->prepare($sql);
            $search -> execute(array($name));
            $data = $search->fetch(PDO::FETCH_ASSOC);
            $a = $data['cmp_nombre'];
            // echo $a;
            //$result = $search->fetchAll();
            // return $a;
            // foreach ($result as $k) {
            //     echo $k['cpm_nombre'];
            // }
            // Database::disconect();
            header("Location: ../views/search.php");
            }
  

?>