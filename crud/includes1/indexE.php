<?php include("dbE.php") ?>
<?php include("headerE.php") ?>
<H1>TABLA ADMINISTRADOR</H1>
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
                <form action="guardadoE.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="adid" class="form-control"placeholder=" ID" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adnom" class="form-control"placeholder="NOMBRE" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adtelefono" class="form-control"placeholder="TELEFONO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adedad" class="form-control"placeholder="EDAD" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adcargo" class="form-control"placeholder="CARGO" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="adcorreo" class="form-control"placeholder="CORREO" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="guardadoE" value="guardar">
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
            <th>CARGO</th>
            <th>CORREO</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM administrador1";
          $result= mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['adid']; ?></td>
            <td><?php echo $row['adnom']; ?></td>
            <td><?php echo $row['adtelefono']; ?></td>
            <td><?php echo $row['adedad']; ?></td>
            <td><?php echo $row['adcargo']; ?></td>
            <td><?php echo $row['adcorreo']; ?></td>
            <td>
              <a href="editE.php?adid=<?php echo $row['adid']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminarE.php?adid=<?php echo $row['adid']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




<?php include("footerE.php");?>