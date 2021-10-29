<?php

require 'header.php';
require '../config/Conexion.php';

?>

<nav class="navbar navbar-light bg-light">
<a href="javascript:history.back()"><img src="../public/img/atras.jpg" height="50" width="50" alt="Botón"></a>

  <div class="container-fluid justify-content-center">
  <h3 class="">REPORTE DE DESPERDICIO DE CONFECCIÓN</h3>
    
  </div>
</nav>


<div class="container-fluid mb-10 mt-30 pb-10 pt-10 ">
    <div class="row d-flex justify-content-center ">
        <div class="col-9 mb-10 mt-30">
           
        </div>
        
    </div>
</div>

<form action="" name="formulario" id="formulario" method="POST">
<div class="container flex">

<div class="mb-3">
  <label for="turno" class="form-label">TURNO</label>
  <select class="form-select" name='turno' id="turno">
    <option value="0">Elige tu horario</option>
    <option value="mañana">Mañana </option>
    <option value="tarde">Tarde </option>
    <option value="noche">Noche </option>
 
  </select>
</div>

<div class="mb-3">
  <label for="folioihit" class="form-label">FOLIO H.I.T.</label>
  <input class="form-control" type='text' id="folio" name='folio' >
  <label for="orden" type='text' class="form-label">ORDEN</label>
  <input class="form-control" id="orden" name='orden' >
</div>

<div class="mb-3">
  
</div>

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">MAQUINA</label>
    <select class="form-select" name='maquina' id="maquina">
    <option >SELECCIONA MAQUINA</option>
    <?php 
                     $sql = "SELECT * FROM `maquinas`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['maquina']." '>".$valores['maquina']."</option>";}
                      ?>
        
    </select>
</div>

<div class="mb-3">
  <label for="operador" class="form-label">OPERADOR</label>
  <select class="form-select" name='operador' id="operador">
  <option value="1" >SELECCIONA OPERADOR</option>
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
        <h5>SEGUNDA</h5>
    </div>
</div>

<label for="exampleFormControlInput1" class="form-label">TELARES</label>
<div class="input-group mb-3">
<input class="form-control" type="number" step="any" id="telarespza" name="telarespza">
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">BOPP</label>
<div class="input-group mb-3">  
<input class="form-control" type="number" step="any" id='bopppza' name='bopppza'>
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">LAMINADO</label>
<div class="input-group mb-3">  
<input class="form-control" type="number" step="any" name='laminadopza' id='laminadopza'>
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">IMPRESIÓN</label>
<div class="input-group mb-3">  
<input class="form-control" type="number" step="any" name='impresionpza' id='impresionpza'>
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">CONFECCIÓN</label>
<div class="input-group mb-3">  
<input class="form-control" type="number" step="any"name='confeccionpza' id='confeccionpza'>
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">ALMACÉN TELA</label>
<div class="input-group mb-3">  
<input class="form-control" type="number" step="any" name='almacenTela' id='almacenTela'>
<span class="input-group-text">pzs</span>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <h5>DESPERDICIO</h5>
    </div>
</div>

<label for="almacen" class="form-label">TELARES</label>
<div class="input-group mb-3">  
<input class="form-control"  type="number" step="any" name='telareskg' id='telareskg'>
<span class="input-group-text">kg</span>
</div>

<label for="valvulado" class="form-label">VALVULADO</label>
<div class="input-group mb-3">
  <input class="form-control" type="number" step="any" name='valvuladokg' id='valvuladokg'>
  <span class="input-group-text">kg</span>
</div>

<label for="bopp" class="form-label">BOPP</label>
<div class="input-group mb-3">
  <input class="form-control" type="number" step="any" name='boppkg' id='boppkg'>
  <span class="input-group-text">kg</span>
</div>

<label for="laminado" class="form-label">LAMINADO</label>
<div class="input-group mb-3">
  <input class="form-control" type="number" step="any" name='laminadokg' id='laminadokg'>
  <span class="input-group-text">kg</span>
</div>

<label for="impresion" class="form-label">IMPRESIÓN</label>
<div class="input-group mb-3">
  <input class="form-control" type="number" step="any" name='impresionkg' id='impresionkg'>
  <span class="input-group-text">kg</span>
</div>

<label for="confeccion" class="form-label">CONFECCIÓN</label>
<div class="input-group mb-3">
  <input class="form-control" type="number" step="any" name="confeccionkg" id='confeccionkg'>
  <span class="input-group-text">kg</span>
</div>

<label for="almacenTelakg" class="form-label">ALMACÉN TELA</label>
<div class="input-group mb-3">
  <input class="form-control" type="number" step="any" name='almacenTelakg' id='almacenTelakg'>
  <span class="input-group-text">kg</span>
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INSPECTOR</label>
    <select class="form-select" name='operador' id="operador">
    <option value="0" >SELECCIONA INSPECTOR</option>
     
     <?php 
                     $sql = "SELECT * FROM `operadores`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['nombre']."'>".$valores['nombre']."</option>";}
                      ?>
  
    </select>
</div>
<div class="mb-3">
  <label for="observaciones" class="form-label">OBSERVACONES</label>
  <textarea class="form-control"  rows='5' name='ob' id='ob'></textarea>
  
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<button type="submit" id="btnGuardar"  class="btn btn-primary btn-lg">CAPTURAR</button>
<button type="button" class="btn btn-secondary btn-lg">GENERAR</button>
<button type="button" class="btn btn-success btn-lg"  > <a href='revision_desperdicio.php'  >REVISAR</a> </button>
</div>

</div>
</form>
<script>
</script>
<?php
include 'footer.php';
?>
<script src="scripts/confeccion.js"></script>


