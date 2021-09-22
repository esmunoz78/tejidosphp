<?php
include('db.php');
if (isset($_POST["guardar"])){
    $Bid=$_POST["Bid"];
    $Bnombre=$_POST["Bnombre"];
    $Btelefono=$_POST["Btelefono"];
    $Bedad=$_POST["Bedad"];
    $Bcargo=$_POST["Bcargo"]; 
    $epcodigo=$_POST["epcodigo"];
    

    $query= "INSERT INTO bodegero (Bid,Bnombre,Btelefono,Bedad,Bcargo,epcodigo)VALUES ('".$Bid."', '".$Bnombre."', '".$Btelefono."', '".$Bedad."', '".$Bcargo."', '".$epcodigo."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>

