<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GRUPO ORTIZ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <!-- Font Awesome -->
    <link href="../public/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../public/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <!-- iCheck -->

  <link rel="shortcut icon" href="">
  <script src="../public/plugins/sweetalert2/sweetalert2.all.js"></script>

</head>
<body>
 <div class="bg-img">
  <div class="content">
   <img src="../public/img/logo.png">
   <br>
   <br>
   <form method="post"  action="../config/loguearse.php">
    <div class="field">
      <span class="fa fa-user" style="color:green"></span>
      <input type="text" required placeholder="Usuario" id="usuario" name="usuario" autocomplete="off">
    </div>
    <div class="field space">
      <span class="fa fa-lock" style="color:green"></span>
      <input type="password" class="pass-key" required placeholder="Contraseña" id="password" name="password" autocomplete="off">
      <span class="show">ver</span>
    </div>
    <div class="pass">
      <br/>
      <a href="#"></a>
    </div>
    <div class="field">
      <input type="submit" name="login"  >
    </div>
  </form>
  <div class="login">
  </div>

  <div class="signup">

  </div>
</div>
</div>
<script>
  const pass_field = document.querySelector('.pass-key');
  const showBtn = document.querySelector('.show');
  showBtn.addEventListener('click', function(){
    if(pass_field.type === "password"){
      pass_field.type = "text";
      showBtn.textContent = "oculto";
      showBtn.style.color = "#3498db";
    }else{
      pass_field.type = "password";
      showBtn.textContent = "ver";
      showBtn.style.color = "#222";
    }
  });
</script>
<script src="../public/js/jquery-3.1.1.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>

<script type="text/javascript" src="scripts/login.js"></script>
</body>
</html> 
<style type="text/css">

  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    user-select: none;
  }


  .bg-img{
    background: url('../public/img/fondo.png');
    height: 100vh;
    background-size: cover;
    background-position: center;
  }
  .bg-img:after{
    position: absolute;
    content: '';
    top: 0;
    left: 0;

    background: rgba(0,0,0,0);
  }
  .content{
    position: absolute;
    top: 30%;
    left: 50%;
    z-index: 999;
    text-align: center;
    padding: 60px 32px;
    width: 370px;
    transform: translate(-50%,-50%);
    background: rgba(255,255,255,0.04);
    box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
  }
  .content header{
    color: white;
    font-size: 33px;
    font-weight: 600;
    margin: 0 0 35px 0;
    font-family: 'Montserrat',sans-serif;
  }
  .field{
    position: relative;
    height: 45px;
    width: 100%;
    display: flex;
    background: rgba(255,255,255,0.94);
  }
  .field span{
    color: #222;
    width: 40px;
    line-height: 45px;
  }
  .field input{
    height: 100%;
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    color: #FC5006;
    font-size: 16px;
    font-family: 'Poppins',sans-serif;
  }
  .space{
    margin-top: 16px;
  }
  .show{
    position: absolute;
    right: 13px;
    font-size: 13px;
    font-weight: 700;
    color: #222;
    display: none;
    cursor: pointer;
    font-family: 'Montserrat',sans-serif;
  }
  .pass-key:valid ~ .show{
    display: block;
  }
  .pass{
    text-align: left;
    margin: 10px 0;
  }
  .pass a{
    color: white;
    text-decoration: none;
    font-family: 'Poppins',sans-serif;
  }
  .pass:hover a{
    text-decoration: underline;
  }
  .field input[type="submit"]{
    background: #FC5006;
    border: 1px solid #32B31B;
    color: white;
    font-size: 18px;
    letter-spacing: 1px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Montserrat',sans-serif;
  }
  .field input[type="submit"]:hover{
    background: #32B31B;
  }
  .login{
    color: white;
    margin: 20px 0;
    font-family: 'Poppins',sans-serif;
  }



</style>

<script type="text/javascript">

  //made by vipul mirajkar thevipulm.appspot.com
  var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function() {
      that.tick();
    }, delta);
  };

  window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
    }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
      };
    </script>