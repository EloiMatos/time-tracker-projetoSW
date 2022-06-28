<?php
session_start();
require_once("banco.php");

$method = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
if ($method === "POST")
{
	$description = $_POST["description"];
    $startHours = $_POST["startHours"];
    $endHours = $_POST["endHours"];
    $date = $_POST["date"];
    $type = $_POST["type"];
    
    $stmt = $db->prepare("INSERT INTO horas (id, description, startHours, endHours, date, type) VALUES(NULL, :description, :startHours, :endHours, :date, :type)");
	$stmt->bindParam(':description',  $description);
	$stmt->bindParam(':startHours', $startHours);
	$stmt->bindParam(':endHours', $endHours);
	$stmt->bindParam(':date', $date);
    $stmt->bindParam(':type', $type);
	$stmt->execute();
	
	header("Location: funcionario.php");
}
?>