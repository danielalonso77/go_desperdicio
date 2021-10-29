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

<form method="post" class="form-horizontal" id="formulario_confec">
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
  <input class="form-control" id="foliohit" name='foliohit' >
  <label for="orden" class="form-label">ORDEN</label>
  <input class="form-control" id="orden" name='orden' >
</div>

<div class="mb-3">
  
</div>

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">MAQUINA</label>
    <select class="form-select" name='maquina' id="maquina">
    <option selected>SELECCIONA MAQUINA</option>
    <?php 
                     $sql = "SELECT * FROM `MAQUINAS`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['id']."'>".$valores['maquina']."</option>";}
                      ?>
    </select>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">OPERADOR</label>
  <select class="form-select" name='operador' id="operador">
  <option value="1" selected >SELECCIONA OPERADOR</option>
  <?php 
                     $sql = "SELECT * FROM `operadores`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['id']."'>".$valores['nombre']."</option>";}
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
<input class="form-control" id="telares" name="telares">
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">BOPP</label>
<div class="input-group mb-3">  
<input class="form-control" id='bopp' name='bopp'>
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">LAMINADO</label>
<div class="input-group mb-3">  
<input class="form-control" name='laminado' id='laminado'>
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">IMPRESIÓN</label>
<div class="input-group mb-3">  
<input class="form-control" name='impresión' id='impresión'>
<span class="input-group-text">pzs</span>
</div>

<label for="exampleFormControlInput1" class="form-label">VALVULADO</label>
<div class="input-group mb-3">  
<input class="form-control" name='confección' id='confección'>
<span class="input-group-text">m</span>
</div>

<label for="exampleFormControlInput1" class="form-label">ALMACÉN TELA</label>
<div class="input-group mb-3">  
<input class="form-control" name='almacen' id='almacen'>
<span class="input-group-text">pzs</span>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <h5>DESPERDICIO</h5>
    </div>
</div>

<label for="exampleFormControlInput1" class="form-label">TELARES</label>
<div class="input-group mb-3">  
<input class="form-control" name='almacen' id='almacen'>
<span class="input-group-text">kg</span>
</div>

<label for="exampleFormControlInput1" class="form-label">VALVULADO</label>
<div class="input-group mb-3">
  <input class="form-control" name='valvulado' id='valvulado'>
  <span class="input-group-text">kg</span>
</div>

<label for="exampleFormControlInput1" class="form-label">BOPP</label>
<div class="input-group mb-3">
  <input class="form-control" name='bopp' id='bopp'>
  <span class="input-group-text">kg</span>
</div>

<label for="exampleFormControlInput1" class="form-label">LAMINADO</label>
<div class="input-group mb-3">
  <input class="form-control" name='laminado' id='laminado'>
  <span class="input-group-text">kg</span>
</div>

<label for="exampleFormControlInput1" class="form-label">IMPRESIÓN</label>
<div class="input-group mb-3">
  <input class="form-control" name='impresión' id='impresión'>
  <span class="input-group-text">kg</span>
</div>


<label for="exampleFormControlInput1" class="form-label">ALMACÉN TELA</label>
<div class="input-group mb-3">
  <input class="form-control" name='almacenTela' id='almacenTela'>
  <span class="input-group-text">kg</span>
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INSPECTOR</label>
    <select class="form-select" name='operador' id="operador">
    <option value="0" selected>SELECCIONA INSPECTOR</option>
     
     <?php 
                     $sql = "SELECT * FROM `operadores`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['id']."'>".$valores['nombre']."</option>";}
                      ?>
      
    </select>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">OBSERVACONES</label>
  <textarea class="form-control" id="exampleFormControlInput1" rows='5' name='observaciones' id='observaciones'></textarea>
  
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<button type="submit" id='btnGuardar' onclick="boton()" class="btn btn-primary btn-lg">CAPTURAR</button>
<button type="button" class="btn btn-secondary btn-lg">GENERAR</button>
<button type="button" class="btn btn-success btn-lg"  > <a href='revision_desperdicio.php'  >REVISAR</a> </button>
</div>

</div>
</form>
<script>
    function boton() {
        console.log('boton')
    }
  


</script>
<?php
include 'footer.php';
?>