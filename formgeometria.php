<?php
  include 'includes/header.php';
  include 'controladorgeometria.php';
  //Se crea objeto de tipo figura
  $objFiguras = new Figuras();

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
       <form action="formgeometria.php" method="POST">
          <label>Lados</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">A</span>
            </div>
            <input type="number" class="form-control" placeholder="Ingrese medida para el lado A" name="base" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">B</span>
            </div>
            <input type="number" class="form-control" placeholder="Ingrese medida para el lado B" name="altura" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
         
          <div class="form-group">
            <label for="perfil">Elija una figura geometrica</label>
            <select class="form-control" id="perfil" name="selfigura" required>
            <option></option>
              <option value="1">Area del cuadrado</option>
              <option value="2">Area del rectangulo</option>
              <!--<option value="3">Area del triangulo</option> -->
              <!--<option value="4">Area del circulo</option> -->
            </select>
          </div>
          <button type="submit" name="calcular" value="calcular" class="btn btn-success">Calcular</button>
        </form>

       </div>
        <div class="col-md-6" style="text-align:center; padding-top: 7px;" >
          <br>
          <div class="alert alert-secondary"  role="alert" style="height:125px ;">
          <!-- Llama al metodo segun la opcion seleccionada
          <?php
            if(!empty($_POST['calcular'])){
              if($_REQUEST['selfigura'] == 1){
                $objFiguras->Cuadrado($_REQUEST['base'], $_REQUEST['altura'], $_REQUEST['calcular']);

              }else{
                $objFiguras->Rectangulo($_REQUEST['base'], $_REQUEST['altura'], $_REQUEST['calcular']);
              }
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
 