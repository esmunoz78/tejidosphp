<?php
include('db.php');
if (isset($_POST["guardar"])){
    $cid=$_POST["cid"];
    $cnombre=$_POST["cnombre"];
    $ctelefono=$_POST["ctelefono"];
    $cdirec=$_POST["cdirec"];
    $spcodigo=$_POST["spcodigo"]; 
 
    

    $query= "INSERT INTO cliente (cid,cnombre,ctelefono,cdirec,spcodigo)VALUES ('".$cid."', '".$cnombre."', '".$ctelefono."', '".$cdirec."', '".$spcodigo."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>