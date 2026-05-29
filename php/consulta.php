<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>REGISTRO DE PESSOA FÍSICA</h1>
    <ul>
        <li><a href="http://localhost/simulado_raynner/php/cadpes.php">Cadastro de pessoa física</a></li>
        <li><a href="http://localhost/simulado_raynner/php/cadif.php">Cadastro de região</a></li>
        <li><a href="http://localhost/simulado_raynner/php/consulta.php">Registro</a></li>
        <li><a href="http://localhost/simulado_raynner/php/menu.php">Menu</a></li>
    </ul>

    <?php

    $sql = "SELECT 
    *
FROM
    pessoafisica.pessoa
inner join estad_cidd on pessoa.estad_cidd_idestad_cidd = estad_cidd.idestad_cidd
";


    $servername = 'localhost';
    $username = "root";
    $password = "";
    $database = "pessoafisica";
    $conn = mysqli_connect($servername, $username, $password, $database);

    echo "<table border = '2'>";
    echo "<tr> 
    <th>ID</th> 
    <th>Nome</th>
    <th>CPF</th>
    <th>Endereço</th>
    <th>CEP</th>
    <th>Estado</th>
    <th>Cidade</th>
    <th>Ações</th>
    </tr>";

    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['idpessoa'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['cpf'] . "</td>";
            echo "<td>" . $row['endr'] . "</td>";
            echo "<td>" . $row['cep'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            echo "<td>" . $row['cidade'] . "</td>";
            echo "<td> <a href='/simulado_raynner/php/editar.php?id=" . $row['idpessoa'] . "'>Editar</a> |
            <a href ='/simulado_raynner/php/excluir.php?id=" . $row['idpessoa'] . "'>Excluir</a></td>";

            echo "</tr>";
        }
         echo "</table colspan='4'>";
    }
   


    ?>
</body>

</html>