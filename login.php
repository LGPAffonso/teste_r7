<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form	method="post"
				autocomplete="on"
				action="Model/Login.php"> 

				<label class="formulario" for="email">Email:</label>	
				<input required type="text" name="email" placeholder="Email"/>
				</br></br>

				<label class="formulario" for="senha">Senha:</label>
				<input type="password" name="senha" placeholder="Senha" /><br></br>

				<button type="submit">Enviar</button>
				<button type="reset">LImpar</button>
				
			</form>
            <a href="index.php">Realizar cadastro</a>

    </div>
</body>
</html>