<?php
    $symbols = array("orange", "seven");
    echo $symbols [1];
    
    array_push($symbols, "lemon");
    
    print_r($symbols); //displays whole array
    
    $symbols[] = "grapes"; //adds item at end of array
    
    echo "<hr>";
    print_r($symbols);
    
    $symbols[2] = "BAR";
    print_r($symbols);
    
    unset($symbols[2]);
    echo "<hr>";
    print_r($symbols);
    
    $symbols = array_values($symbols); //re indexes array after deleting them
    echo "<hr>";
    print_r($symbols);
    
    rsort($symbols); //orders item in the array
    echo "<hr>";
    print_r($symbols);
    
    array_push($symbols, "lemon", "bar"); //adding two more elements
    
    display_array();
    
    display_random_element();
    
    function display_random_element(){
        global $symbols;
        echo "<hr><br>here is the content of random elements:<br>";
        $randD = $symbols[rand(0, count($symbols)-1)];
        
        echo "<img src ='/labs/lab2/img/$randD.png' />";
    }
    
    function display_array(){
        global $symbols;
        echo "<hr><br>here is the content of the array:<br>";
        //print_r($symbols);
        
       // echo $symbols[0];
        //echo $symbols[1];
        //echo $symbols[2];
        
        for($i=0; $i< count($symbols); $i++){ //count() returns the size of the array
            echo $symbols[$i] . ", ";
        }
    }
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Review: arrays </title>
    </head>
    <body>

    </body>
</html>