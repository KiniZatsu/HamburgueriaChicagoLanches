


<?php

    session_start();
    require_once "conexao.php";
	?>
	
	

<!DOCTYPE html>

<html lang="br">

<head>    
    <title>Hamburgueria Chicago Lanches</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="js/jquery-3.2.1.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        
    .container {
        padding: 80px 120px;
    }
    
    .person {
		border: 10px solid transparent;
		margin-bottom: 25px;
		width: 85%;
		height: 85%;
		opacity: 1.0;
    }
        
    .person:hover {
		border-color: #f1f1f1;
    }
    
	.carousel-inner img { 
		width: 100%;
		margin: auto;
	}

	.carousel-caption h3 {
		color: #fff !important;
	}

	@media (max-width: 600px) {
		.carousel-caption {
		display: none;
		}
	}

	.img{
		background-image: url(bg.jpg);
		background-attachment: fixed;
		background-repeat: no-repeat;
	}
	.bg-1 {
	    background-color: rgba(45, 45, 48, 0.4);
        color: #bdbdbd;
	}
	
	.bg-1 h3 {
		color: #fff;
	}
	
	.bg-1 p {
		font-style: italic;
	}
	
	.nav-tabs li a {
        color: #777;
	}
	
	.navbar {
		margin-bottom: 0;
		background-color: #2d2d30;
		border: 0;
		font-size: 11px !important;
		letter-spacing: 4px;
		opacity:0.9;
	}

	.navbar li a, .navbar .navbar-brand { 
		color: #d5d5d5 !important;
	}

	.navbar-nav li a:hover {
		color: #fff !important;
	}

	.navbar-nav li.active a {
		color: #fff !important;
		background-color:#29292c !important;
	}

	.navbar-default .navbar-toggle {
		border-color: transparent;
	}

	.open .dropdown-toggle {
		color: #fff ;
		background-color: #555 !important;
	}

	.dropdown-menu li a {
		color: #000 !important;
	}

	.dropdown-menu li a:hover {
		background-color: red !important;
	}
	
    </style>
</head>
    
<body>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">CHICAGO LANCHES</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#SOBRE">SOBRE</a></li>
		<li><a href="#CARDÁPIO">CARDÁPIO</a></li>
        <li><a href="#CONTATO">CONTATO</a></li>
		        <button onclick="document.getElementById('id010').style.display='block'" class="w3-button w3-xlarge w3-gray"><font color="black">ENTRAR</font></button>
			<div id="id010" class="w3-modal">
				<div class="w3-modal-content w3-black-3 w3-animate-zoom" style="max-width:600px">
					<div class="w3-center w3-black"><br>
						<span onclick="document.getElementById('id010').style.display='none'" class="w3-button w3-black w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						<img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-black w3-margin-top">
					</div>
					<form class="w3-container w3-black" method="post" action="?go=entrar">
						<div class="w3-section w3-black">
							<label><b>EMAIL: </b></label>
							<input class="w3-input w3-black w3-border w3-margin-bottom" type="text"  name="Email" rending autofocus required>
							<label><b>SENHA: </b></label>
        				    <input class="w3-input w3-black w3-border" type="password"  name="Senha"  required>
         				    <button class="w3-button w3-block w3-gray w3-section w3-padding" type="submit">EFETUAR LOGIN</button>
         				    <input class="w3-check w3-black w3-margin-top" type="checkbox" checked="checked"> DESEJA SALVAR A SENHA?
							
						</div>
					</form>


				</div>
			</div>
		<button onclick="document.getElementById('id020').style.display='block'" class="w3-button w3-xlarge w3-gray"><font color="black">CADASTRO</font></button>
			<div id="id020" class="w3-modal">
				<div class="w3-modal-content w3-black-3 w3-animate-zoom" style="max-width:600px">
					<div class="w3-center w3-black"><br>
						<span onclick="document.getElementById('id020').style.display='none'" class="w3-button w3-black w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
					</div>
					<form class="w3-container w3-black" action="insert_cadastro.php" method="POST">
						<div class="w3-section w3-black">
							<br>

							<center><label><b>POR FAVOR, PREENCHA TODOS OS DADOS A SEGUIR: </b></label><br></center><BR>
							<label><b>NOME COMPLETO: </b></label>
							<input type="nome" name="Nome" class="w3-input w3-black w3-border w3-margin-bottom"  id="Nome" rending autofocus required="">
							<label><b>TELEFONE: </b></label>
        				    <input type="telefone" name="Telefone" class="w3-input w3-black w3-border"  id="Telefone" maxlength="11" required=""><br>
							<label><b>EMAIL: </b></label><br>
        				    <input type="email" name="Email" class="w3-input w3-black w3-border" id="Email" required=""><br>
							<label><b>SENHA: </b></label><br>
        				    <input type="password" id="Senha" name="Senha" class="w3-input w3-black w3-border" placeholder="Maximo 6 caracteres" id="Senha" maxlength="6" required=""><br>
                        
         				   <input type="submit" name="botao-ok" class="w3-button w3-block w3-gray w3-section w3-padding" value="CADASTRAR" ></button>
						</div>
					</form>


				</div>
			</div>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		
	</ol>
	
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="ny.jpg" alt="New York">
			<div class="carousel-caption">
				
			</div> 
		
    </div>
