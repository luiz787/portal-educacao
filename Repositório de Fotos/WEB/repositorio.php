﻿
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Portal Educação</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../styles/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../styles/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="icon" href="../../imgs/logo.png">
    <script type="text/javascript" src="mostrar.js"></script> 
        <!-- CSS  -->
      <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
          }

          main {
            flex: 1 0 auto;
          }
      </style>
	
	<link href= "../../styles/css/mostrar.css" type="text/css">
  </head>
  <body>
    <!-- NAVBAR -->
    <?php 
      include('../../navbar.php');
    ?>

    <!-- ESPAÇO PARA MARQUEE -->
    <div>

    </div>

    <!-- Modal de login -->
    <?php 
      if(!isset($_SESSION['usuario'])) {
        include('../../modal.php');
      }
    ?>

    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <h1 class="header center blue-text text-darken-4">Portal Educação</h1>
        <div class="row center">
          <h5 class="header col s12 light">Um portal com soluções para sistemas educacionais</h5>
        </div>
        <br><br>

      </div>
    </div>


    <div class="container">
      <div class="section">
        <!-- CONTEÚDO AQUI -->
		
        <div align="center">
          <a class="waves-effect waves-light btn light-blue darken-4" onclick="MOSTRAR()">carômetro</a>

          <a class="waves-effect waves-light btn light-blue darken-4" href="WebCam.html">WebCam</a>
          <a class="waves-effect waves-light btn light-blue darken-4" href="#">albuns</a>
          <a class="waves-effect waves-light btn light-blue darken-4" href="Upload.html">upload de imagens</a>
		  
        </div>
        <br>

	<div style="display:none" id = "inv">
		
       <div class="row">
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ADALBERTO_201511130032.jpg" height ="390">
              <span class="card-title">Adalberto Barbosa</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130032<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ALICE_COSTA 201511130024.jpg" height ="390">
              <span class="card-title">Alice Costa</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130024<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/AMAURY_VIANNA 201511130326.jpg" height ="390">
              <span class="card-title">Amaury Vianna</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130326<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
	  
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ANA_LUISA 201511130016.jpg" height ="390">
              <span class="card-title">Ana Luisa</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130016<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  <!-- -->
	  <div class="row">
	  
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ANDRE_MATHEUS 201411130170.jpg" height ="390">
              <span class="card-title">André Matheus</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201411130170<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/BRENO_MARIZ 201511130059.jpg" height ="390">
              <span class="card-title">Breno Mariz</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130059<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/BRENO_PAIVA 201511130067.jpg" height ="390">
              <span class="card-title">Breno Paiva</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130067<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/BRUNO 201511130040.jpg" height ="390">
              <span class="card-title">Bruno Ferreira</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130040<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- -->
	  <div class="row">
	  
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/BRYANN_BUENO 201511130342.jpg" height ="390">
              <span class="card-title">Bryann Bueno</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130342<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/CARLOS_EDUARDO 201411130197.jpg" height ="390">
              <span class="card-title">Carlos Eduardo</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201411130197<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ESTER 201511130083.jpg" height ="390">
              <span class="card-title">Ester Atman</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130083<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/FELIPE 201511130091.jpg" height ="390">
              <span class="card-title">Felipe Linhares</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130091<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- -->
	  <div class="row">
	  <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ADALBERTO_201511130032.jpg" height ="390">
              <span class="card-title">Gabriel Garcia</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130032<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
	  
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/GABRIEL_HADDAD 201511130288.jpg" height ="390">
              <span class="card-title">Gabriel Haddad</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130288<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/GABRIEL_VICTOR 201511130113.jpg" height ="390">
              <span class="card-title">Gabriel Víctor</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130113<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ADALBERTO_201511130032.jpg" height ="390">
              <span class="card-title">Gabriel Vinícius</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130032<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- -->
	  <div class="row">
	  
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/ISABELA_CAROLINA 201511130130.jpg" height ="390">
              <span class="card-title">Isabela Carolina</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130130<br>
			  Curso: Informática<br>
			  Turma :INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/JOAO_PEDRO_ROSA 201511130270.jpg" height ="390">
              <span class="card-title">João Pedro Rosa</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130270<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/JOAO_PEDRO_SANTOS 201511130300.jpg" height ="390">
              <span class="card-title">João Pedro Santos</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130300<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/JOAO_VICTOR 201511130148.jpg" height ="390">
              <span class="card-title">João Victor</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130148<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- -->
	  <div class="row">
	  
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/LUANA_PINHEIRO_201511130296.jpg" height ="390">
              <span class="card-title">Luana Pinheiro</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130296<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/LUCAS 201511130261.jpg" height ="390">
              <span class="card-title">Lucas Henrique</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130261<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/LUIZ 201511130156.jpg" height ="390">
              <span class="card-title">Luiz Augusto</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130156<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/MARCELO201511130180.jpg" height ="390">
              <span class="card-title">Marcelo Augusto</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130180<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- -->
	  <div class="row">
	  
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/MARIA_CAROLINA 201511130253.jpg" height ="390">
              <span class="card-title">Maria Carolina</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130253<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/MARIA_CAROLINA 201511130253.jpg" height ="390">
              <span class="card-title">Matheus Morato</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130253<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/PAULA_RIBEIRO 201511130245.jpg" height ="390">
              <span class="card-title">Paula Ribeiro</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130245<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/PEDRO_HENRIQUE 201511130199.jpg" height ="390">
              <span class="card-title">Pedro Henrique</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130199<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		
      </div>
	  
	  <!-- -->
	  <div class="row">
	  
	  <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/PEDRO_OTAVIO 201511130350.jpg" height ="390">
              <span class="card-title">Pedro Otávio</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130350<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/RAFAEL_NEVES 201511130237.jpg" height ="390">
              <span class="card-title">Rafael Gontijo</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130237<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		
        <div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/RAFAEL_HERBERT 201411130235.jpg" height ="390">
              <span class="card-title">Rafael Hebert</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201511130235<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/THALES_ALAN 201611130433.jpg" height ="390">
              <span class="card-title">Thales Alan</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201611130433<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		
		</div>
		
		
		<div class="row">
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/THALES_GABRIEL 201411130251.jpg" height ="390">
              <span class="card-title">Thales Gabriel</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201411130251<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/VICTOR_CESAR 201511130202.jpg" height ="390">
              <span class="card-title">Victor César</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201411130202<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/VICTOR_GABRIEL 201511130210.jpg" height ="390">
              <span class="card-title">Victor Gabriel</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201411130210<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		<div class="col s2 m3">
          <div class="card">
            <div class="card-image">
              <img src="INF2A/VITOR_RODARTE 201511130229.jpg" height ="390">
              <span class="card-title">Vitor Rodarte</span>
            </div>
            <div class="card-content">
              <p>Matrícula: 201411130229<br>
			  Curso: Informática<br>
			  Turma: INF2A</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  </div>

        </div>



      </div> <!-- container-->

    </div>
  </div>
</div>


<!-- -->

<div class="row">
  <div class="col s12">

  </div>
</div>


</div>
</div>

<?php 
    include('../../footer.php');
?>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../template/js/materialize.js"></script>
<script src="../../template/js/init.js"></script>
<script src="../../index.js"></script>
<script>
  function onclick() {
      var display = document.getElementById(mydiv).style.display;
      if (display == "none")
          document.getElementById(el).style.display = 'block';
      else
          document.getElementById(el).style.display = 'none';
  }



</script>

</body>
</html>

