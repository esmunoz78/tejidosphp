<?php

    include("db.php");

    if(isset($_GET['cid'])) {
        $cid= $_GET['cid'];
        $query = "SELECT * FROM cliente WHERE cid = '".$cid."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $cid= $row['cid'];
            $cnombre= $row['cnombre'];
            $ctelefono= $row['ctelefono'];
            $cdirec= $row['cdirec'];
            $spcodigo= $row['spcodigo']; 
           
        }    
    }

    if (isset($_POST['update'])){
        $cid= $_GET['cid'];
        $cnombre= $_POST['cnombre'];
        $ctelefono= $_POST['ctelefono'];
        $cdirec= $_POST['cdirec'];
        $spcodigo = $_POST['spcodigo']; 
 

        $query = "UPDATE cliente set cnombre = '$cnombre', ctelefono = '$ctelefono',cdirec = '$cdirec', spcodigo = '$spcodigo' WHERE cid = '".$cid."'";
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
                <form action="edit.php?cid=<?php echo $_GET['cid']; ?>" method="POST">
                    <div class="form-group">
                        <input name="cid" type="text" class="form-control" value="<?php echo $cid; ?>" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <input name="cnombre" type="text" class="form-control" value="<?php echo $cnombre; ?>" placeholder="NOMBRE">
                    </div>
                    <div class="form-group">
                        <input name="ctelefono" type="text" class="form-control" value="<?php echo $ctelefono; ?>" placeholder="TELEFONO">
                    </div>
                    <div class="form-group">
                        <input name="cdirec" type="text" class="form-control" value="<?php echo $cdirec; ?>" placeholder="CORREO">
                    </div>
                    <div class="form-group">
                        <input name="spcodigo" type="text" class="form-control" value="<?php echo $spcodigo; ?>" placeholder="DIRECCION">
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