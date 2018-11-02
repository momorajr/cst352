<?php
    $alphabet = range("A","Z");
    //echo $alphabet[25]; this prints out z
    $firstAnswer= $_POST['findAnswer'];
    $secondAnswer= $_POST['tableAnswer'];
    $thirdAnswer= $_POST['ommitAnswer'];
    
    function printTable(){
        global $alphabet;
        global $secondAnswer;

            echo "<table border =\"1\" style='border-collapse: collapse'>";
	    for ($row=0; $row < $secondAnswer; $row++) { 
		    echo "<tr> \n";
	    	for ($col=0; $col < $secondAnswer; $col++) { 
		   
		    echo "<td>" . $alphabet[rand(0,25)] . "</td> \n";
		   	    }
	  	        echo "</tr>";
		    }
        echo "</table>";
        
    }
    
   
?>
<? php printTable()  ?>