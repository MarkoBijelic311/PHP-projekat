<?php

include "korpa.php";
$stanje = new Stanje($izbor,$izbor1,$izbor2);
$stanje->ProveraStanja($izbor,$izbor1,$izbor2);
$sql = "INSERT INTO am(ime,prezime,email,artikal1,artikal2,artikal3)VALUES($ime,$prezime,$email,$izbor,$izbor1,$izbor2)";

if($dbh->query($sql)==TRUE){
    $zadnji_id = $dbh->insert_id;
}

$sqll = "SELECT * FROM am WHERE id=$zadnji_id";
$result = $dbh->query($sqll);

if($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
    $user = $row["ime"];
    $last = $row["prezime"];
    $emaill = $row["email"];
}
?>