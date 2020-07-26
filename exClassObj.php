<p>EXEMPLO DE CRIAÇÃO DE CLASSE</p>
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
<P>EXEMPLO DE CRIAÇÃO DE ATRIBUTOS PRIVADO</p>
<p>COMPONENTES DO COMPUTADOR</p>
<form method="POST">
    Tipo de processador
    <input type="text" name="processador">
    <br>
    Tamanho do Disco Rigido 
    <input type="text" name="DiscoRigido">
    <br>
    Tamanho da mémoria RAM
    <input type="text" name="memoria">
    <br>
    Tipo de entrada
    <input type="text" name="entrada">
    <br>
    <input type="submit" value="inserir">
</form>
<?php
ini_set('display_errors', false);
$processador=$_POST['processador'];
$DiscoRigido=$_POST['DiscoRigido'];
$memoria=$_POST['memoria'];
$entrada=$_POST['entrada'];
//Criando atributos privados

class Computador
{
	//Atributos privados do computador
	private $processador;
	private $DiscoRigido;
	private $memoria;
	private $entrada;

	/*
	Criando funções para esses atributos com get e set.
	A função get vai pegar o valor do atributo
	A função set vai definir o valor do atributo 
    */

	//Criar um método para funçao do processador para pegar o valor
	public function getProcessador()
	{
		// Retornar referenciando o atributo processador
		return $this->processador;
	}
	//Criar um método para função do processador para definir o valor
	public function setProcessador($processador) 
    /*
	Obs. O atributo "$processador" é usado como parametro para ser definido o valor, não é preciso ser retornado pois o set esta definindo, se precisar chamar usa-se o return
	*/
	{
	    $this->processador=$processador;
	}
	
	//Método para função DiscoRigido
	public function getDiscoRigido()
	{
		return $this->DiscoRigido;
	}
	public function setDiscoRigido($DiscoRigido)
	{
		$this->DiscoRigido=$DiscoRigido;
	}
    
    //Método para função memório
    public function getMemoria()
    {
    	return $this->memoria;
    }
    public function setMemoria($memoria)
    {
    	$this->memoria=$memoria;
    }

    //Método para função entrada
    public function getEntrada()
    {
    	return $this->entrada;
    }
    public function setEntrada($entrada)
    {
    	$this->entrada=$entrada;
    } 
    /*
    Criando um método pra exibir todas as informações dos atributos "$processador, $DiscoRigido, $memoria e $entrada".
    Será usado uma array junto com a função get pra pegar as informações.
    */
    public function ExibirInformacao()
    {
    	//Retornar uma array para exibir informações
    	return array(
    		"processador"=>$this->getProcessador(),
    		"DiscoRigido"=>$this->getDiscoRigido(),
    		"memoria"=>$this->getMemoria(),
    		"entrada"=>$this->getEntrada(),
    	);
    }

}
//Criando um objeto para chamar a classe "Computador"
$tecnologia=new Computador();
//Instanciando e definindo os valores de cada atributo
/*
$tecnologia->setProcessador("intel Core i7");
$tecnologia->setDiscoRigido("500 GB");
$tecnologia->setMemoria("4 GB");
$tecnologia->setEntrada("USB, HDMI");
*/
$tecnologia->setProcessador($processador);
$tecnologia->setDiscoRigido($DiscoRigido);
$tecnologia->setMemoria($memoria);
$tecnologia->setEntrada($entrada);

//Visualizar na tela só as innformações sem array
//echo $tecnologia->getProcessador().", " .$tecnologia->getDiscoRigido().", " .$tecnologia->getMemoria().", " .$tecnologia->getEntrada();

//Visualizar na tela as informações com array
echo "Infomaççoes dos componentes do computador";
echo "<br>";
//echo var_dump($tecnologia->ExibirInformacao());
print_r($tecnologia->ExibirInformacao());
?>