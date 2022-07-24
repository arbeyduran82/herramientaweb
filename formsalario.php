<?php 
include 'includes/header.php';
include 'controlador/controladorsalario.php';
$objSalario = new Salarios();
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
       <form action="formsalario.php" method="POST">
          <label>Salario</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">$</span>
            </div>
            <input type="number" class="form-control" placeholder="Ingrese el salario basico" name="txtsalario" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
         
          <div class="form-group">
            <label for="perfil">Perfil del empleado</label>
            <select class="form-control" id="perfil" name="selperfil" required>
            <option></option>
              <option value="20">Sindicalizado</option>
              <option value="10">De confianza</option>
              <option value="5">Alto directivo</option>
              <option value="0">Ejecutivo</option>
            </select>
          </div>
          <button type="submit" name="sueldo" value="sueldo" class="btn btn-success">Calcular</button>
        </form>

       </div>
        <div class="col-md-6" style="text-align:center; padding-top: 7px;" >
          <br>
          <div class="alert alert-secondary"  role="alert" style="height:125px ;">
            Alerta!
          </div>
        </div>
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include 'includes/footer.php';?>