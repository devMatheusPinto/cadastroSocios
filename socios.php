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
                    <td>NIP:</td>
                    <td><input type="text" name="nip" required placeholder="NIP. Ex.: 99.9999.99" id="nip" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Inscrição:</td>
                    <td><input type="text" name="inscricao" required placeholder="Inscricao" id="inscricao" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Data de ingresso:</td>
                    <td><input type="text" name="data" required placeholder="Data. Ex.: 01/01/2023" id="data" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Posto:</td>
                    <td><input type="text" name="posto" required placeholder="Posto. Ex.: CMG, CF, CC ..." id="posto" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Número no clube:</td>
                    <td><input type="text" name="no_clube" required placeholder="Número de cadastro no clube" id="no_clube" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Número no Cobana:</td>
                    <td><input type="text" name="no_cobana" required placeholder="Número de cadastro no Cobana" id="no_cobana" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Situação:</td>
                    <td><input type="text" name="ativa" required placeholder="Ativa ou Reserva" id="ativa" class="txt" /></td>
                </tr>
                <tr>    
                    <td>OM do Militar:</td>
                    <td><input type="text" name="om" required placeholder="OM do Militar" id="om" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Endereço do militar:</td>
                    <td><input type="text" name="endereco" required placeholder="Digite aqui o endereço do militar" id="endereco" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Naturalidade:</td>
                    <td><input type="text" name="naturalidade" required placeholder="Digite aqui a naturalidade do militar" id="naturalidade" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Data de nascimento:</td>
                    <td><input type="text" name="datanasc" required placeholder="Digite aqui a data de nascimento do militar. Ex.: 31/01/1995" id="datanasc" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Estado civil:</td>
                    <td><input type="text" name="estadocivil" required placeholder="Diite aqui o estado civil do militar" id="estadocivil" class="txt" /></td>
                </tr>
            	<tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Digite aqui o nome completo do militar" id="nome" class="txt" /></td>
                </tr>
                <tr>    
                    <td>E-mail:</td>
                    <td><input type="text" name="email" required placeholder="Diite aqui o e-mail do militar" id="email" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" required placeholder="Digite aqui o telefone de contato do militar" id="telefone" class="txt" /></td>
                </tr>
             
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="go" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>