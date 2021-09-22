<?php

include("db.php");

if(isset($_GET['s_reg_Prin'])){
   $s_reg_Prin = $_GET['s_reg_Prin'];
   $query = "DELETE FROM suministra_proveedor_producto WHERE s_reg_Prin ='".$s_reg_Prin."'";
   $result = mysqli_query($conn, $query);
   if(!$result){
        die("fallido");
    }

    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    
    header('Location: index.php');
}
?>