</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div id="SOBRE">
  <div class="container">
 <div class="row test">
    <div class="col-md-7">
    <h3 class="text-center">SOBRE: </h3><br>
    <p class="text-center">DESCUBRA O POR QUE DO NOSSO AMOR DE FAZER LANCHES<br>SEMPRE BUSCANDO O MELHOR A NOSSOS CLIENTES</p><br>
	<p class="text-center">O nosso site tem como finalidade, facilitar o acesso da população da cidade e região à
						   nossa hamburgueria, permitindo o usuário pedir o lanche que desejar, respeitando a 
						   individualidade de cada um, podendo modificar e/ou retirar os ingredientes contidos no lanche.
						   
						   Sempre superando as expectativa de nossos usuários e os atendendo sempre com muita
						   atenção e dedicação.
						   
						   Contendo também em nosso site, as opções de lanche, que o usuário deseja pedir, além do
						   nosso contato, como por exemplo, nosso endereço, telefones para contato, além também do
						   nosso horário de funcionamento.</p><br>
	<p class="text">"Com muito amor e carinho"</p>
	<p class="text"> - A HAMBURGUERIA CHICAGO LANCHES</p>
</div>
 <div class="row test">
    <div class="col-md-5"> <img src="sobre.jpg" class="img" alt="sobre">
</div>
</div>
  </div>
</div>
						   
