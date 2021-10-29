<?php

require 'header.php';
require '../config/Conexion.php';
?>

<nav class="navbar navbar-light bg-light">
<a href="javascript:history.back()"><img src="../public/img/atras.jpg" height="50" width="50" alt="Botón"></a>

  <div class="container-fluid justify-content-center">
  <h3 class="">REPORTE DE DESPERDICIO DE IMPRESION</h3>
    
  </div>
</nav>


<div class="container-fluid mb-10 mt-30 pb-10 pt-10 ">
    <div class="row d-flex justify-content-center ">
        <div class="col-9 mb-10 mt-30">
           
        </div>
        <div class="d-flex justify-content-end"> FECHA HORA </div>
    </div>
</div>


<div class="container flex">

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">TURNO</label>
  <select class="form-select" name='turno' id="turno"aria-label="Default select example">
  <option selected>Selecciona Turno</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
</div>

<form>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">OP</label>
  <input class="form-control" name='OP' id='OP' >
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">FOLIO H.I.T.</label>
  <input class="form-control" name='foliohit' id='foliohit' >
</div>

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">MAQUINA</label>
    <select class="form-select" name='maquina' id='maquina' >
    <option selected>Selecciona Maquina</option>
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
  <select class="form-select" name='operador' id='operador' >
        <option selected>Selecciona operador</option>
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
        <h5>CORTE EMPALME</h5>
    </div>
</div>
<label for="exampleFormControlInput1" class="form-label">METROS</label>
<div class="input-group mb-3">
  
  <input class="form-control" id="metros" name='metros'>
  <span class="input-group-text">m</span>
</div>

<label for="exampleFormControlInput1" class="form-label">KILOGRAMOS </label>
<div class="input-group mb-3">
  <input class="form-control" id="kilogramos" name='kilogramos'>
  <span class="input-group-text">kg</span>
</div>

<label for="exampleFormControlInput1" class="form-label">DESPERDICIO </label>
<div class="input-group mb-3">
  <input class="form-control" id="desperdicio" name='desperdicio'>
  <span class="input-group-text">kg</span>
</div>

<label for="exampleFormControlInput1" class="form-label">DESPERDICIO ALMACEN TELA </label>
<div class="input-group mb-3">
  <input class="form-control" id="desperdicia_almacen_tela" name='desperdicio_almacen_tela'>
  <span class="input-group-text">kg</span>
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INSPECTOR</label>
  <select class="form-select" name='inspector' id="inspector">
  <option selected>Selecciona Inspector</option>
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
  <textarea class="form-control" id="observaciones" rows='5' name='observaciones' ></textarea>
  
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<button type="button" class="btn btn-primary btn-lg">CAPTURAR</button>
<button type="button" class="btn btn-secondary btn-lg">GENERAR</button>
<button type="button" class="btn btn-success btn-lg">REVISAR</button>
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