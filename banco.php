<?php
const HOST = "localhost";
const USER = "root";
const SENHA = "";
const BANCO = "time_tracker";

try{
    $conn = mysqli_connect(HOST, USER, SENHA, BANCO);
}catch(Exception $e){
    echo "Erro: ". mysqli_connect_error();
    die();
}

if(mysqli_connect_error()){
    echo "Erro: ". mysqli_connect_error();
}
if(!$conn){
    die();
}
   