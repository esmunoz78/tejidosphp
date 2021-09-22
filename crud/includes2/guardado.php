<?php
include('db.php');
if (isset($_POST["guardado"])){
    $prcod=$_POST["prcod"];
    $prnomb=$_POST["prnomb"];
    $prpreci=$_POST["prpreci"];
    $prcant=$_POST["prcant"];
    $prstock=$_POST["prstock"]; 
    $adid=$_POST["adid"];
    

    $query= "INSERT INTO producto(prcod,prnomb,prpreci,prcant,prstock,adid)VALUES ('".$prcod."', '".$prnomb."', '".$prpreci."', '".$prcant."', '".$prstock."', '".$adid."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>

