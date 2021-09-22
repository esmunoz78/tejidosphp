<?php

include("db.php");

if(isset($_GET['prcod'])){
   $prcod= $_GET['prcod'];
   $query = "DELETE FROM producto WHERE prcod ='".$prcod."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
