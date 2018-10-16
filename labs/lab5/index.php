<?php
    $host = "localhost";
    $dbname = "quotes";
    $username = "momorajr";
    $password = "";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    function displayAllQuotes(){
        global $dbConn;
        $sql = "SELECT * FROM q_quotes";
        $statement = $dbConn->prepare($sql);
        $statement->execute();
        //$records = $statement->fetch();//returns only ONE record
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);//returns multiple records
        //print_r($records);
        foreach($records as $record){
            echo $record['quote'] . "<br>";
        }
    }
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Random Famous Quote </title>
    </head>
    <body>
        <h1>Random Famous Quote</h1>
        <?php
            displayAllQuotes();
        ?>

    </body>
</html>