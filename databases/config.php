<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbHost = 'localhost';
$dbName = 'Actmanual';
$dbUser = 'root';
$dbPass = 'root';
try{
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exeption $e){
    echo $e->getMessage();
}
