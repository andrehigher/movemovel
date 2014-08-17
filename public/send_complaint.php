<?php

	$con = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("setop_movemovel",$con);
	if(isset($_POST['email']) ) {
		$insert = "
			INSERT INTO 
				complaints
			VALUES
				(
					NULL,
					NOW(),
					'".$_POST['name']."',
					'".$_POST['email']."',
					'".$_POST['complaint']."'
				)
		";
		$result = mysql_query($insert);
		if (!$result) {
		    die('Invalid query: ' . mysql_error());exit;
		}else {
			echo "Dados salvos com sucesso!";
		}
	} else {
		echo "Houve algum erro nos dados enviados.";exit;
	}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MoveMóvel - SETOP</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="ratchet.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="ratchet.js"></script>
  </head>
  <body>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
     	<header class="bar bar-nav">
		  <h1 class="title">Reclamações</h1>
		</header>
		<div style="margin-top: 50px; text-align: center;">
  			<span class="icon icon-check"></span> Dados salvos com sucesso!
		</div>
      
    </div>


      	<nav class="bar bar-tab">
	        <a class="tab-item" href="/" data-transition="slide-in">
	          <span class="icon icon-home"></span>
	          <span class="tab-label">Home</span>
	        </a>
	        <a class="tab-item" href="terminais.html" data-transition="slide-in">
	          <span class="icon icon-list"></span>
	          <span class="tab-label">Linhas</span>
	        </a>
	        <a class="tab-item" href="/avaliacao.html" data-transition="slide-in">
	          <span class="icon icon-star-filled"></span>
	          <span class="tab-label">Avaliação</span>
	        </a>
	        <a class="tab-item active" href="/reclamacoes.html" data-transition="slide-in">
	          <span class="icon icon-person"></span>
	          <span class="tab-label">Reclamações</span>
	        </a>
	        <a class="tab-item" href="/funciona.html" data-transition="slide-in">
	          <span class="icon icon-info"></span>
	          <span class="tab-label">Ajuda</span>
	        </a>
     	</nav>

  </body>
</html>