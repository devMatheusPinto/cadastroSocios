<?php
require ("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Funcionários</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
</head>
<body>
	<div id="cadastro">
    	<form name="signup" method="post" action="cadastro.php">
    		<table id="tab_cadastro">
            	<tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Nome do funcionário" id="nome" class="txt" /></td>
                </tr>
                <tr>    
                    <td>E-mail:</td>
                    <td><input type="text" name="email" required placeholder="E-mail do Funcionário" id="email" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Setor:</td>
                    <td><input type="text" name="setor" required placeholder="Setor do Funcionário" id="setor" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Cargo:</td>
                    <td><input type="text" name="cargo" required placeholder="Cargo do Funcionário" id="cargo" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Foto:</td>
                    <td><input type="text" name="foto" required placeholder="Foto do Funcionário" id="foto" class="txt" /></td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="go" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>