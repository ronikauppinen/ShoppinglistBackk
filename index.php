<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

$db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8','root','root');
$sql = "select * from item; select * from amount";
$query =  $db->query($sql);
$results =  $query->fetchAll(PDO::FETCH_ASSOC);
header('HTTP/1.1 200 OK');
print json_encode($results);