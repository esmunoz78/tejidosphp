<?php
include('dbE.php');
if (isset($_POST["guardadoE"])){
    $adid=$_POST["adid"];
    $adnom=$_POST["adnom"];
    $adtelefono=$_POST["adtelefono"];
    $adedad=$_POST["adedad"];
    $adcargo=$_POST["adcargo"]; 
    $adcorreo=$_POST["adcorreo"];
    

    $query= "INSERT INTO administrador1 (adid,adnom ,adtelefono,adedad,adcargo,adcorreo)VALUES ('".$adid."', '".$adnom."', '".$adtelefono."', '".$adedad."', '".$adcargo."', '".$adcorreo."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: indexE.php');
}

?>

