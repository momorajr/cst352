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
	    for ($row=0; $row < 6; $row++) { 
		    echo "<tr> \n";
	    	for ($col=0; $col < 6; $col++) { 
		   
		    echo "<td>" . $alphabet[rand(0,25)] . "</td> \n";
		   	    }
	  	        echo "</tr>";
		    }
        echo "</table>";
        
    }
    



    
    
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <form  method="post" id="quiz" name="quiz">
            <h3>Select a letter to find</h3>
            <select name="letterFind">
                <option name="findAnswer" id="findAnswera" value="a">A</option>
                <option name="findAnswer" id="findAnswerb" value="b">B</option>
                <option name="findAnswer" id="findAnswerc" value="c">C</option>
                <option name="findAnswer" id="findAnswerd" value="d">D</option>
                <option name="findAnswer" id="findAnswere" value="e">E</option>
                <option name="findAnswer" id="findAnswerf" value="f">F</option>
                <option name="findAnswer" id="findAnswerg" value="g">G</option>
                <option name="findAnswer" id="findAnswerh" value="h">H</option>
                <option name="findAnswer" id="findAnsweri" value="i">I</option>
                <option name="findAnswer" id="findAnswerj" value="j">J</option>
                <option name="findAnswer" id="findAnswerk" value="k">K</option>
                <option name="findAnswer" id="findAnswerl" value="l">L</option>
                <option name="findAnswer" id="findAnswerm" value="m">M</option>
                <option name="findAnswer" id="findAnswern" value="n">N</option>
                <option name="findAnswer" id="findAnswero" value="o">O</option>
                <option name="findAnswer" id="findAnswerp" value="p">P</option>
                <option name="findAnswer" id="findAnswerq" value="q">Q</option>
                <option name="findAnswer" id="findAnswerr" value="r">R</option>
                <option name="findAnswer" id="findAnswers" value="s">S</option>
                <option name="findAnswer" id="findAnswert" value="t">T</option>
                <option name="findAnswer" id="findAnsweru" value="u">U</option>
                <option name="findAnswer" id="findAnswerv" value="v">V</option>
                <option name="findAnswer" id="findAnswerw" value="w">W</option>
                <option name="findAnswer" id="findAnswerx" value="x">X</option>
                <option name="findAnswer" id="findAnswery" value="y">Y</option>
                <option name="findAnswer" id="findAnswerz" value="z">Z</option>
            </select>
            
            
            <h3>Please select a table size below</h3><br>
            <select name="tableQuestion" required>
                <option></option>
                <option name="tableAnswer" id="tableAnswer6" value="6">6x6</option>
                <option name="tableAnswer" id="tableAnswer7" value="7">7x7</option>
                <option name="tableAnswer" id="tableAnswer8" value="8">8x8</option>
                <option name="tableAnswer" id="tableAnswer9" value="9">9x9</option>
            </select>
            
            <h3>Select a letter to ommit</h3>
            <select name="letterOmmit">
                <option name="ommitAnswer" id="ommitAnswera" value="a">A</option>
                <option name="ommitAnswer" id="ommitAnswerb" value="b">B</option>
                <option name="ommitAnswer" id="ommitAnswerc" value="c">C</option>
                <option name="ommitAnswer" id="ommitAnswerd" value="d">D</option>
                <option name="ommitAnswer" id="ommitAnswere" value="e">E</option>
                <option name="ommitAnswer" id="ommitAnswerf" value="f">F</option>
                <option name="ommitAnswer" id="ommitAnswerg" value="g">G</option>
                <option name="ommitAnswer" id="ommitAnswerh" value="h">H</option>
                <option name="ommitAnswer" id="ommitAnsweri" value="i">I</option>
                <option name="ommitAnswer" id="ommitAnswerj" value="j">J</option>
                <option name="ommitAnswer" id="ommitAnswerk" value="k">K</option>
                <option name="ommitAnswer" id="ommitAnswerl" value="l">L</option>
                <option name="ommitAnswer" id="ommitAnswerm" value="m">M</option>
                <option name="ommitAnswer" id="ommitAnswern" value="n">N</option>
                <option name="ommitAnswer" id="ommitAnswero" value="o">O</option>
                <option name="ommitAnswer" id="ommitAnswerp" value="p">P</option>
                <option name="ommitAnswer" id="ommitAnswerq" value="q">Q</option>
                <option name="ommitAnswer" id="ommitAnswerr" value="r">R</option>
                <option name="ommitAnswer" id="ommitAnswers" value="s">S</option>
                <option name="ommitAnswer" id="ommitAnswert" value="t">T</option>
                <option name="ommitAnswer" id="ommitAnsweru" value="u">U</option>
                <option name="ommitAnswer" id="ommitAnswerv" value="v">V</option>
                <option name="ommitAnswer" id="ommitAnswerw" value="w">W</option>
                <option name="ommitAnswer" id="ommitAnswerx" value="x">X</option>
                <option name="ommitAnswer" id="ommitAnswery" value="y">Y</option>
                <option name="ommitAnswer" id="ommitAnswerz" value="z">Z</option>
            </select>
            
            
            
           <input type="submit" name="submitted" value="Submit Table" /> 
        </form><hr>
        
       <?php printTable() ?>

    </body>
</html>