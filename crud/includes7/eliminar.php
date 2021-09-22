<?php

include("db.php");

if(isset($_GET['spcodigo'])){
   $spcodigo = $_GET['spcodigo'];
   $query = "DELETE FROM salida_p WHERE spcodigo ='".$spcodigo."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
