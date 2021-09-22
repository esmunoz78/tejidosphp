<?php
include('db.php');
if (isset($_POST["guardar"])){
    $epcodigo=$_POST["epcodigo"];
    $epfecha=$_POST["epfecha"];
    $ephora=$_POST["ephora"];
    $epprecio=$_POST["epprecio"];
    $pnit=$_POST["pnit"]; 
    

    $query= "INSERT INTO entrada_p (epcodigo,epfecha,ephora,epprecio,pnit)VALUES ('".$epcodigo."', '".$epfecha."', '".$ephora."', '".$epprecio."', '".$pnit."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>

