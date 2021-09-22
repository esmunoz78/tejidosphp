<?php include("db.php") ?>
<?php include("header.php") ?>
<H1>TABLA PROVEEDOR</H1>
<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

        <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="pnit" class="form-control"placeholder=" NIT" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pnom" class="form-control"placeholder="NOMBRE" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ptel" class="form-control"placeholder="TELEFONO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pcorreo" class="form-control"placeholder="CORREO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pdirec" class="form-control"placeholder="DIRECCION" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="s_reg_Prin" class="form-control"placeholder="REGISTRO_PRINCIPAL" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="guardar" value="guardar">
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>NIt</th>
            <th>NOMBRE</th>
            <th>TELEFONO</th>
            <th>CORREO</th>
            <th>DIRECCION</th>
            <th>REGISTRO PRINCIPAL</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM proveedor";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['pnit']; ?></td>
            <td><?php echo $row['pnom']; ?></td>
            <td><?php echo $row['ptel']; ?></td>
            <td><?php echo $row['pcorreo']; ?></td>
            <td><?php echo $row['pdirec']; ?></td>
            <td><?php echo $row['s_reg_Prin']; ?></td>
            <td>
              <a href="edit.php?pnit=<?php echo $row['pnit']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?pnit=<?php echo $row['pnit']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




<?php include("footer.php");?>