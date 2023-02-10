<? 
 // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
           
             $dataLocal = date('d/m/Y');
             $hora = date('H,i');
             echo $dataLocal;
       
   session_start();
if(!isset($_SESSION["usuarioNome"]) and !isset($_SESSION["usuarioNome"]))
{
	header("Location:index.php");exit;
	}else {
	echo "Usuario: ". $_SESSION['usuarioNome'];
	}
	
?> 
<br> <a href="sair.php">Sair</a>  <br> <br>

<html>
<head>
     <title>Entrada visitante</title>
     

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    .teste {
	font-size: 9px;
}
    </style>
  <script type="text/javascript" src="jquery-1.3.2.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $("input[name='matricula']").blur(function(){
    
	    var $id = $("input[name='id']");
	    var $tipo = $("input[name='tipo']");
      var $identidade = $("input[name='identidade']");
	    var $nome = $("input[name='nome']");
      var $situacao = $("input[name='situacao']");
      var $placa = $("input[name='placa']");
      var $veiculo = $("input[name='veiculo']");
      var $cidade = $("input[name='cidade']");
      var $uf = $("input[name='uf']");
      var $empresa = $("input[name='empresa']");
	  

	    $id.val('Carregando...');
      $identidade.val('Carregando...');
      $tipo.val('Carregando...');
      $nome.val('Carregando...');
	    $situacao.val('Carregando...');
	    $placa.val('Carregando...');
      $veiculo.val('Carregando...');
      $cidade.val('Carregando...');
      $uf.val('Carregando...');	  
      $empresa.val('Carregando...');	  
      
	  
        $.getJSON(
          'function.php',
          { matricula: $( this ).val() },
          function( json )
          {
            $id.val( json.id );
			      $identidade.val( json.identidade );
			      $tipo.val( json.tipo );
            $nome.val( json.nome );
            $situacao.val( json.situacao );
            $placa.val( json.placa );
            $veiculo.val( json.veiculo );
            $cidade.val( json.cidade );
            $uf.val( json.uf );			
			      $empresa.val( json.empresa );
		}
        );
    });
  });
  </script>
</head>
<body>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
  <th scope="col"><ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php">INICIO</a></li>
  <li role="presentation"><a href="cadastro_pessoas.php">CADASTRAR SÓCIO</a></li>
  <li role="presentation"><a href="entrada.php">ENTRADA VISITANTE</a></li>
  <li role="presentation"><a href="s_sair.php">SAÍDA VISITANTE</a></li>
  <li role="presentation"><a href="r_entrada.php">RELAÇÃO DE ENTRADAS</a></li>
  <!--  <li role="presentation"><a href="r_ent_sai.php">ENTRADA/SAIDA</a></li> -->
  <li role="presentation"><a href="pesquisa.php">PESQUISA CADASTROS</a></li> 
  </ul>&nbsp;</th>
  </tr>
</table>

<div class='container'>
<fieldset>
  <legend>
			<h1>Registrar entrada</h1>
  </legend>

  <form class="form-inline" name="entrar" method="post" action="liberar.php">
    <table width="899" border="0">
<!--<tr>
      <td>
      <div class="form-group">
			      <label for="cpf">CPF:</label>
			      <input type="cpf" class="form-control" id="cpf" maxlength="11" name="cpf" placeholder="Informe o CPF">
	    </div>
      </td>
</tr>-->
<tr>
      <td>
      <div class="form-group">
			      <label for="nome">Nome:</label>
			      <input type="nome" class="form-control" id="nome" maxlength="30" name="nome" placeholder="Informe o nome completo">
	    </div>
      </td>
</tr>
<tr>
      <td>
      <div class="form-group">
			      <label for="tel">Telefone:</label>
			      <input type="tel" class="form-control" id="telefone" maxlength="30" name="tel" placeholder="Informe o telefone">
	    </div>
      </td>
</tr>
<tr>
      <td>
      <div class="form-group">
			      <label for="vis">Visitado:</label>
			      <input type="vis" class="form-control" id="vis" maxlength="30" name="visitado" placeholder="Informe o nome completo">
	    </div>
      </td>
</tr>

      <td>
        <td>&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="left"><input type="submit" value="LIBERAR ACESSO" /></td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </td>
      
    </table>
    <label>
      </label>
  </form>
  

</body>
</html>
