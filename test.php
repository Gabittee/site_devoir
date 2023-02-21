<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=emu;charset=utf8", "root", "");
} catch (Exception $e) {
    die("Erreur : ".$e -> getMessage());
}

$sql = 'SELECT * FROM jeux where id <= 10';
$stmt = $bdd->prepare($sql);
$stmt->execute();

$donnees = $stmt;

$json = array();
while($row = $donnees->fetch()){

    $obj = new \stdClass();
    $obj->Name = $row["Name"];
    $obj->Console = $row["Console"];
    $json[] = $obj;
}
for($i = 0; $i < 10; ++$i) {
    echo $json[$i]->Name . "<br>";
}


// echo json_encode($json);
