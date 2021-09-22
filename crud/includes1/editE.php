<?php

    include("dbE.php");

    if(isset($_GET['adid'])) {
        $adid= $_GET['adid'];
        $query = "SELECT * FROM administrador1 WHERE adid = '".$adid."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $adid = $row['adid'];
            $adnom= $row['adnom'];
            $adtelefono= $row['adtelefono'];
            $adedad= $row['adedad'];
            $adcargo= $row['adcargo']; 
            $adcorreo= $row['adcorreo'];
        }    
    }

    if (isset($_POST['update'])){
        $adid = $_GET['adid'];
        $adnom = $_POST['adnom'];
        $adtelefono = $_POST['adtelefono'];
        $adedad = $_POST['adedad'];
        $adcargo = $_POST['adcargo']; 
        $adcorreo = $_POST['adcorreo'];

        $query = "UPDATE administrador1 set adnom = '$adnom', adtelefono = '$adtelefono',adedad = '$adedad', adcargo = '$adcargo', adcorreo = '$adcorreo' WHERE adid = '".$adid."'";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'warning';
        header('Location: indexE.php');
    }

?>
<?php include('headerE.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editE.php?adid=<?php echo $_GET['adid']; ?>" method="POST">
                    <div class="form-group">
                        <input name="adid" type="text" class="form-control" value="<?php echo $adid; ?>" placeholder="Update adid">
                    </div>
                    <div class="form-group">
                        <input name="adnom" type="text" class="form-control" value="<?php echo $adnom; ?>" placeholder="Update adnom">
                    </div>
                    <div class="form-group">
                        <input name="adtelefono" type="text" class="form-control" value="<?php echo $adtelefono; ?>" placeholder="Update adtelefono">
                    </div>
                    <div class="form-group">
                        <input name="adedad" type="text" class="form-control" value="<?php echo $adedad; ?>" placeholder="Update adedad">
                    </div>
                    <div class="form-group">
                        <input name="adcargo" type="text" class="form-control" value="<?php echo $adcargo; ?>" placeholder="Update adcargo">
                    </div>
                    <div class="form-group">
                        <input name="adcorreo" type="text" class="form-control" value="<?php echo $adcorreo; ?>" placeholder="Update adcorreo">
                    </div>
                    <button class="btn-success" name="update">
                        MODIFICAR
                    </button>
               </form>
            </div>
        </div>
   </div>
</div>
<?php include('footerE.php'); ?>
