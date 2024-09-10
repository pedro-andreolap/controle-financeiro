<?php
$servername = "br8s0mv4zeqc0yjclxn9-mysql.services.clever-cloud.com";
$username = "ugq5bm5jdoagt0fb";
$password = "vSn4HFpW27LxRekg3wtY";
$dbname = "br8s0mv4zeqc0yjclxn9";
$port = "3306";

$conn = new mysqli($servername, $username, $password, $dbname ,$port);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}