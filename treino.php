INDEX
<?php
session_start();

if($_POST){
    $n =$_SESSION['n'];
    $s = $_SESSION['s'];

    if($n == "bia" && $s == "s"){
        $_SESSION['nome'] = $n;
        header("location:menu.php");
    }else{
        echo"erro de usuario ou senha.";
    }
}
?>

MENU

<?php
session_start();
if(!isset($_SESSION['nome'])){
    header("location: index.php");
    exit();
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
  <h1>Bem vindo <?php  echo $_SESSION['nome']?></h1>
</body>
</html>