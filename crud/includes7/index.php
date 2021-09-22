<?php include("db.php") ?>
<?php include("header.php") ?>
<H1>TABLA SALIDA DE PRODUCTO</H1>
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
                        <input type="text" name="spcodigo" class="form-control"placeholder="CODIGO SALIDA DE PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="spfecha" class="form-control"placeholder="FECHA SALIDA PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="sphora" class="form-control"placeholder="HORA SALIDA PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="spprecio" class="form-control"placeholder="PRECIO PRODUCTO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="vid" class="form-control"placeholder="ID VENDEDOR" autofocus>
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
            <th>CODIGO SALIDA DE PRODUCTO</th>
            <th>FECHA SALIDA PRODUCTO</th>
            <th>HORA SALIDA PRODUCTO</th>
            <th>PRECIO PRODUCTO</th>
            <th>NIT PRODUCTO</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM salida_p";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['spcodigo']; ?></td>
            <td><?php echo $row['spfecha']; ?></td>
            <td><?php echo $row['sphora']; ?></td>
            <td><?php echo $row['spprecio']; ?></td>
            <td><?php echo $row['vid']; ?></td>
            <td>
              <a href="editar.php?spcodigo=<?php echo $row['spcodigo']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?spcodigo=<?php echo $row['spcodigo']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




<?php include("footer.php");?>