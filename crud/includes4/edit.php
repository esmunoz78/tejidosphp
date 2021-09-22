<?php

    include("db.php");

    if(isset($_GET['Bid'])) {
        $Bid= $_GET['Bid'];
        $query = "SELECT * FROM bodegero WHERE Bid = '".$Bid."'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $Bid= $row['Bid'];
            $Bnombre= $row['Bnombre'];
            $Btelefono= $row['Btelefono'];
            $Bedad= $row['Bedad'];
            $Bcargo= $row['Bcargo']; 
            $s_reg_Prin= $row['s_reg_Prin'];
        }    
    }

    if (isset($_POST['update'])){
        $Bid= $_GET['Bid'];
        $Bnombre= $_POST['Bnombre'];
        $Btelefono= $_POST['Btelefono'];
        $Bedad= $_POST['Bedad'];
        $Bcargo = $_POST['Bcargo']; 
        $epcodigo = $_POST['epcodigo'];

        $query = "UPDATE bodegero set Bnombre = '$Bnombre', Btelefono = '$Btelefono',Bedad = '$Bedad', Bcargo = '$Bcargo', epcodigo = '$epcodigo' WHERE Bid = '".$Bid."'";
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
                <form action="edit.php?Bid=<?php echo $_GET['Bid']; ?>" method="POST">
                    <div class="form-group">
                        <input name="Bid" type="text" class="form-control" value="<?php echo $Bid; ?>" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <input name="Bnombre" type="text" class="form-control" value="<?php echo $Bnombre; ?>" placeholder="NOMBRE">
                    </div>
                    <div class="form-group">
                        <input name="Btelefono" type="text" class="form-control" value="<?php echo $Btelefono; ?>" placeholder="TELEFONO">
                    </div>
                    <div class="form-group">
                        <input name="Bedad" type="text" class="form-control" value="<?php echo $Bedad; ?>" placeholder="CORREO">
                    </div>
                    <div class="form-group">
                        <input name="Bcargo" type="text" class="form-control" value="<?php echo $Bcargo; ?>" placeholder="DIRECCION">
                    </div>
                    <div class="form-group">
                        <input name="epcodigo" type="text" class="form-control" value="<?php echo $epcodigo; ?>" placeholder="REGISTRO PRINCIPAL">
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