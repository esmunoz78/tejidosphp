<?php

include("db.php");

if(isset($_GET['cid'])){
   $cid = $_GET['cid'];
   $query = "DELETE FROM cliente WHERE cid ='".$cid."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
