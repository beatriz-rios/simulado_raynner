EDITAR


<?php
$db = mysqli_connect('localhost', 'root', '', 'gameplay');
$id = $_POST['id'];

$resulta = mysqli_query($db, "SELECT * FROM game WHERE idgame = $id");

$prod = mysqli_fetch_assoc($resulta);

if($_POST){
    $platf = $_POST['plataforma'];
    $preco = $_POST['preco'];

    mysqli_query($db, "UPDATE game SET plataforma='$platf, preco=$preco WHERE idgame = $id");
    header('location:gestao.php');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

<input type="text" name="plataforma" value="<?= $prod['plataforma'];?>">
<input type="number" name="preco" value="<?=  $prod['preco'];?>">

    </form>
</body>
</html>


ECLUIR

<?php  $db = mysqli_connect('localhost', 'root', '', 'gameplay');
$id = $_GET['id'];

mysqli_query($db, "DELETE FROM mov WHERE game_idgame = $id  ");
mysqli_query($db, "DELETE FROM game WHERE idgame = $id");
header("location: gestao.php");

?>
