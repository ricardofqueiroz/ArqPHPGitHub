<p>Verificar se um elemento existe dentro de uma array com o uso de in_array</p>
<form action="exArray.php" method="POST">
Digite um nome <input type="text" name="pessoa">
<input type="submit">
</form>
<?php
/*Ocultar erro para o usuário*/
/*
Para ocultar, coloque o nº zero ou boleno "false".
Para não ocultar, coloque o nº um ou boleano "true".
*/
ini_set('display_errors',false);
//===================================================================//
$nomes=array('Alex', 'Beatriz', 'Cassia', 'Denis', 'Evandro', 'Fabio');
$nomes2=array('Gustavo', 'Henrique', 'Igor', 'João', 'Luan', 'Mateus');
//if(isset($_POST["pessoa"]));
$pessoa=$_POST["pessoa"];
//$contar=0;
//if (in_array($_POST['pessoa'], $nomes))
if (in_array($pessoa, $nomes)) //sintaxe
{
echo "Pertence a 1º lista de nomes";
//echo "<script>alert ('Pertence a 1º lista de nomes' )</script>";
}
else if (in_array($pessoa, $nomes2))
{
echo "Pertence a 2º lista de nomes";
//echo "<script>alert ('Pertence a 2º lista de nomes')</script>";
}
else //if (is_null($pessoa))
{
echo "Esse nome não pertence a nenhuma lista ou foi digitado nada"; echo "<br>";
echo "Digite novamente";
//echo "<script>alert ('Esse nome não pertence a nenhuam lista')</script>";
}
//sleep(3);
//echo "<br>";
//var_dump($_POST);
?>