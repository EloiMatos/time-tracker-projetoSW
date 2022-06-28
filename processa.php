<?php
session_start();
require_once("banco.php");

$acao = $_GET["acao"];

if ($acao == "adicionar") {
    $description = $_POST["description"];
    $startHours = $_POST["startHours"];
    $endHours =$_POST["endHours"];
    $date = $_POST["date"];
    $type = $_POST["type"];
 

    $sql = "INSERT INTO horas (id, description, startHours, endHours, date, type) VALUES (NULL, '$description', '$startHours', '$endHours', '$date', '$type')";
    $q = mysqli_query($conn, $sql);
    if ($q){
        
        header("Location: funcionario.php");
}
}