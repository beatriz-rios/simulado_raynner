<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de pessoa física</h1>
       <ul>
        <li><a href="http://localhost/simulado_raynner/php/cadpes.php">Cadastro de pessoa física</a></li>
        <li><a href="http://localhost/simulado_raynner/php/cadif.php">Cadastro de região</a></li>
        <li><a href="http://localhost/simulado_raynner/php/consulta.php">Registro</a></li>
        <li><a href="http://localhost/simulado_raynner/php/menu.php">Menu</a></li>
    </ul>
    <form method="post">


    <label>Nome da Pessoa:</label>
    <input type="text" name="pes"  ><br><br>

    <label>CPF:</label>
    <input type="text" name="cpf" ><br><br>

    <label>Endereço:</label>
    <input type="text" name="endr" ><br><br>

    <label>CEP:</label>
    <input type="text" name="cep" ><br><br>

    <label>ID do estado em reside:</label>
    <input type="text" name="ids" ><br><br>

    <input type="submit" value="cadastrar">

    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pes = $_POST['pes'];
        $cpf = $_POST['cpf'];
        $endr = $_POST['endr'];
        $cep = $_POST['cep'];
        $ids = $_POST['ids'];



    $servername = 'localhost';
    $username = "root";
    $password = "";
    $database = "pessoafisica";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo "<div message-error>falha na conexão: " . mysqli_connect_error() . "</div";
    }

     $sql = "INSERT INTO pessoa (
     nome,
     cpf,
     endr,
     cep, 
     estad_cidd_idestad_cidd
     ) VALUES (
        '$pes',
        '$cpf', 
        '$endr', 
        '$cep', 
        '$ids'
        );";


if(mysqli_query($conn, $sql)){
echo"<div message-sucess> Cadastro realizado com sucesso!</div>";
}else{
    echo"<div message-error>" . $sql . mysqli_error($conn) . "</div>";
}

mysqli_close($conn);
    }
    
    
    ?>
</body>
</html>