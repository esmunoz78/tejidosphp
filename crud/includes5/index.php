<?php include("db.php") ?>
<?php include("header.php") ?>
<H1>TABLA CLIENTE</H1>
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
                        <input type="text" name="cid" class="form-control"placeholder=" ID" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cnombre" class="form-control"placeholder="NOMBRE" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ctelefono" class="form-control"placeholder="TELEFONO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cdirec" class="form-control"placeholder="DIRECCION" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="spcodigo" class="form-control"placeholder="CODIGO SALIDA" autofocus>
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
            <th>ID</th>
            <th>NOMBRE</th>
            <th>TELEFONO</th>
            <th>DIRECCION</th>
            <th>CODIGO SALIDA</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM cliente ";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['cid']; ?></td>
            <td><?php echo $row['cnombre']; ?></td>
            <td><?php echo $row['ctelefono']; ?></td>
            <td><?php echo $row['cdirec']; ?></td>
            <td><?php echo $row['spcodigo']; ?></td>
            <td>
              <a href="edit.php?cid=<?php echo $row['cid']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?cid=<?php echo $row['cid']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




<?php include("footer.php");?>