<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculador em PHP </title>
	</head>
	<body>
	<form method="post" action="calcular.php">
		<label>
			Primeiro Numero:
			<input type="text" name="numero1">
		</label>
		<label>
			Segundo Numero:
			<input type="text" name="numero2">
		</label>
		<br />
		Operação: <br />
		<label>
			<input type="radio" name="operacao" value="somar" checked>
			Somar
		</label>
		<label>
			<input type="radio" name="operacao" value="subtrair">
			Subtrair
		</label>
		<label>
			<input type="radio" name="operacao" value="multiplicar">
			Multiplicar
		</label>
		<label>
			<input type="radio" name="operacao" value="dividir">
			Dividir
		</label>

		<br />
		<input type="submit" value="Calcular">
	</form>


	</body>
</html>