<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/estiloResult.css">
	<title>Resultado</title>
</head>
<body>
	 <table>
	 	<tr>
     		<td class="Lesp" colspan="2"><h2>Resultado do QUIZ</h2></td>
     	</tr>
     	<tr>
     		<td><p>Você acertou:</p></td>
     		<td><em>&nbsp;
     			<?php
     			  /*contador de acertos*/
     			  $cont=0;
                      
     			  /*GABARITO*/
                      $respCorret = array("C","C","A","C","C","B","D","B","D","A","B");

     			  /*recebimento da resposta do visitante*/
                      $R01 = isset($_POST["q01"])? $_POST["q01"] : "vazio" ;
     			  $R02 = isset($_POST["q02"])? $_POST["q02"] : "vazio" ;
                      $R03 = isset($_POST["q03"])? $_POST["q03"] : "vazio" ;
                      $R04 = isset($_POST["q04"])? $_POST["q04"] : "vazio" ;
                      $R05 = isset($_POST["q05"])? $_POST["q05"] : "vazio" ;
                      $R06 = isset($_POST["q06"])? $_POST["q06"] : "vazio" ;
                      $R07 = isset($_POST["q07"])? $_POST["q07"] : "vazio" ;
                      $R08 = isset($_POST["q08"])? $_POST["q08"] : "vazio" ;
                      $R09 = isset($_POST["q09"])? $_POST["q09"] : "vazio" ;
                      $R010 = isset($_POST["q010"])? $_POST["q010"] : "vazio" ;

                      $respRecebid = array($R01, $R02, $R03, $R04, $R05, $R06, $R07, $R08, $R09, $R010);

                      for ($i=0; $i<10; $i++) { 
                           if ($respCorret[$i]==$respRecebid[$i]) {
                                $cont = $cont+1;
                           }
                      }

     			  echo $cont;?> / 10&nbsp;</em></td>
     	</tr>
          <tr>
               <td id="gabarit"><a id="quiz" href="GABARITO.html">GABARITO</a></td>
          </tr>

	 </table>
      
</body>
</html>