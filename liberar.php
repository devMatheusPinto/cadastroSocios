<? error_reporting(E_ALL);  ?>
<? 
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
              //enviadata.php
             $dataLocal = date('d/m/Y');
             $data = time();  
			 $hora = date('H:i:s');
             $timestamp = mktime(date("H")-3, date("i"), 0);
             $data = gmdate("H:i:s", $timestamp);

session_start();
if(!isset($_SESSION["usuarioNome"]) and !isset($_SESSION["usuarioNome"]))
{
	header("Location:index.php");exit;
	}else {
	echo "Usuario: ". $_SESSION['usuarioNome'];
	}
?> 
<br> <a href="sair.php">Sair</a>

<HTML>
<HEAD>
 <TITLE>LIBERACAO</TITLE>
     <!-- Bootstrap -->
  
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery-ui.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
      <style type="text/css">
     .teste {
	 font-size: 9px;
}
    </style>
</HEAD>
<BODY>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th scope="col"><ul class="nav nav-tabs">
   <li role="presentation" class="active"><a href="index.php">INICIO</a></li>
  <li role="presentation"><a href="cadastro_pessoas.php">CADASTRAR</a></li>
  <li role="presentation"><a href="entrada.php">LIBERAR ENTRADA</a></li>
  <li role="presentation"><a href="s_sair.php">LIBERAR SAIDA</a></li>
  <li role="presentation"><a href="r_entrada.php">RELAÇÃO DE ENTRADAS</a></li>
 <!--  <li role="presentation"><a href="r_ent_sai.php">ENTRADA/SAIDA</a></li> -->
  <li role="presentation"><a href="pesquisa.php">PESQUISA CADASTROS</a></li> 
</ul>&nbsp;</th>
  </tr>

  <tr>
    <th scope="col"><?php
             //enviadata.php
             $dataLocal = date('d/m/Y');
             $data = time();  
			 $hora = date('H:i:s');
             $timestamp = mktime(date("H")-3, date("i"), 0);
             $data = gmdate("H:i:s", $timestamp);



             //$dtransf tranforma a $data que é dd/mm/yyyy em yyyy-mm-dd que é o formato aceito em MySQL.
             //$dtransf = explode ("/", $data);
             //$dtransf = "$dtransf[2]-$dtransf[1]-$dtransf[0]";
        ?></th>
  </tr>
</table>
<p>
  <?php

// variáveis para conexão em LOCALHOST
  $conexao = mysqli_connect('localhost', 'root', '', 'bancodedados');
 
 //echo $conexao;
 
   if (mysqli_connect_errno()){
      echo "falha ao conectar: ". mysqli_connect_error();
   die();
   }
 ?>
  
  <?php
  
  $matricula=$_POST['matricula'];
  $tipo=$_POST['tipo'];
  $situacao=$_POST['situacao'];  
  $nome=$_POST['nome'];
  $identidade=$_POST['identidade'];
  $placa=$_POST['placa'];
  $veiculo=$_POST['veiculo'];
  $cidade=$_POST['cidade'];
  $uf=$_POST['uf'];
  $empresa=$_POST['empresa'];
 // $id=$_POST['matricula'];
  
  
 
//Query da inserção
$sql_insert = "INSERT INTO tb_entrada(matricula,tipo,situacao,nome,identidade,placa,veiculo,cidade,uf,empresa,dataentrada,horaentrada)VALUES ('$matricula', '$tipo', '$situacao', '$nome', '$identidade', '$placa', '$veiculo', '$cidade', '$uf', '$empresa', '$dataLocal', '$data')";

  //Query para buscar a situação
$sql_busca = "SELECT situacao FROM tb_cadastro WHERE nome = '$nome'";
  //Executandio a query de busca
  $resultado_busca = mysqli_query($conexao, $sql_busca);
  //Iniciando um loop para ver o resultado
 while($row = mysqli_fetch_array($resultado_busca)){
   //Se stiaucao for true
  if ($row['situacao'] == 1) {
 //executando a inserção -> ONDE INSERE FOI MUDADA PRA CÁ, DENTRO D0 LOOP E DA VERIFICAÇAO SE A SITUAÇÃO É = 1
	$resultado_insert = mysqli_query($conexao, $sql_insert);
   
  echo '<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>ACESSO LIBERADO!</strong> Seja bem vindo ao Pólo Têxtil de Inhumas.
  </div>';
   echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=entrada.php'>";
  }
 //Se não for true
  else{
 
  echo '<div class="alert alert-danger fade in">
        <strong>ACESSO PROIBIDO!</strong> Por favor retorne e entre em contato com a &quot;DIRETORIA&quot; ou &quot;CENTRAL DE MONITORAMENTO&quot;. Obrigado!
  </div>';
  echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=entrada.php'>";
 } 
 }
?>
  
  
  
  

</BODY>
</HTML>