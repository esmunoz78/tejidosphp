<?php

    include("db.php");

    if(isset($_GET['epcodigo'])) {
        $epcodigo= $_GET['epcodigo'];
        $query = "SELECT * FROM entrada_p WHERE epcodigo = '".$epcodigo."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $epcodigo= $row['epcodigo'];
            $epfecha= $row['epfecha'];
            $ephora= $row['ephora'];
            $epprecio= $row['epprecio'];
            $pnit= $row['pnit'];
        }    
    }

    if (isset($_POST['update'])){
        $epcodigo= $_GET['epcodigo'];
        $epfecha= $_POST['epfecha'];
        $ephora= $_POST['ephora'];
        $epprecio= $_POST['epprecio'];
        $pnit = $_POST['pnit']; 

        $query = "UPDATE entrada_p set epfecha = '$epfecha', ephora = '$ephora',epprecio = '$epprecio', pnit = '$pnit' WHERE epcodigo = '".$epcodigo."'";
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
                <form action="edit.php?epcodigo=<?php echo $_GET['epcodigo']; ?>" method="POST">
                    <div class="form-group">
                        <input name="epcodigo" type="text" class="form-control" value="<?php echo $epcodigo; ?>" placeholder="ENTRADA DE PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="epfecha" type="text" class="form-control" value="<?php echo $epfecha; ?>" placeholder="FECHA ENTRADA PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="ephora" type="text" class="form-control" value="<?php echo $ephora; ?>" placeholder="PRECIO PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="epprecio" type="text" class="form-control" value="<?php echo $epprecio; ?>" placeholder="PRECIO PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="pnit" type="text" class="form-control" value="<?php echo $pnit; ?>" placeholder="NIT PRODUCTO">
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