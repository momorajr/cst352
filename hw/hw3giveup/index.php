<?php
    $name_error='';
    if(!empty($_POST['submitted']))//if name is blank this code will run
    {
        $name = trim($_POST['name']);
    
        
        if(empty($name))
        {
            $name_error='Name is empty. Please enter your name.';
        }
        
        if(empty($_POST['question-1-answers']))
        {
            $question_1_error = "please select one answer";
            $error=true;
        }
        else
        {
            $quest_1_answer = $_POST['question-1-answers'];
        }
        
        if(empty($_POST['marvel']))
	    {

	        $marvel_error ="Please select a marvel villain from the list";

	        $error=true;

	    }

	    else{

	        $marvel = $_POST['marvel'];

	    }
	    if(empty($_POST['question-4-answers']) || count($_POST['question-4-answers']) < 2)

	    {

	        $q4_error = "Please select at least 2 items. You already got a hint";

	        $error=true;

	    }
        $car = $_POST['question-4-answers'];
        
        if(empty($_POST['question-3-answers'])){
            $numb_error = "Please input a number";
            $error=true;
        }
        $numb = $_POST['question-3-answers'];
    }
    
     
    

?>


<!DOCTYPE html>
<html>
    <head>
        <title>homework 3 </title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <h1>Welcome to my short simple quiz</h1>
        <h2>Have fun</h2>
        
        <form action='check.php' method="post" id="quiz" name="quiz">
        
            <p>what is your name:<input type="text" name="name" value='<?php echo htmlentities($name) ?>'/></p>
            <span class='error'><?php echo $name_error ?></span>
            
            <p>what is the capital of California?<br> <span class='error'><?php echo $question_1_error ?></span><br>
                <input type="radio"  value="sanfrancisco" name="question-1-answers" id="question-1-answers-A" <?php echo($quest_1_answer=='sanfrancisco') ?>><label for="sanfrancisco"> San Francisco</label><br>
                <input type="radio"  value="losangeles" name="question-1-answers" id="question-1-answers-B" <?php echo($quest_1_answer=='losangeles') ?>><label for="losangeles"> Los Angeles</laberl><br>
                <input type="radio"  value="sacramento" name="question-1-answers" id="question-1-answers-C" <?php echo($quest_1_answer=='sacramento') ?>><label for="sacramento"> Sacramento</label><br>
                <input type="radio"  value="marina" name="question-1-answers" id="question-1-answers-D" <?php echo($quest_1_answer=='marina') ?>><label for="marina"> Marina</label><br></p>
                
            <p>Which Marvel villain wipped out half of the marvel cinnematic universe?<br>
            <span class='error'><?php echo $marvel_error?></span><br>
                <select name="marvel" id="marvel">
                    <option value="">Select Villain</option>
                    <option <?php echo $marvel=='hela'?'selected':''; ?>name="question-2-answers" id="question-2-answers-A" value="hela">Hela</option><br>
                    <option <?php echo $marvel=='loki'?'selected':''; ?>name="question-2-answers" id="question-2-answers-B" value="loki">Loki</option><br>
                    <option <?php echo $marvel=='ultron'?'selected':''; ?>name="question-2-answers" id="question-2-answers-C" value="ultron">Ultron</option><br>
                    <option <?php echo $marvel=='thanos'?'selected':''; ?>name="question-2-answers" id="question-2-answers-D" value="thanos">Thanos</option><br></p>
                </select>
            
            <p>10 - 6 = <br><span class='error'><?php echo $numb_error?></span><br>
                <input type="number" name="question-3-answers" id="question-3-answers-A" min="0" max="10"></p>
            
            <p>Select ALL that apply<br>A car is made up of: <br> 
                <span class='error'><?php echo $q4_error ?></span><br>
                <input type="checkbox"  name="question-4-answers[]" id="question-4-answers-A" value="spoon" <?php echo (in_array('spoon',$car)) ?'checked':'' ?>><label for="spoon"> Spoon</label><br>
                <input type="checkbox"  name="question-4-answers[]" id="question-4-answers-B" value="transmission" <?php echo (in_array('transmission',$car)) ?'checked':'' ?>><label for="transmission"> Transmission</label><br>
                <input type="checkbox"  name="question-4-answers[]" id="question-4-answers-C" value="pizza" <?php echo (in_array('pizza',$car)) ?'checked':'' ?>><label for ="pizza"> Pizza</label><br>
                <input type="checkbox"  name="question-4-answers[]" id="question-4-answers-D" value="engine" <?php echo (in_array('engine',$car)) ?'checked':'' ?>><label for="engine"> Engine</label><br></p>
                
            
            <input type="submit" name="submitted" value="Submit Quiz" />
            <input type="reset" name="reset" value="Reset">
        </form>
        

    </body>
</html>