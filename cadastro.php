<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Sócios</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
</head>
<body>

<?php
require ("config.php");
?>

<?php

$nip = $_POST['nip'];
$inscricao = $_POST['inscricao'];
$data = $_POST['data'];
$posto = $_POST['posto'];
$nome = $_POST['nome'];
$no_clube = $_POST['no_clube'];
$no_cobana = $_POST['no_cobana'];
$ativa = $_POST['ativa'];
$om = $_POST['om'];
$endereco = $_POST['endereco'];
$naturalidade = $_POST['naturalidade'];
$datanasc = $_POST['datanasc'];
$estadocivil = $_POST['estadocivil'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO socios (nip, nome, email)
        VALUES (:nip, :nome, :email)
";

$stmt = $conexao->prepare($sql);

$params = array(
    ':nip' => $nip,
    ':nome' => $nome,
    ':email' => $email
);

$stmt->execute($params);

echo "<script>
          alert('Funcionário cadastrado com sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=socios.php'>
";
?>

</body>
</html>