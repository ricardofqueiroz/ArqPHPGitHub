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

<p>======================================================================================</p>

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
$tecnologia->setProcessador($processador);
$tecnologia->setDiscoRigido($DiscoRigido);
$tecnologia->setMemoria($memoria);
$tecnologia->setEntrada($entrada);

//Visualizar na tela só as innformações sem array
//echo $tecnologia->getProcessador().", " .$tecnologia->getDiscoRigido().", " .$tecnologia->getMemoria().", " .$tecnologia->getEntrada();

//Visualizar na tela as informações com array
echo "Infomaççoes dos componentes do computador";
echo "<br>";
echo var_dump($tecnologia->ExibirInformacao());
//print_r($tecnologia->ExibirInformacao());
?>

<p>======================================================================================</p>

<p>EXEMPLO DE CRIAÇÃO DE CLASSE COM CONDIÇÃO</p>

<form method="POST">
    Digite um número
    <input type="number" name="valor_escolhido">
    <br>
    Inserir número
    <input type="submit" value="inserir">
</form>
<?php
ini_set("display_errors", false);
$valor_escolhido=$_POST['valor_escolhido'];

//Definindo a classe
class ConfereValor
{
    //Definindo um atributo de nº esperado
    private $numEsperado=50;
    
    public function getNumEsperado()
    {
        return $this->numEsperado;
    }
    public function setNumEsperado($numEsperado)
    {
        //Fazer uma comparação, se o nº escolhido for maior ou igual que o esperado é um nº válido, se for menor é invalido 
        if ($numEsperado>=50)
        {
            $this->numEsperado=$numEsperado;
            //echo "Valor maior ou igual a 50";
            //echo "<br>";
            }
                else if($numEsperado<50)
            {
                echo "Numero invalido.";
                echo "<br>";
            }
        }
    }
    
//Criando um objeto
$Verifica=new ConfereValor();
$Verifica->setNumEsperado($valor_escolhido);
echo "O valor esperado tem que ser igual ou maior a 50: ", "Valor digitado foi: ", $valor_escolhido; //$Verifica->getNumEsperado();

/*Nesse exemplo foi testado com o resultado no navegador trazendo o objeto $Verifica junto com o getNumEsperado, que é o correto,
porém foi realizado um teste trazendo apenas o objeto $Verifica com a variável de entrada de usuário $valor_escolhido obtendo um
outro tipo de resultado.*/
?>

<p>======================================================================================</p>

<p>OUTRO EXEMPLO DE CRIAÇÃO DE CLASSE COM CONDIÇÃO</p>

<form method="POST">
    Digito o 1º valor
    <input type="number" name="valor1">
    <br>
    Digite o 2º Valor
    <input type="number" name="valor2">
    <br>
    Inserir os valores para o resultado da multiplicação
    <input type="submit" value="inserir">
</form>

<?php
ini_set("display_errors", false);
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$resul=$valor1*$valor2;

class Resultado
{
    //Criar um atributo de um valor esperado
    private $valorEperado=40;
    
    public function getValorEsperado()
    {
        return $this->valorEperado;
    }
    public function setValorEsperado($valorEsperado)
    {
        if($valorEsperado == 40)
        {
            echo "Valor confere a 40";
            $this->valorEsperado=$valorEsperado;
            echo "<br>";
        }
        else if($valorEsperado != 40)
        {
            echo "Diferente, valor não confere";
            echo "<br>";
        }
        
    } 
}

//Criando um objeto

$Verifica=new Resultado();
$Verifica->setValorEsperado($resul);
echo "O resultado da multiplicação tem que ser igual a: ", $Verifica->getValorEsperado();
?>
