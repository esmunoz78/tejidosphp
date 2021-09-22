<?php include("db.php") ?>
<?php include("header.php") ?>
<H1>TABLA ENTRADA DE PRODUCTO</H1>
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
                        <input type="text" name="epcodigo" class="form-control"placeholder="ENTRADA DE PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="epfecha" class="form-control"placeholder="FECHA ENTRADA PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ephora" class="form-control"placeholder="HORA ENTRADA PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="epprecio" class="form-control"placeholder="PRECIO PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pnit" class="form-control"placeholder="NIT PRODUCTO" autofocus>
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
            <th>ENTRADA DE PRODUCTO</th>
            <th>FECHA ENTRADA_PRODUCTO</th>
            <th>HORA ENTRADA PRODUCTO</th>
            <th>PRECIO PRODUCTO</th>
            <th>NIT PRODUCTO</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM entrada_p";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['epcodigo']; ?></td>
            <td><?php echo $row['epfecha']; ?></td>
            <td><?php echo $row['ephora']; ?></td>
            <td><?php echo $row['epprecio']; ?></td>
            <td><?php echo $row['pnit']; ?></td>
            <td>
              <a href="edit.php?epcodigo=<?php echo $row['epcodigo']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?epcodigo=<?php echo $row['epcodigo']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




<?php include("footer.php");?>