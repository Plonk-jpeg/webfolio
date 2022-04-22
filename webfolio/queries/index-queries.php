<?php
include "libs/Database.php";
include "libs/HtmlSpecialChars.php";
$database = new Database();
$connect = $database->getConnect();
$result = $connect->prepare("SELECT COUNT(DISTINCT artName) FROM art");
$result->execute();
$sumwork = $result->fetch();
