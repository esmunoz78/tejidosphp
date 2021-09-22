<?php

    include("db.php");

    if(isset($_GET['prcod'])) {
        $prcod= $_GET['prcod'];
        $query = "SELECT * FROM producto WHERE prcod = '".$prcod."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $prcod = $row['prcod'];
            $prnomb= $row['prnomb'];
            $prpreci= $row['prpreci'];
            $prcant= $row['prcant'];
            $prstock= $row['prstock']; 
            $adid= $row['adid'];
        }    
    }

    if (isset($_POST['update'])){
        $prcod = $_GET['prcod'];
        $prnomb = $_POST['prnomb'];
        $prpreci = $_POST['prpreci'];
        $prcant= $_POST['prcant'];
        $prstock = $_POST['prstock']; 
        $adid = $_POST['adid'];

        $query = "UPDATE producto set prnomb = '$prnomb', prpreci = '$prpreci',prcant = '$prcant', prstock = '$prstock', adid = '$adid' WHERE prcod = '".$prcod."'";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'warning';
        header('Location: index.php');
    }

?>
<?php include('header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?prcod=<?php echo $_GET['prcod']; ?>" method="POST">
                    <div class="form-group">
                        <input name="prcod" type="text" class="form-control" value="<?php echo $prcod; ?>" placeholder="prcod">
                    </div>
                    <div class="form-group">
                        <input name="prnomb" type="text" class="form-control" value="<?php echo $prnomb; ?>" placeholder="prnomb">
                    </div>
                    <div class="form-group">
                        <input name="prpreci" type="text" class="form-control" value="<?php echo $prpreci; ?>" placeholder="prpreci">
                    </div>
                    <div class="form-group">
                        <input name="prcant" type="text" class="form-control" value="<?php echo $prcant; ?>" placeholder="prcant">
                    </div>
                    <div class="form-group">
                        <input name="prstock" type="text" class="form-control" value="<?php echo $prstock; ?>" placeholder="prstock">
                    </div>
                    <div class="form-group">
                        <input name="adid" type="text" class="form-control" value="<?php echo $adid; ?>" placeholder=" adid">
                    </div>
                    <button class="btn-success" name="update">
                        MODIFICAR
                    </button>
               </form>
            </div>
        </div>
   </div>
</div>
<?php include('footer.php'); ?>
