<?php include("db.php") ?>
<?php include("header.php") ?>
<H1>TABLA PRODUCTO</H1>
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
                <form action="guardado.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="prcod" class="form-control"placeholder="CODIGO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="prnomb" class="form-control"placeholder="NOMBRE" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="prpreci" class="form-control"placeholder="PRECIO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="prcant" class="form-control"placeholder="CANTIDAD" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="prstock" class="form-control"placeholder="STOCK_PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adid" class="form-control"placeholder="ID_ADMINISTRADOR" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="guardado" value="guardar">
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th>STOCK PRODUCTO</th>
            <th>ID ADMINISTRADOR</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['prcod']; ?></td>
            <td><?php echo $row['prnomb']; ?></td>
            <td><?php echo $row['prpreci']; ?></td>
            <td><?php echo $row['prcant']; ?></td>
            <td><?php echo $row['prstock']; ?></td>
            <td><?php echo $row['adid']; ?></td>
            <td>
              <a href="edit.php?prcod=<?php echo $row['prcod']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?prcod=<?php echo $row['prcod']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




<?php include("footer.php");?>