<div id="CARDÁPIO" color="#ffcccc" style="background-color:#e0e0eb">
    <h3 class="text-center">HAMBURGUERIA Chicago Lanches</h3>
    <p class="text-center"><em>Nós amamos vender lanche!</em></p>
    <p class="text-center">Então nós criamos um site para a nossa hamburgueria fictícia.</p>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>X-TUDO</strong></p><br>
            <a href="#demo" data-toggle="collapse">
              <center>  <img src="xtudo.png" class="img-circle person" alt="X-TUDO"></center>
            </a>
            <div id="demo" class="collapse">
               <center> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Ver mais</button></center>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-card-4">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id01').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>X-TUDO</h2>
								<h3>PREÇO: R$ 15,00</h3>
                            </header>
                            <div class="w3-container">
                            <p> <p> <form>
    <div class="checkbox">
	<h4>Ingredientes</h4>
      <label><input type="checkbox" value="">Pão de lanche</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 fatias de presunto</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 fatias de queijo</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">1 Hamburguer</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Frango Cozido em pedaços</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Bacon</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Calabresa</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Ovo</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Alface</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Tomate</label>
    </div>
  </form></p>

                            </div>
                           
                           
			<div id="id030" class="w3-modal">
				<div class="w3-modal-content w3-black-3 w3-animate-zoom" style="max-width:600px">
					
					
							
							</div>
						</div>
							
         				 
						 
					
                            
                        </div>
                    </div>
            </div>
            <br>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>X-FRANGO</strong></p><br>
			
            <a href="#demo2" data-toggle="collapse">
              <center>  <img src="xfrango.png" class="img-circle person" alt="X-FRANGO"></center>
            </a>
            <div id="demo2" class="collapse">
              <center>  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">Ver mais</button></center>
                    <div id="id02" class="w3-modal">
                        <div class="w3-modal-content w3-card-4">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id02').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>X-FRANGO</h2>
								<h3>PREÇO: R$ 9,00</h3>
                            </header>
                            <div class="w3-container">
                            <p> <form>
    <div class="checkbox">
	<h4>Ingredientes</h4>
      <label><input type="checkbox" value="">Pão de lanche</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 fatias de presunto</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 fatias de queijo</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">1 Hamburguer</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Alface</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Tomate</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Milho</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Ervilha</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Frango Cozido em pedaços</label>
    </div>
  </form></p>
                            
                            </div>
                           
                        </div>
                    </div>
            </div>
            <br>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>X-BACON EGG</strong></p><br>
            <a href="#demo3" data-toggle="collapse">
                <center><img src="xbaconegg.png" class="img-circle person" alt="X-BACON_EGG"></center>
            </a>
            <div id="demo3" class="collapse">
                <center><button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-black">Ver mais</button></center>
                    <div id="id03" class="w3-modal">
                        <div class="w3-modal-content w3-card-4">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id03').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>X-BACON EGG</h2>
								<h3>PREÇO: R$ 10,00</h3>
                            </header>
                            <div class="w3-container">
                           <p> <form>
    <div class="checkbox">
	<h4>Ingredientes</h4>
      <label><input type="checkbox" value="">Pão de lanche</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 fatias de queijo</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">1 Hamburguer</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Bacon</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Ovo</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Alface</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Tomate</label>
    </div>
  </form></p>
                            
                            </div>
                           
                        </div>
						
                    </div>
					
            </div>
			
        </div>

        <br>

    </div>
	
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>BIG X-PICANHA</strong></p><br>
            <a href="#demo4" data-toggle="collapse">
               <center> <img src="bigxpicanha.png" class="img-circle person" alt="BIG X PICANHA"></center>
            </a>
            <div id="demo4" class="collapse">
                <center><button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-black">Ver mais</button></center>
                    <div id="id04" class="w3-modal">
                        <div class="w3-modal-content w3-card-4">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id04').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>BIG X-PICANHA</h2>
								<h3>PREÇO: R$ 14,00</h3>
                            </header>
                            <div class="w3-container">
                             <p> <form>
    <div class="checkbox">
	<h4>Ingredientes</h4>
      <label><input type="checkbox" value="">Pão de lanche</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 fatias de queijo</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">1 Hamburguer de picanha</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Bacon</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Alface</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Tomate</label>
    </div>
  </form></p>                           
                            </div>
                            
                        </div>
                    </div>
            </div>
            <br>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>DUPLO X-BURGER</strong></p><br>
            <a href="#demo5" data-toggle="collapse">
               <center> <img src="duploxburger.png" class="img-circle person" alt="DUPLO X-BURGER"></center>
            </a>
            <div id="demo5" class="collapse">
               <center> <button onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-black">Ver mais</button></center>
                    <div id="id05" class="w3-modal">
                        <div class="w3-modal-content w3-card-4">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id05').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>DUPLO X-BURGER</h2>
								<h3>PREÇO: R$ 7,00</h3>
                            </header>
                            <div class="w3-container">
                           <p> <form>
    <div class="checkbox">
	<h4>Ingredientes</h4>
      <label><input type="checkbox" value="">Pão de lanche</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">4 fatias de queijo</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 Hamburguer</label>
    </div>
  </form></p>
                            
                            </div>
                            
                        </div>
                    </div>
            </div>
            <br>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>X-BACON</strong></p><br>
            <a href="#demo6" data-toggle="collapse">   
           <center>     <img src="xbacon.png" class="img-circle person" alt="X-BACON"></center>
            </a>
            <div id="demo6" class="collapse">
              <center>  <button onclick="document.getElementById('id06').style.display='block'" class="w3-button w3-black">Ver mais</button></center>
                    <div id="id06" class="w3-modal">
                        <div class="w3-modal-content w3-card-4">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id06').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>X-BACON</h2>
								<h3>PREÇO: R$ 9,00</h3>
                            </header>
                            <div class="w3-container">
                           <p> <form>
    <div class="checkbox">
	<h4>Ingredientes</h4>
      <label><input type="checkbox" value="">Pão de lanche</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2 fatias de queijo</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">1 Hamburguer</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Bacon</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Alface</label>
    </div>
<div class="checkbox">
      <label><input type="checkbox" value="">Tomate</label>
    </div>
  </form></p>
                            
                            </div>
                           
                        </div>
                    </div>
            </div>
            <br>
        </div>
    </div>
</div>

<div id="CONTATO" class="container-fluid bg-1 img">
 
  <h2 class="text-center"><em>Contatos</em></h2>
  <div class="row test">
    <div class="col-md-4">
      
      <p><span class="glyphicon glyphicon-map-marker"></span>Caçapava - SP</p>
      <p><span class="glyphicon glyphicon-phone"></span>Fone: +55 (12)3655-5811</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: chicagoLS@Hotmail.com</p> 
    </div>
   
    </div>
  </div></div>   
</body>
</html>
<?php
if(@$_GET['go'] == 'entrar'){
  $Email = $_POST['Email'];
  $Senha = $_POST['Senha'];

  if(empty($Email)){

    echo "<script> history.back();</script>";
  }
    else if(empty($Senha)){
        
    echo "<script> history.back();</script>";
    }
    else{
    $query1 = mysql_num_rows(mysql_query("SELECT * FROM cadastro WHERE Email = '$Email' AND Senha = '$Senha'"));
    if($query1 == 1){
    $_SESSION['Email']=$_POST['Email'];
    $_SESSION['Senha']=$_POST['Senha'];
     echo "<meta http-equiv='refresh' content='0, url=indexloginOK.php'>";
    
  }else{
      echo "<script>alert('Usuário ou senha incorretos.'); history.back();</script>";
	  
	  
    }
  }
}

?>
