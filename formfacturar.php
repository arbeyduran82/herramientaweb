<?php 
include 'includes/header.php';
include 'controlador/controladorfacturar.php';
$objFacturar = new Facturas();
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
       <form action="formfacturar.php" method="POST">
          <label>Pasajeros</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">.:.</span>
            </div>
            <input type="number" class="form-control" placeholder="Ingrese cantidad de pasajeros" name="numpasajeros" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
         
          <div class="form-group">
            <label for="perfil">Seleccione lugar de destino</label>
            <select class="form-control" id="ruta" name="ruta" required>
            <option></option>
              <option value="<?php echo $Arauca;?>">Arauca</option>
              <option value="<?php echo $Bogota;?>">Bogota</option>
              <option value="<?php echo $Bucaramanga;?>">Bucaramanga</option>
              <option value="<?php echo $Duitama;?>">Duitama</option>
              <option value="<?php echo $Paipa;?>">Paipa</option>
              <option value="<?php echo $Saravena;?>">Saravena</option>
              <option value="<?php echo $Tame;?>">Tame</option>
              <option value="<?php echo $Tunja;?>">Tunja</option>
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
              if($_REQUEST['ruta'] == $Arauca){
                echo "Destino: Arauca <br> Valor Unitario: " . $Arauca. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
             }if ($_REQUEST['ruta'] == $Bogota) {
                echo "Destino: Bogota <br> Valor Unitario: " . $Bogota. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
             }if ($_REQUEST['ruta'] == $Bucaramanga) {
                echo "Destino: Bucaramanga <br> Valor Unitario: " . $Bucaramanga. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
             }if ($_REQUEST['ruta'] == $Duitama) {
                echo "Destino: Duitama <br> Valor Unitario: " . $Duitama. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
             }if ($_REQUEST['ruta'] == $Paipa) {
                echo "Destino: Paipa <br> Valor Unitario: " . $Paipa. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
             }if ($_REQUEST['ruta'] == $Saravena) {
                echo "Destino: Saravena <br> Valor Unitario: " . $Saravena. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
             }if ($_REQUEST['ruta'] == $Tame) {
                echo "Destino: Tame <br> Valor Unitario: " . $Tame. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
             }if ($_REQUEST['ruta'] == $Tunja) {
                echo "Destino: Tunja <br> Valor Unitario: " . $Tunja. "<br>";
                $objFacturar->costoPasaje($_REQUEST['numpasajeros'], $_REQUEST['ruta'], $_REQUEST['calcular']);
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