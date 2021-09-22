<?php

include("dbE.php");

if(isset($_GET['adid'])){
   $adid = $_GET['adid'];
   $query = "DELETE FROM administrador1 WHERE adid ='".$adid."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: indexE.php');
}
?>
