<p>VERIFICANDO FUSO HORÁRIO</p>
<form action="VerifDataHoras2.php" method="POST">
	<input type="text" name="Fuso">
		<input type="submit" name="inserir">
</form>
<?php
ini_set('display_errors',false);
$Fuso=$_POST['Fuso'];

//Mostrar hora exata local de acordo com o fuso horário
//Criando uma variável para o fuso horário onde esta
$SeuFuso="America/Sao_Paulo";
date_default_timezone_set($Fuso);

//Verificando se esta na sua região
if ($Fuso == $SeuFuso)
{
	echo "Voce esta na sua regiao.";
	echo "<br>";
	echo "Hora local:", date("h:i a");
}
else if($Fuso != $SeuFuso)
{
	echo "Nao esta na sua regiao.";
	echo "<br>";
	echo "Hora local da regiao: $Fuso: " , date("H:i"); 
}
?>