<?php
include('db.php');
if (isset($_POST["guardar"])){
    $pnit=$_POST["pnit"];
    $pnom=$_POST["pnom"];
    $ptel=$_POST["ptel"];
    $pcorreo=$_POST["pcorreo"];
    $pdirec=$_POST["pdirec"]; 
    $s_reg_Prin=$_POST["s_reg_Prin"];
    

    $query= "INSERT INTO proveedor (pnit,pnom ,ptel,pcorreo,pdirec,s_reg_Prin)VALUES ('".$pnit."', '".$pnom."', '".$ptel."', '".$pcorreo."', '".$pdirec."', '".$s_reg_Prin."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>L

