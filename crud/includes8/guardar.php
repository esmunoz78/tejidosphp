<?php
include('db.php');
if (isset($_POST["guardar"])){
    $s_reg_Prin=$_POST["s_reg_Prin"];
    $pnit=$_POST["pnit"];
    $prcod=$_POST["prcod"];

    
    $query= "INSERT INTO suministra_proveedor_producto (s_reg_Prin,pnit,prcod)VALUES ('".$s_reg_Prin."', '".$pnit."', '".$prcod."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>
