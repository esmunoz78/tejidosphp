<?php include("db.php") ?>
<?php include("header.php") ?>
<H1>TABLA VENDEDOR</H1>
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
                        <input type="text" name="vid" class="form-control"placeholder="ID" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="vnombre" class="form-control"placeholder="NOMBRE" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="vtelefono" class="form-control"placeholder="TELEFONO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="vedad" class="form-control"placeholder="EDAD" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="vcargo" class="form-control"placeholder="CARGO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Bid" class="form-control"placeholder="ID_BODEGUERO" autofocus>
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
            <th>EDAD</th>
            <th>vcargo</th>
            <th>ID BODEGERO</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM vendedor";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['vid']; ?></td>
            <td><?php echo $row['vnombre']; ?></td>
            <td><?php echo $row['vtelefono']; ?></td>
            <td><?php echo $row['vedad']; ?></td>
            <td><?php echo $row['vcargo']; ?></td>
            <td><?php echo $row['Bid']; ?></td>
            <td>
              <a href="edit.php?vid=<?php echo $row['vid']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?vid=<?php echo $row['vid']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>  




<?php include("footer.php");?>  