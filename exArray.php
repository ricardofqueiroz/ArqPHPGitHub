<p>Verificar se um nome existe dentro de uma array</p>
<form action="exArray.php" method="POST">
Digite um nome <input type="text" name="pessoa">
<input type="submit">
</form>
<?php
/*Ocultar erro para o usuário*/
/*
Para ocultar, coloque o nº zero ou boleano "false".
Para não ocultar, coloque o nº um ou boleano "true".
*/
ini_set('display_errors',false);
//===================================================================//
//Construindo duas arrays
$nomes=array('Alex', 'Beatriz', 'Cassia', 'Denis', 'Evandro', 'Fabio');
$nomes2=array('Gustavo', 'Henrique', 'Igor', 'João', 'Luan', 'Mateus');

//if(isset($_POST["pessoa"])); -> Informa se a variável foi definida
$pessoa=$_POST["pessoa"];
//$contar=0;

//if (in_array($_POST['pessoa'], $nomes))
if (in_array($pessoa, $nomes))
{
echo "Pertence a 1º lista de nomes";
}
//else if (in_array($_POST['pessoa'], $nomes2))
else if (in_array($pessoa, $nomes2))
{
echo "Pertence a 2º lista de nomes";
}
else //if (is_null($pessoa)) - Sintaxe que informa se a variável de entrada esta vazia
{
echo "Esse nome não pertence a nenhuma lista ou foi digitado nada"; echo "<br>";
echo "Digite novamente";
}
//echo "<br>";
//var_dump($_POST);
?>
