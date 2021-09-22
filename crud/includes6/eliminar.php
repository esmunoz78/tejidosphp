<?php

include("db.php");

if(isset($_GET['epcodigo'])){
   $epcodigo = $_GET['epcodigo'];
   $query = "DELETE FROM entrada_p WHERE epcodigo ='".$epcodigo."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
