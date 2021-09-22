<?php

    include("db.php");

    if(isset($_GET['vid'])) {
        $vid= $_GET['vid'];
        $query = "SELECT * FROM vendedor WHERE vid = '".$vid."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $vid = $row['vid'];
            $vnombre= $row['vnombre'];
            $vtelefono= $row['vtelefono'];
            $vedad= $row['vedad'];
            $vcargo= $row['vcargo']; 
            $Bid= $row['Bid'];
        }    
    }

    if (isset($_POST['update'])){
        $vid= $_GET['vid'];
        $vnombre= $_POST['vnombre'];
        $vtelefono= $_POST['vtelefono'];
        $vedad= $_POST['vedad'];
        $vcargo = $_POST['vcargo']; 
        $Bid= $_POST['Bid'];

        $query = "UPDATE vendedor set vnombre = '$vnombre', vtelefono = '$vtelefono',vedad = '$vedad', vcargo = '$vcargo', Bid= '$Bid' WHERE vid = '".$vid."'";
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
                <form action="edit.php?vid=<?php echo $_GET['vid']; ?>" method="POST">
                    <div class="form-group">
                        <input name="vid" type="text" class="form-control" value="<?php echo $vid; ?>" placeholder="vid">
                    </div>
                    <div class="form-group">
                        <input name="vnombre" type="text" class="form-control" value="<?php echo $vnombre; ?>" placeholder="vnombre">
                    </div>
                    <div class="form-group">
                        <input name="vtelefono" type="text" class="form-control" value="<?php echo $vtelefono; ?>" placeholder="vtelefono">
                    </div>
                    <div class="form-group">
                        <input name="vedad" type="text" class="form-control" value="<?php echo $vedad; ?>" placeholder="vedad">
                    </div>
                    <div class="form-group">
                        <input name="vcargo" type="text" class="form-control" value="<?php echo $vcargo; ?>" placeholder="vcargo">
                    </div>
                    <div class="form-group">
                        <input name="Bid" type="text" class="form-control" value="<?php echo $Bid; ?>" placeholder=" Bid">
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
