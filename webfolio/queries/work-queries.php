<?php
include "libs/Database.php";
$database = new Database();
$connect = $database->getConnect();
$result = $connect->prepare("SELECT COUNT(DISTINCT artName) FROM art");
$result->execute();
$sumwork = $result->fetch();
$result = $connect->prepare("SELECT artType, COUNT(*) as count FROM art GROUP BY artType;");
$result->execute();
$types = $result->fetchAll();
$result = $connect->prepare("SELECT artPath, artId, displayType FROM art WHERE artType LIKE ? ORDER BY `art`.`artId` desc");
$artType = '';
if (isset($_GET['type'])){
	$artType = $_GET['type'];
}
$result->execute(['%'.$artType.'%']);
$pictures = $result->fetchAll();
