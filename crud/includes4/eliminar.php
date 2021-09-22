<?php

include("db.php");

if(isset($_GET['Bid'])){
   $Bid = $_GET['Bid'];
   $query = "DELETE FROM bodegero WHERE Bid ='".$Bid."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
