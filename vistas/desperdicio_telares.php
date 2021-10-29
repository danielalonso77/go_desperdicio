<?php

require 'header.php';
require '../config/Conexion.php';
?>

<nav class="navbar navbar-light bg-light">
<a href="javascript:history.back()"><img src="../public/img/atras.jpg" height="50" width="50" alt="Botón"></a>

  <div class="container-fluid justify-content-center">
  <h3 class="">REPORTE DE DESPERDICIO DE TELARES</h3>
    
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
  <label for="exampleFormControlTextarea1" class="form-label">TELAR</label>
  <select class="form-select" name='telar' id='telar' aria-label="Default select example">
  <option selected>Selecciona Telar</option>
  <?php 
                     $sql = "SELECT * FROM `maquinas`";
                     $query = $conexion -> query ($sql);
                     while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['id']."'>".$valores['maquina']."</option>";}
                      ?>
</select>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">OPERADOR</label>
  <select class="form-select" name='operador' id='operador'>
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
        <h5>DESPERDICIO</h5>
    </div>
</div>

<label for="exampleFormControlInput1" class="form-label">CINTA</label>
<div class="input-group mb-3">
  
  <input class="form-control" id="cinta" name='cinta'>
  <span class="input-group-text">m</span>
</div>
<label for="exampleFormControlInput1" class="form-label">PELATUBO</label>
<div class="input-group mb-3">
  
  <input class="form-control" id="pelatubo" name='pelatubo'>
  <span class="input-group-text">m</span>
</div>
<label for="exampleFormControlInput1" class="form-label">ARRANQUE</label>
<div class="input-group mb-3">
  
  <input class="form-control" id="arranque" name='arranque'>
  <span class="input-group-text">m</span>
</div>
<label for="exampleFormControlInput1" class="form-label">TELA</label>
<div class="input-group mb-3">
  
  <input class="form-control" id="tela" name='tela'>
  <span class="input-group-text">m</span>
</div>
<label for="exampleFormControlInput1" class="form-label">TELA POLIETILENO</label>
<div class="input-group mb-3">
  
  <input class="form-control" id="tela_polietileno" name='tela_polietileno'>
  <span class="input-group-text">m</span>
</div>




<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INSPECTOR</label>
  <select class="form-select" name="inspector" id="inspector">
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
  
<div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-primary btn-lg">CAPTURAR</button>
  <button type="button" class="btn btn-secondary btn-lg">GENERAR</button>
  <button type="button" class="btn btn-success btn-lg">REVISAR</button>
</div>

</div>

</form>

<?php
include 'footer.php';
?>

<script>
    function boton() {
        console.log('boton')
    }
</script>