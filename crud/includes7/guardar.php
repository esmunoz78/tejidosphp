<?php
include('db.php');
if (isset($_POST["guardar"])){
    $spcodigo=$_POST["spcodigo"];
    $spfecha=$_POST["spfecha"];
    $sphora=$_POST["sphora"];
    $spprecio=$_POST["spprecio"];
    $vid=$_POST["vid"]; 
    

    $query= "INSERT INTO salida_p (spcodigo,spfecha,sphora,spprecio,vid)VALUES ('".$spcodigo."', '".$spfecha."', '".$sphora."', '".$spprecio."', '".$vid."')";    

    $result = mysqli_query($conn, $query);
    if(!$result){
        
        die("fallido");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>

