<?php
$host="locallhost";
$db="csrf_demo";
$pass="";
$user="root";
$chrs="utf8mb4";

$attr = "mysql:host=$host;dbname=$db;charset=$chrs";

$opts=
[
    PDO::ATTR_DEFAULT_FETCH_MODE=>FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>FALSE
];

try{
    $pdo=new pdo($attr,$user,$pass,$opts);
}
catch(PDOException $e){
    throw new PDOException($e->getMessage());
}
?>
