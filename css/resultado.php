<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
if ($_POST["operador"] == "suma") {
print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);

} elseif ($_POST["operador"] == "resta") {
print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);

} elseif ($_POST["operador"] == "multiplicacion") {
print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);

} elseif ($_POST["operador"] == "division") {
print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
}
} else {
print("Ingrese un valor");
}

?>
<br><br>

<div><br><button class="r"><a href="..//calculadora.html">Volver</a></button>  </div>
</body>

