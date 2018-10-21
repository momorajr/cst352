<?php
    //$host = "localhost";
    //$dbname = "quotes";
    //$username = "momorajr";  ALL OF THIS COMMENTED LINES IS IN sqpConnection.php !!
    //$password = "";           THIS IS DONE TO AVOID REPEATING CODE !!
    
    //$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include '../../sqlConnection.php';
    $dbConn = getConnection("quotes"); //quotes is database name in phpMyAdmin
    
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
    
    function displayRandomQuotes(){
        
        global $dbConn;
        
        $randRecord = rand(0,26);
        $sql = "SELECT * FROM q_quotes
                NATURAL JOIN q_author
                LIMIT $randRecord,1"; //THIS IS FROM THE SQL OF phpMyAdmin!!
        $statement = $dbConn->prepare($sql);
        $statement->execute();
        //$records = $statement->fetch();//returns only ONE record
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);//returns multiple records
        //print_r($records);
        foreach($records as $record){
            echo "<div class='quotestyle'>";//this div is providing style to quote
            
            echo $record['quote'] . "<br>";
           echo "<a target='authorInfo' href='authorInfo.php?authorId=".$record['authorId']."'>"; //first name and last name is surrounded with this anchor tag
            echo $record['firstName'] . " " . $record['lastName']; //anchor tag makes the name a clickable link
            echo "</a>"; //END OF ANCHOR TAG!!
            
            echo "</div>";//end of div
        }
    }
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Random Famous Quote </title>
        <style>
            .window{
                display: block;
                margin-left: auto;
                margin-right: auto;
                
            }
            body{
                background-image: url("stars.png");
            }
            h1 {
                text-align: center;
                 font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                 font-size: 2.5em;
                 color: yellow;
            }
            .quotestyle{
                color: #fff48f;
                text-align: center;
                font-size: 1.4em;
                
            }
        </style>
    </head>
    <body>
        <h1>Random Famous Quote</h1>
        
        <?php displayRandomQuotes();  ?>
        <br><br>
            <iframe class ="window" name="authorInfo" frameborder="0" width="600" height="800"> </iframe>
    </body>
</html>