<?php
require 'header.php';
  require '../config/Conexion.php';
  if (strlen(session_id())<1) 
  session_start();
  
echo session_id();

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INICIO</title>
</head>
<body>
    
    <nav class="navbar navbar-light bg-light">
      <div class="container">
       
        <a class="navbar-brand" href="#">
          <img src="../public/img/logo.png" alt="" width="50" height="50">
        </a>
      </div>
    </nav>

<div class="container">
  <div class="Confeccion ">
    
                <div class="card-box bg-blue">
                    <div class="inner">
                        <h3> Confección </h3>
                        <p> Student Strength </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <a href="/desperdicio/vistas/desperdicio_confeccion.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
  <div class="Impresion ">
  
    <div class="card-box bg-green">
                    <div class="inner">
                        <h3> Impresión </h3>
                        <p> Today’s Collection </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="/desperdicio/vistas/desperdicio_impresion.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
  <div class="Telares ">
    <div class="card-box bg-orange">
                    <div class="inner">
                        <h3> Telares </h3>
                        <p>Telares </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    <a href="/desperdicio/vistas/desperdicio_telares.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
  <div class="Laminado ">
    <div class="card-box bg-red">
                    <div class="inner">
                        <h3> Laminado </h3>
                        <p> Laminado </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="/desperdicio/vistas/desperdicio_laminado.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
  <div class="Extruder ">

    <div class="card-box bg-blue">
                    <div class="inner">
                        <h3> Extruder  </h3>
                        <p> Extruder </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <a href="/desperdicio/vistas/desperdicio_extruder.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
  <div class="Revision-Global ">
    <div class="card-box bg-green">
                    <div class="inner">
                        <h3>  Revisión Global </h3>
                        <p> Revisión Globl </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="/desperdicio/vistas/revision_desperdicio.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
  <div class="Valvulado">
    <div class="card-box bg-green">
                    <div class="inner">
                        <h3>  Valvulado </h3>
                        <p> Revisión Globl </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="/desperdicio/vistas/desperdicio_valvulado.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
  <div class="Entubado">
    <div class="card-box bg-blue">
                    <div class="inner">
                        <h3>  Entubado </h3>
                        <p> Revisión Globl </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="/desperdicio/vistas/desperdicio_entubado.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
  </div>
</div>
<span class="ir-arriba icon-arrow-up2"></span>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    .ir-arriba {
	display:none;
	padding:20px;
	background:#024959;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	right:20px;
}
.container {
  display: grid;
  grid-template-columns: 0.5fr 2fr 0.5fr;
  grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". Impresion ."
    ". Confeccion ."
    ". Telares ."
    ". Laminado ."
    ". Extruder ."
    ". Valvulado ."
    ". Entubado ."
    ". Revision-Global .";
}

.Impresion { grid-area: Impresion; }

.Confeccion { grid-area: Confeccion; }

.Telares { grid-area: Telares; }

.Laminado { grid-area: Laminado; }

.Extruder { grid-area: Extruder; }

.Valvulado { grid-area: Valvulado; }

.Entubado { grid-area: Entubado; }

.Revision-Global { grid-area: Revision-Global; }



.card-box {
    position: relative;
    color: #fff;
    padding: 20px 0px;
    margin: 20px 0px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
}
</style>

<?php
require 'footer.php';


?>