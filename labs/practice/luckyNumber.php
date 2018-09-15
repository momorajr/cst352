<?php
        function getLuckyNumber(){    
            $lucky_number = rand(1,10);
           
            if ($lucky_number == 4){
                $lucky_number = 11;
                
            }
            
            return $lucky_number;
        }
        
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lucky Number</title>
    </head>
    <body>
        <h1>
        My lucky number is: 
        <?php
            
            $lucky = getLuckyNumber();
            echo $lucky * 2;
        
        ?>
        </h1>
        
    </body>
</html>