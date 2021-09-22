<?php

    include("db.php");

    if(isset($_GET['pnit'])) {
        $pnit= $_GET['pnit'];
        $query = "SELECT * FROM proveedor WHERE pnit = '".$pnit."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $pnit = $row['pnit'];
            $pnom= $row['pnom'];
            $ptel= $row['ptel'];
            $pcorreo= $row['pcorreo'];
            $pdirec= $row['pdirec']; 
            $s_reg_Prin= $row['s_reg_Prin'];
        }    
    }

    if (isset($_POST['update'])){
        $pnit = $_GET['pnit'];
        $pnom = $_POST['pnom'];
        $ptel = $_POST['ptel'];
        $pcorreo = $_POST['pcorreo'];
        $pdirec = $_POST['pdirec']; 
        $s_reg_Prin = $_POST['s_reg_Prin'];

        $query = "UPDATE proveedor set pnom = '$pnom', ptel = '$ptel',pcorreo = '$pcorreo', pdirec = '$pdirec', s_reg_Prin = '$s_reg_Prin' WHERE pnit = '".$pnit."'";
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
                <form action="edit.php?pnit=<?php echo $_GET['pnit']; ?>" method="POST">
                    <div class="form-group">
                        <input name="pnit" type="text" class="form-control" value="<?php echo $pnit; ?>" placeholder="Update pnit">
                    </div>
                    <div class="form-group">
                        <input name="pnom" type="text" class="form-control" value="<?php echo $pnom; ?>" placeholder="Update pnom">
                    </div>
                    <div class="form-group">
                        <input name="ptel" type="text" class="form-control" value="<?php echo $ptel; ?>" placeholder="Update ptel">
                    </div>
                    <div class="form-group">
                        <input name="pcorreo" type="text" class="form-control" value="<?php echo $pcorreo; ?>" placeholder="Update pcorreo">
                    </div>
                    <div class="form-group">
                        <input name="pdirec" type="text" class="form-control" value="<?php echo $pdirec; ?>" placeholder="Update pdirec">
                    </div>
                    <div class="form-group">
                        <input name="s_reg_Prin" type="text" class="form-control" value="<?php echo $s_reg_Prin; ?>" placeholder="Update s_reg_Prin">
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