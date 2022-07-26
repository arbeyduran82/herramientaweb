<?php
  include 'includes/header.php';
  include 'controlador/controladorconversor.php';
  //Se crea objeto de tipo figura
  $objConversiones = new Conversiones();
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
       <form action="formconversor.php" method="POST">
          <label>.:.</label>
          
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1" >Metros</span>
            </div>
            <input type="number" class="form-control" placeholder="Ingrese cantidad en metros" name="metros" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
         
          <div class="form-group">
            <label for="perfil">Elija unidad de medida</label>
            <select class="form-control" id="perfil" name="selunidad" required>
            <option></option>
              <option value="1">Metros a centimetros</option>
              <option value="2">Metros a kilometros</option>
              <option value="3">Metros a pies</option>
            </select>
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
              if($_REQUEST['selunidad'] == 1){
                $objConversiones->convCentimetros($_REQUEST['metros'], $_REQUEST['calcular']);
                echo " Centimetros";
                
              }if($_REQUEST['selunidad'] == 2){
                $objConversiones->convKilometros($_REQUEST['metros'], $_REQUEST['calcular']);
              
              }else{
                $objConversiones->convPies($_REQUEST['metros'], $_REQUEST['calcular']);
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