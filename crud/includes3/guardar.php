<?php
include('db.php');
if (isset($_POST["guardar"])){
    $vid=$_POST["vid"];
    $vnombre=$_POST["vnombre"];
    $vtelefono=$_POST["vtelefono"];
    $vedad=$_POST["vedad"];
    $vcargo=$_POST["vcargo"]; 
    $Bid=$_POST["Bid"];
    

    $query= "INSERT INTO vendedor(vid,vnombre,vtelefono,vedad,vcargo,Bid)VALUES ('".$vid."', '".$vnombre."', '".$vtelefono."', '".$vedad."', '".$vcargo."', '".$Bid."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>

