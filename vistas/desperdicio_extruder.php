<?php

require 'header.php';
require '../config/Conexion.php';

?>

<nav class="navbar navbar-light bg-light">
<a href="javascript:history.back()"><img src="../public/img/atras.jpg" height="50" width="50" alt="Botón"></a>

  <div class="container-fluid justify-content-center">
  <h3 class="">REPORTE DE DESPERDICIO DE EXTRUDER</h3>
    
  </div>
</nav>

<form method="post" action="" name="formulario_ext">
<div class="container flex">
<div class="mb-3">
    <label for="maquina" class="form-label">EXTRUDER STAREX</label>
    <select class="form-select" name='extruder' id="extruder">
    <option selected>Selecciona Maquina</option>
    <?php 
                     $sql = "SELECT * FROM `maquinas`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['maquina']."-".$valores['id']."'>".$valores['maquina']."</option>";}
                      ?>
    </select>
</div>

<div class="mb-3">
  <label for="turno" class="form-label">TURNO</label>
  <select class="form-select" aria-label="Default select example" nombre='turno' id='turno'>
  <option selected>Selecciona Turno</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">OPERADOR</label>
  <select class="form-select" name='operador' id="operador">
        <option selected>Selecciona operador</option>
        <?php 
                     $sql = "SELECT * FROM `operadores`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['nombre']."'>".$valores['nombre']."</option>";}
                      ?>
    </select>
</div>



<div class="container-fluid">
    <div class="row justify-content-center">
        <h5>DESPERDICIO</h5>
    </div>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">CINTA</label>
  <input class="form-control" id="cinta" name='cinta' >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">PELICULA</label>
  <input class="form-control" id="pelucula" name='pelicula'>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">BOBINA</label>
  <input class="form-control" id="bobina" name='bobina'>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">POLIETILENO</label>
  <input class="form-control" id="polietileno" name='polietileno'>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">PLASTA</label>
  <input class="form-control" id="plasta" name='plasta'>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INSPECTOR</label>
  <select class="form-select" name='idinspector' id="idinspector">
  <option selected>Selecciona Inspector</option>
  <?php 
                     $sql = "SELECT * FROM `operadores`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['nombre']."'>".$valores['nombre']."</option>";}
                      ?>
    </select>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">OBSERVACONES</label>
  <textarea class="form-control" id="observaciones" rows='5' name='observaciones' ></textarea>
  
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<button type="submit" name="btnGuardar"  class="btn btn-primary btn-lg">CAPTURAR</button>
<button type="button" class="btn btn-secondary btn-lg">GENERAR</button>
<button type="button" class="btn btn-success btn-lg">REVISAR</button>
</div>

</div>
</form>

<style> 
.hora{
  margin-top: 20px;
  margin-bottom: 20px;
}
</style>


<?php
include 'footer.php';
?>
<script src="scripts/extruder.js"></script>