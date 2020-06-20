<p>VERIFICANDO FUSO HORÁRIO</p>
<form action="VerifDataHoras.php" method="POST">
	<input type="text" name="Fuso">
		<input type="submit" name="inserir">
</form>
<?php
ini_set('display_errors',false);
$Fuso=$_POST['Fuso'];
/*
Obs. Ao escolher o fuso horário é preciso colocar sempre em Inglês, colocando 1º o continente e cidade, separados por
/ e caso cidade seja com mais de um nome colocar _ como mostra o ex: "America/Los_Angeles", "Europe/London" 
*/
//Mostrar hora exata local de acordo com o fuso horário
date_default_timezone_set($Fuso);
echo "Local:", $Fuso;
echo "<br>";
echo "Sistema de horario 12 horas";
echo "<br>";
echo "Hora local:", date("h:i a");
echo "<br>";
echo "Sistema de horario 24 horas";
echo "<br>";
echo "Hora local:", date("H:i");


?>