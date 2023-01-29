<?php
include("config.php");

//data source name
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
} catch(PDOException $e){
        echo $e->getMessage();
}

$sql = "INSERT INTO user (
            uName, 
            Mail, 
            telNum, 
            strNaam, 
            huisNum, 
            WoonPlaats, 
            Postcode, 
            LandNaam) 
    VALUES (
            :uName, 
            :Mail, 
            :telNum, 
            :strNaam, 
            :huisNum, 
            :woonPlaats, 
            :postcode, 
            :landNaam);";

$statement = $pdo->prepare($sql);

$statement->bindValue(':uName', $_POST['username'], PDO::PARAM_STR);
$statement->bindValue(':Mail', $_POST['email'], PDO::PARAM_STR);
$statement->bindValue(':telNum', $_POST['telefoon'], PDO::PARAM_STR);
$statement->bindValue(':strNaam', $_POST['straat'], PDO::PARAM_STR);
$statement->bindValue(':huisNum', $_POST['huisnummer'], PDO::PARAM_STR);
$statement->bindValue(':woonPlaats', $_POST['woonplaats'], PDO::PARAM_STR);
$statement->bindValue(':postcode', $_POST['postcode'], PDO::PARAM_STR);
$statement->bindValue(':landNaam', $_POST['landnaam'], PDO::PARAM_STR);

$statement->execute();