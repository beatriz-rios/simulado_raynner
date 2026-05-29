<?php
$db = mysqli_connect('localhost', 'root', '','passoafis');

$id = $_GET['id'];

mysqli_query($db, "DELETE FROM estado WHERE idestado= $id ");
mysqli_query($db, "DELETE FROM pessoa WHERE idpessoa = $id");
header('location:consulta.php');



?>