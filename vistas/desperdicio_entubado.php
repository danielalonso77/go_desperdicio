<?php

require 'header.php';
require '../config/Conexion.php';

?>

<nav class="navbar navbar-light bg-light">
<a href="javascript:history.back()"><img src="../public/img/atras.jpg" height="50" width="50" alt="Botón"></a>

  <div class="container-fluid justify-content-center">
  <h3 class="">REPORTE DE DESPERDICIO DE ENTUBADO</h3>
    
  </div>
</nav>


<form form action="" name="formulario_entubado" id="formulario_entubado" method="POST">
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



<label for="exampleFormControlInput1" class="form-label">BOPP</label>
<div class="input-group mb-3">
  
  <input class="form-control" id="telares" name="telares">
  <span class="input-group-text">kg</span>
</div>

<label for="exampleFormControlInput1" class="form-label">PLASTA</label>
<div class="input-group mb-3">
  
  <input class="form-control" name='valvuldo' id='valvulado'>
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
  <textarea class="form-control" id="exampleFormControlInput1" rows='5' name='observaciones' id='observaciones'></textarea>
  
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<button type="submit" id='btnGuardar' class="btn btn-primary btn-lg">CAPTURAR</button>
<button type="button" class="btn btn-secondary btn-lg">GENERAR</button>
<button type="button" class="btn btn-success btn-lg"  > <a href='revision_desperdicio.php'  >REVISAR</a> </button>
</div>

</div>
</form>
<script src="scripts/entubado.js"></script>
<?php
include 'footer.php';
?>