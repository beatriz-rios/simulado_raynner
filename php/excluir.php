<?php 
$db = mysqli_connect('localhost', 'root', '', 'pessoafisica' );
$id = $_GET['id'];

mysqli_query($db, "DELETE FROM pessoa WHERE  estad_cidd_idestad_cidd = $id");
mysqli_query($db, "DELETE FROM estad_cidd WHERE  idestad_cidd = $id");
header("location: consulta.php");

?>