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
$nome = $_POST['nome'];
$email = $_POST['email'];

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
          alert('Sócio cadastrado com sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=socios.php'>
";
?>

</body>
</html>