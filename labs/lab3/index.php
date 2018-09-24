<?php
    $deck = range(1,52);
    shuffle($deck);
    print_r($deck);
    
    echo "<hr>";
    print_r($deck);
    
    function hand(){
        global $deck;
        for($i=0; $i<5; $i++){
            
            $lastCard = array_pop($deck);
            $faceValue = $lastCard % 13;
            //echo $faceValue . "-";
            
            //echo $lastCard . " ";
            if($faceValue==0){
                $faceValue = 13;
            }
            echo "<img src='cards/clubs/$faceValue.png' alt='$faceValue' title='$faceValue' >";
            
            
        }
        
    }
    
    function displayCard(){
        
        $suit = array("clubs","diamonds","hearts","spades");
       for($i=0; $i<5; $i++){ 
            $card = rand(1,13);
            echo "<img src='cards/".$suit[rand(0,3)]."/$card.png' alt ='$card' title='$card' />"; 
       }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3: Ace Poker </title>
        <style>
            h1, h2, body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2>Player with more aces wins all points!</h2>
        
        <?php
            echo "player1: ";
            hand() . "<br />";
            
            echo "<br />";
            
            echo "player2: ";
            hand() . "<br />";
        ?>

    </body>
</html>