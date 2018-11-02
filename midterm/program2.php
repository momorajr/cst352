<?php
    include '../sqlConnection.php';
    $dbConn = getConnection("quotes");


    function displayAllQuotesThatStartWithLetterL(){
        global $dbConn;
        $sql = "SELECT * FROM q_quotes WHERE quote LIKE 'L%'";
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
        <title> </title>
    </head>
    <body>
        
        <?php displayAllQuotesThatStartWithLetterL() ?>

    </body>
</html>