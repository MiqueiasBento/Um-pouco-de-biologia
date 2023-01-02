<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/estiloComent.css">
	<title>Comentários</title>
</head>
<body>
	  <fieldset>
	  	<legend>Comentários</legend>
	  	<table>
	  		<tr>
	  			<td>
	  			  <p class="coment">
	  			  	<?php
	  			  	    $nome = $_POST["nomeUsuario"];
	  				    $comentario = $_POST["tMsg"];

	  				    if($nome==""){
	  			  	      $nome = "Anônimo";
                        }

	  				echo "<em>-".$nome."</em> <br>";
	  				echo $comentario;
	  				?>
	  				</p><br>
	  		    </td>
	  			<td></td>
	  		</tr>
	  		<tr>
	  			<td></td>
	  			<td><p class="coment"><em>-Um pouco de bilogia</em> <br>  
	  				<?php
	  				    $nome = $_POST["nomeUsuario"];
	  				    $email = $_POST["emailUsuario"];
                        
	  				    if($nome==""){
	  			  	      $nome = "Anônimo";
                        }
                        if($email==""){
	  			  	      $email = "-------";
                        }
	  			  	    
                        echo "Olá ".$nome.", agradecemos pelo seu comentário, pois ele ajudará na melhora do nosso site, entraremos é contato com você através do seu email: ";
	  			        echo "<i>".$email."</i> para responder-lo ao seu comentário</p>";
	  			    ?>
	  			</td>
	  		</tr>
	  	</table>

	  </fieldset>

</body>

</html>