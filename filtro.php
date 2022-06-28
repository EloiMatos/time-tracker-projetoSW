<?php 
require_once("banco.php");

$method = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
if ($method === "GET")
{
	$dateI = $_GET['dateI'];
	$dateF = $_GET['dateF'];
    
    $stmt = $db->prepare("SELECT * FROM 'horas' WHERE :dateI <= date :dateF");
	$stmt->bindParam(':dateI',  $dateI);
	$stmt->bindParam(':dateF',  $dateF);
	$stmt->execute();
	
	header("Location: funcionario.php");
}
?>