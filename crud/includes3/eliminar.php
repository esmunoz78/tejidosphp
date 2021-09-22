<?php

include("db.php");

if(isset($_GET['vid'])){
   $vid= $_GET['vid'];
   $query = "DELETE FROM vendedor WHERE vid ='".$vid."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
