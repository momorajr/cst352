<?php
    $firstRow = range(1,47);
    $secondRow = range(1,47);
    
    function displayFirstRow(){
        global $firstRow;
        shuffle($firstRow);
        $firstRow = array_slice($firstRow, 0, 5);
        
        for($i=0; $i<5; $i++){
            
            echo "<div class='spinningWheel'>" . "<div class='child'>" . $firstRow[$i] . "</div>" . "</div>";
            
        }
        
    }
    function displaySecondRow(){
        global $secondRow;
        shuffle($secondRow);
        $secondRow = array_slice($secondRow, 0, 5);
        
        for($i=0; $i<5; $i++){
            echo "<div class='ticket'>" . "<div class='ticketChild'>" . $secondRow[$i] . "</div>" . "</div>";
        }
    }
    function compareRow(){
       global $firstRow; 
       global $secondRow;
       if ($firstRow[0] == $secondRow[0] && $firstRow[1] == $secondRow[1] && $firstRow[2] == $secondRow[2] && $firstRow[3] == $secondRow[3]  && $firstRow[4] == $secondRow[4]){
           echo "<div class='uwin'> you win 1,000,000 dollars! </div>";
           echo "<img src='/cst352/hw/hw2/img/check.jpg' alt='check'>";
       }
       else
       {
            echo "<div class='tryagain'> Try again! </div>";
            
       }
       
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Homework 2: Lottery</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    </head>
    <body>
        <h1>Lottery</h1>
        
        
        <h2>If your ticket match the ones above you win $1,000,000</h2>
        
        <div class="main">
            <?php
                displayFirstRow();
                echo "<br>";
                compareRow();
                echo "<br>";
                displaySecondRow();
            ?>
        </div>
        
        
        
        
    </body>
    
</html>