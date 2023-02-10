<?
//teste

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
<br> <a href="sair.php">Sair</a>


<html>
<head>
<title>Cadastro de Sócios</title>

     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <style type="text/css">
    .teste {
	font-size: 9px;
}
    </style>
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
				<h1>Formulário de Cadastro</h1>
			</legend>
			
		  <form action="action_foto.php" method="post" id='form-contato' enctype='multipart/form-data'>
	  			<div class="row">
					<label for="nome">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>

				<div class="form-group">
					<label for="nip">NIP:</label>
        			<input type="nip" class="form-control" id="nip" maxlength="8" name="nip" placeholder="Informe o NIP">
            	</div>

			    <div class="form-group">
			      <label for="nome">Nome:</label>
			      <input type="nome" class="form-control" id="nome" maxlength="30" name="nome" placeholder="Informe o nome completo">
	    		</div>

			    <div class="form-group">
			      <label for="identidade">RG:</label>
			      <input type="identidade" class="form-control" id="identidade" maxlength="7" name="identidade" placeholder="Informe o RG">
	    		</div>

				<div class="form-group">
			      <label for="cpf">CPF:</label>
			      <input type="cpf" class="form-control" id="cpf" maxlength="11" name="cpf" placeholder="Informe o RG">
	    		</div>

				<div class="form-group">
			      <label for="posto">Posto:</label>
                  <!--<input type="posto" class="form-control" id="posto" name="posto" placeholder="Informe o posto do militar">-->
				  	<select id="posto" name="posto">
   			 		<option value="aealte">Almirante de Esquadra</option>
    				<option value="valte">Vice-Almirante</option>
    				<option value="calte">Contra-Almirante</option>
    				<option value="cmg">Capitão de Mar-e-Guerra</option>
                    <option value="cf">Capitão de Fragata</option>
                    <option value="cc">Capitão de Corveta</option>
                    <option value="ct">Capitão-Tenente</option>
                    <option value="1t">Primeiro_Tenente</option>
                    <option value="2t">Segundo-Tenente</option>
                    <option value="gm">Guarda-Marinha</option>
  					</select>
				</div>

				<div class="form-group">
			      <label for="qd">Quadro:</label>
                  <!--<input type="qd" class="form-control" id="qd" name="qd" placeholder="Informe o quadro do militar">-->
				  
                    
                    <select id="qd" name="quadro">
                    <option value="1">CA</option>
                    <option value="2">QC-CA</option>
                    <option value="3">FN</option>
                    <option value="4">QC-FN</option>
                    <option value="5">IM</option>
                    <option value="6">QC-IM</option>
                    <option value="7">CEM</option>
                    <option value="8">Md</option>
                    <option value="9">CD</option>
                    <option value="10">S</option>
                    <option value="11">T</option>
                    <option value="12">CN</option>
					<option value="13">AA</option>
					<option value="14">AFN</option>
					</select>
                    
	    		</div>

				<div class="form-group">
			      <label for="sit">Situação:</label>
				  	<select id="sit" name="situacao">
                    <option value="1">Ativa</option>
                    <option value="2">Ref</option>
                    <option value="3">RM1</option>
                    <option value="4">RM2</option>
                    <option value="4">RM3</option>
					</select>

                  <!--<input type="sit" class="form-control" id="sit" name="sit" placeholder="Ex.: Ativa, REF, RM1, RM2 ou RM3">-->
	    		</div>


				
			
            <div>
			    <div class="form-group">
			     
			      <input type="datacadastro" name="datacadastro" id="datacadastro" disabled value=$dataLocal size="15" style="display:none">
		
		    </div>			
                <div class="form-group">
                        <label for="acesso">Sócio ARES ou Clube Naval:  </label>
			            <label class="radio-inline"> 
						<input type="radio" name="situacao" value="1">
						<span class="label label-success">ARES</span> 
	                   </label>
                 	   <label class="radio-inline"> 
						<input type="radio" name="situacao" value="2">
						<span class="label label-danger">Clube Naval</span> 
	                   </label>

               </div>

	    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id='botao'> 
			      Gravar
		    </button>
			    <a href='cadastro_pessoas.php' class="btn btn-danger">Cancelar</a>
		  </form>
	 </fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</div></body>
</head>

