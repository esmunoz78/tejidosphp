<?php

include("db.php");

if(isset($_GET['pnit'])){
   $pnit = $_GET['pnit'];
   $query = "DELETE FROM proveedor WHERE pnit ='".$pnit."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
