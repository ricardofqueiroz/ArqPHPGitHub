<p>Analizando uma timestamp</p>
<?php
echo "Visualizando data";
echo "<br>";
echo date("d/m/Y, H:i", 1592164063);
echo "<br>";
echo "Visualizando o timestamp:", time();

?>
<p>Definindo datas proximas</p>
<form method="POST">
<input type="text" name="data">
<input type="submit">
</form>
<?php
ini_set('display_errors',false);
$data=$_POST['data'];
//Definir proximidade de datas. Seja dia, semana, mês ou ano.
$tempo=strtotime($data);
//OBS. Ao definir data próxima seja - ou + pode ser em maiuscula ou minuscula
echo "A proximidade de tempo da data e: ", date("d/m/Y", $tempo);
?>

<p>Adicionando periodos</p>
<form method="POST">
<input type="text" name="adicionar">
<input type="submit">
</form>
<?php
$adicionar=$_POST['adicionar'];
//OBS. Ao adlcionar um periodo sempre tem que ser em maiuscula, ex: "P15D", P é perído e podendo ser D=dia, M=mês, A=ano. 

//Criando a classe DateTime
//Criando uma variavel para armazenar a classe DateTime
$DTempo=new DateTime();

//Criando uma variaval para função DateInterval
$periodo=new DateInterval($adicionar);

//Mostrar periodo atual
echo "Periodo atual: ", $DTempo->format("d/m/Y");
echo "<br>";

//Juntando a classe DateTime com a função DateInterval com o método 'add' usando a instancia '->'
$DTempo->add($periodo);
echo "<br>";
echo "Periodo adicionado: ", $DTempo->format("d/m/Y");
?>