<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = $id";
    

    $eliminar = DB::query($sql);
    header('Location: index.php');

?>
