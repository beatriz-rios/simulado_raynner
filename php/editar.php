<?php 
$db = mysqli_connect('localhost', 'root', '', 'pessoafisica');
$id = $_GET["id"];


$resulta = mysqli_query($db, "SELECT * FROM pessoa WHERE idpessoa = $id");

$prod = mysqli_fetch_assoc($resulta);

if ($_POST) {
    $endr = $_POST['endr'];
    $cep = $_POST['cep'];


    mysqli_query($db, "UPDATE pessoa SET endr = '$endr', cep='$cep' WHERE idpessoa= $id");
    header("location:consulta.php");
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body>
    <h1>alteração de dados</h1>
    <form method="post">
    <label>endereço novo:</label>
    <input type="text" name="endr" value=" <?= $prod['endr'] ?>">

    <label>CEP novo:</label>
    <input type="text" name="cep" value=" <?= $prod['cep'] ?>">
<button>salvar alteração</button>
</form>

</body>
</html>


