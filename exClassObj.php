<form method="POST">
	<p>Digite os produtos</p>
<input type="text" name="Produto1">
<input type="text" name="Produto2">
<input type="text" name="Produto3">
<input type="submit" value="inserir">
</form>
<?php 
//Um exemplo prático de classe e objeto
ini_set('display_errors',false);
$Produto1=$_POST['Produto1'];
$Produto2=$_POST['Produto2'];
$Produto3=$_POST['Produto3'];

//Criando uma classe

class Supermercado
{
	//Criando alguns atributos
	public $Produto1;
	public $Produto2;
	public $Produto3;

	//Criar um método publico de uma função dentro da classe pra compra de produtos
	public function comprar()
	{
		//Retornar referenciando os produtos
		return "Os produtoos da compra sao: ". $this->Produto1.", ".$this->Produto2." e ".$this->Produto3;
		//return $this->Produto1. $this->Produto2. $this->Produto3;
	}

}
//Criar um obejeto para chamar a classe Supermecado
$Compras = new Supermercado();

//Referenciar os atributos que esta dentro da classe Supermercado
$Compras->Produto1=$Produto1;
$Compras->Produto2=$Produto2;
$Compras->Produto3=$Produto3;

//Informar e referenciar os atributos que serão comprados da função comprar
echo $Compras->comprar();
?>