<?php
  include 'includes/header.php';
  include 'controlador/controladorcafe.php';
  //Se crea objeto de tipo figura
  $objCafe = new Tarifas();

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inicio</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
       <form action="formcafe.php" method="POST">
          <label>Calculadora cibercafe</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Inicio</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingrese hora inicial" name="horainicial" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Final</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingrese hora final" name="horafinal" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
         
          <button type="submit" name="calcular" value="calcular" class="btn btn-success">Calcular</button>
        </form>

       </div>
        <div class="col-md-6" style="text-align:center; padding-top: 7px;" >
          <br>
          <div class="alert alert-secondary"  role="alert" style="height:125px ;">
          <!-- Llama al metodo segun la opcion seleccionada -->
          <?php
            if(!empty($_POST['calcular'])){
                
                $objCafe->calcularTiempo($_REQUEST['horainicial'], $_REQUEST['horafinal'], $_REQUEST['calcular']);
              
            }
          ?>
          </div>
        </div>
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include 'includes/footer.php';?>
 