<?php include("db.php") ?>
<?php include("header.php") ?>
<H1>SUMINISTRA PROVEEDOR PRODUCTO</H1>
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
                        <input type="text" name="s_reg_Prin" class="form-control"placeholder="SEGIMIENTO REGISTRO PRINCIPAL" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pnit" class="form-control"placeholder="NIT PROVEEDOR" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="prcod" class="form-control"placeholder="CODIGO PRODUCTO" autofocus>
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
            <th>SEGIMIENTO REGISTRO PRINCIPAL</th>
            <th>NIT PROVEEDOR</th>
            <th>CODIGO PRODUCTO</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM suministra_proveedor_producto";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['s_reg_Prin']; ?></td>
            <td><?php echo $row['pnit']; ?></td>
            <td><?php echo $row['prcod']; ?></td>
            

            <td>
              <a href="editar.php?s_reg_Prin=<?php echo $row['s_reg_Prin']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?s_reg_Prin=<?php echo $row['s_reg_Prin']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




<?php include("footer.php");?>