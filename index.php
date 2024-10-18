<?php
include "Database/abrir_banco.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<div class="">
			<form	method="post"
				autocomplete="on"
				action="Model/grava.php"> 

				<label class="formulario" for="codigo">Código unico:</label> 					
				<input	required type="text" name="codigo"/></br></br>
				<label class="formulario" for="nome">Nome:</label> 					
				<input	required type="text" name="nome"/></br></br>

				<label class="formulario" for="email">Email:</label>	
				<input required type="text" name="email" placeholder="Email"/>
				</br></br>

				<label class="formulario" for="senha">Senha:</label>
				<input type="password" name="senha" placeholder="Senha" /><br></br>

                <!-- o campo de tiulo ficou confuso se devera aparecer na tela ou não,
                 como  o titulo vem da api, não o inclui na tela -->

				<button type="submit">Enviar</button>
				<button type="reset">Limpar</button>
				
			</form>

            <a href="login.php">Login</a>
			
		</div>
</body>
</html>