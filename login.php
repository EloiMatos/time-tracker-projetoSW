<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acesso ao Time Tracker</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<style>
		body{
			background-color:whitesmoke;
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.form{
			display: flex;
			justify-self: space-between;
			padding: 12px 0;
		}
		.card{
			box-shadow: 1px 1px 5px gray;
			padding: 30px;
			border-radius: 6px;
			margin-right: 20px;
			color: white;
			background-color: black;
			font-weight: bold;
			text-align: center;
		}
		.input{
			border-radius: 6px;
		}
		.bt{
			font-weight: bold;
			background-color: white;
			border-radius: 6px;
			padding: 5px 10px;
		}
		button:hover {
		    background-color: lightgray;
	</style>
</head>
<body>
	<form class="form">
		<div class="card">
			<h2 class="title">Funcionário</h2>
			<label class="description">LOGIN:</label>
			<input type="text" class="input" name="email"><br><br>
			<label class="description">SENHA:</label>
			<input type="password" class="input" name="password"><br><br>
			<a href="funcionario.php"><button type="button" class="bt">ENTRAR</button></a>
		</div>
		<div class="card">
			<h2 class="title">Gestor</h2>
			<label class="description">LOGIN:</label>
			<input type="text" class="input" name="email"><br><br>
			<label class="description">SENHA:</label>
			<input type="password" class="input" name="password"><br><br>
			<a href="gestor.php"><button type="button" class="bt">ENTRAR</button></a>
		</div>
	</form>
</body>
</html>