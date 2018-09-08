<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        <?php
            function displaySymbol($random_value){
        
                //$random_value = rand(0,3); //generates random value from 0 to 2
                //echo $random_value . "<br >"; //the dot is to concatonate text with variables  
                if ($random_value == 0){
                    $symbol = "seven";
                }else if ($random_value == 1){
                    $symbol = "cherry";
                }else if ($random_value == 2){
                    $symbol = "lemon";
                }else {
                    $symbol = "orange";
                }
                //$symbol = "grapes";
            
        
                echo "<img src='img/$symbol.png' alt='$symbol' title='$symbol' />";
            }//displaySymbol
            
            $random_value_left = rand(0,3);
            displaySymbol($random_value_left);
            
            $random_value_middle = rand(0,3);
            displaySymbol($random_value_middle);
            
            $random_value_right = rand(0,3);
            displaySymbol($random_value_right);
            
            echo "<br>Random value 1:" . $random_value_left . "<br>";   
            echo "Random value 2:" . $random_value_middle . "<br>";  
            echo "Random value 3:" . $random_value_right . "<br>";  
            
            if ($random_value_left == $random_value_middle && $random_value_middle == $random_value_right)
            {
                echo "<br> jackpot!!";
            }
                    
                
            
        ?>
    </body>
</html>