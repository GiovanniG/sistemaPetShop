<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PET SHOP Parnamirim</title>
        <link href="estilos/estilopag.css" rel="stylesheet" type="text/css" />
        <style>
            
            body{
                background: #67B8E4;
                background-image: url(IMG/menu.png);
                background-repeat: repeat-x;               
            }
        </style>
    </head>
    <body>
        
        
        <div id="Mwrap">
 
	
 <div id="menu" style="position: relative; top: -35px;">
    <p>
        
    <a href="index.php"><img src="IMG/logo.jpg" Align="center" width="45px" height="45px" alt="Página Inicial" legend="Inicial" class="acende"></a>
    <a href="index.php">Inicial</a> |
    <a href="?e=op1"> Serviços </a> | 
    <a href="?e=op2"> Loja PET </a> | 
    <a href="?e=op3"> Consulta </a> |
    <a href="?e=op4"> Notícias </a>
    </p>
  </div>


 
<div id="footer">
 
</div>

   
  <div class="paginas">
<?php 
      $e = @$_GET['e'];

 switch($e){ 
 default: 
 include "home.php";
 break;

 case "op1": 
 include "servico.php";
 break;

        case "op2": 
 include "LojaPet.php";
 break;

        case "op3": 
 include "Consulta.php";
 break;
        case "op4": 
 include "noticias.php";
 break;
     }  
    ?>
</div>  

</div> <!--Div WARP -->
        
</body>
</html>
