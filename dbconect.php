<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bolsaempleo";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Error al connectarse a la bd". mysqli_connect_error());
}
echo "<script>console.log('Conectado!')</script>";
?>