<?php
include "libs/Database.php";
$database = new Database();
$connect = $database->getConnect();
$result = $connect->prepare("SELECT COUNT(DISTINCT artName) FROM art");
$result->execute();
$sumwork = $result->fetch();
$resultat = $connect->prepare("SELECT * FROM art WHERE artId = ?");
$IdSlct = '';
if (isset($_GET['id'])){
	$IdSlct = $_GET['id'];
}
$resultat->execute([$_GET['id']]);
$image = $resultat->fetch();
$resultat = $connect->prepare("SELECT artName FROM art WHERE artId = $IdSlct");
$name = '';
if (isset($_GET['artName'])){
	$name = $_GET['artName'];
}
$resultat->execute(['%'.$name.'%']);
$artname = $resultat->fetch();
$resultat = $connect->prepare("WITH duplicates AS (
                               select    artName
                               from      art
                               group by  artName
                               having    count(*) > 1
                            )
                            SELECT    a.artName, a.artId, artPath, artDisplay
                            FROM      art   a
                            JOIN      duplicates b ON (a.artName = b.artName)");
$resultat->execute();
$allDupes = $resultat->fetchAll();
























// foreach ($allDupes as $allDupe) {
//     $allDupe['artName'];
//         $allDupe['artId'];
//         if ($artname['artName'] == $allDupe['artName'])
//         {
//           echo "found ";
//         }
//         else
//         {
//           echo "not found ";
//         }
// }

// var_dump($allDupes);
// var_dump($allDupe['artName']);
// var_dump($allDupe['artId']);
// var_dump($IdSlct);

// var_dump($allDupe);
// var_dump($allDupes['artName']);
// var_dump($artname['artName']);
// var_dump($rows);

// $arr = array(1, 2, 3, 4, 5);
// $list = implode(",", $arr);
//
// var_dump($arr);
// var_dump($list);
//
// if (in_array("2", $arr))
// {
//   echo "found ";
// }
// else
// {
//   echo "not found ";
// }

//liste chaque doublons de artname
// WITH duplicates AS (
//    select    artName
//    from      art
//    group by  artName
//    having    count(*) > 1
// )
// SELECT    a.*
// FROM      art   a
// JOIN      duplicates b ON (a.artName = b.artName)
