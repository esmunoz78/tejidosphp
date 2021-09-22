<?php

    include("db.php");

    if(isset($_GET['spcodigo'])) {
        $spcodigo= $_GET['spcodigo'];
        $query = "SELECT * FROM salida_p WHERE spcodigo = '".$spcodigo."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $spcodigo= $row['spcodigo'];
            $spfecha= $row['spfecha'];
            $sphora= $row['sphora'];
            $spprecio= $row['spprecio'];
            $vid= $row['vid'];
        }    
    }

    if (isset($_POST['update'])){
        $spcodigo= $_GET['spcodigo'];
        $spfecha= $_POST['spfecha'];
        $sphora= $_POST['sphora'];
        $spprecio= $_POST['spprecio'];
        $vid = $_POST['vid']; 

        $query = "UPDATE salida_p set spfecha = '$spfecha', sphora = '$sphora',spprecio = '$spprecio', vid = '$vid' WHERE spcodigo = '".$spcodigo."'";
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
                <form action="editar.php?spcodigo=<?php echo $_GET['spcodigo']; ?>" method="POST">
                    <div class="form-group">
                        <input name="spcodigo" type="text" class="form-control" value="<?php echo $spcodigo; ?>" placeholder="CODIGO SALIDA DE PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="spfecha" type="text" class="form-control" value="<?php echo $spfecha; ?>" placeholder="FECHA SALIDA PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="sphora" type="text" class="form-control" value="<?php echo $sphora; ?>" placeholder="HORA SALIDA PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="spprecio" type="text" class="form-control" value="<?php echo $spprecio; ?>" placeholder="PRECIO PRODUCTO">
                    </div>
                    <div class="form-group">
                        <input name="vid" type="text" class="form-control" value="<?php echo $vid; ?>" placeholder="ID VENDEDOR">
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