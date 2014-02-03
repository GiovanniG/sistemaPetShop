<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Consulta</title>
        <link href="estilos/estilopag.css" rel="stylesheet" type="text/css" />
    </head>
    
    
    
<body>
        <div class="textConsul">
        <h2>Olá! Aqui é um espaço para você marcar a sua consulta!</h2>
        <h4><font-face style="color:red">Atenção! Utilize os navegadores Chrome ou Opera para marcar as consultas.</font-face></h4>
        
        
<form>
      
<fieldset><legend><h3>Dados do PET</h3></legend>
          <p><label for="nPet">Seu nome PET: </label><input type="text" name="nPet" required></p>
      <p>  Que tipo de animal você é? 
        
<select name="animais" required>
    <option value="cao">Cão </option>
    <option value="gato">Gato </option>
    <option value="Ave">Ave </option>
    <option value="roedor">Roedor </option>
    <option value="outro">Outro </option>        
</select>
<label for="outro">Qual? </label><input name="outro" type="text"></p>
<p><label for="Peso">Seu Peso? </label>
 <input type="text" name="Peso" pattern="[0-9]{3},[0-9]{2}" required > Kg.</p>
<font> <label for="racaEs">Qual a sua Raça/Espécie? </label>
<input type="text" name="Raca" required/></font>
</fieldset>
      
<fieldset><legend><h3>Seu Dono:</h3></legend> 
      
      <font><label for="nCliente">Nome: </label>
      <input type="text" name="nomecliente" autofocus required/></font>
      
      <p><font><label for="Tel">Telefone: </label>
      <input type="text" pattern="[0-9]{10}"/></font></p>
      
     <p> <font><label for="email">E-mail do seu dono: </label>
      <input type="email" name="emaildono"/></font></p>
         
</fieldset>
            
<fieldset><legend><h3>Dados da Consulta: </h3> </legend>
<p>Atenção! Apenas agendamentos dentro do prazo de 6 meses.</p>
    <font> Data da Consulta:</font>
<input type="date" min="2013-02-22" max="2013-06-30" > 
    
<font><label>Hora da Consulta: </label><input type="time" min="08:00" max="18:00"></font>
</fieldset>

         
    <p><input type="submit" nome='btnEnviar' value='Marcar Consulta'/>
    
    <input type="reset" nome='btnCancelar' value='Cacelar'/></p>
 </form>
 </div>
      
   
    </body>
</html>
