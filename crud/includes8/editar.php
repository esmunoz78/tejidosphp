<?php

    include("db.php");

    if(isset($_GET['s_reg_Prin'])) {
        $s_reg_Prin= $_GET['s_reg_Prin'];
        $query = "SELECT * FROM suministra_proveedor_producto WHERE s_reg_Prin = '".$s_reg_Prin."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $s_reg_Prin= $row['s_reg_Prin'];
            $pnit= $row['pnit'];
            $prcod= $row['prcod'];
         
        }    
    }

    if (isset($_POST['update'])){
        $s_reg_Prin= $_GET['s_reg_Prin'];
        $pnit= $_POST['pnit'];
        $prcod= $_POST['prcod'];
     

        $query = "UPDATE suministra_proveedor_producto set pnit = '$pnit', prcod = '$prcod' WHERE s_reg_Prin = '".$s_reg_Prin."'";
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
                <form action="editar.php?s_reg_Prin=<?php echo $_GET['s_reg_Prin']; ?>" method="POST">
                    <div class="form-group">
                        <input name="s_reg_Prin" type="text" class="form-control" value="<?php echo $s_reg_Prin; ?>" placeholder="SEGIMIENTO REGISTRO PRINCIPAL">
                    </div>
                    <div class="form-group">
                        <input name="pnit" type="text" class="form-control" value="<?php echo $pnit; ?>" placeholder="NIT PROVEEDOR">
                    </div>
                    <div class="form-group">
                        <input name="prcod" type="text" class="form-control" value="<?php echo $prcod; ?>" placeholder="CODIGO PRODUCTO">
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