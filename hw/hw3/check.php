<head>
    <title>Homwork 3 PHP forms </title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<?php
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    
    
    $totalCorrect = 0;

    if ($answer1 == "C") { $totalCorrect++; }
    if ($answer2 == "D") { $totalCorrect++; }
    if ($answer3 == "A") { $totalCorrect++; }
    
    $name = $_POST['name'];
    echo "<h3>  $name, you got:  </h3>";
    echo "<div id='results'>$totalCorrect / 3 correct</div>"; 
    
    if($totalCorrect == 3){
        echo '<img src="img/yay.gif" alt="yay" />';
    }
    else if($totalCorrect == 2){
        echo '<img src="img/good.gif" alt="good" />';
    }
    else if($totalCorrect == 1){
        echo '<img src="img/bad.gif" alt="bad" />';
    }
    else{
        echo '<img src="img/rbad.gif" alt="reallyBad" />';
    }

?>
<div class="wholeThing">
<h2>1) What is the capital of California? </h2> 
<label for="question-1-answers-A">A: San Francisco </label>
<label for="question-1-answers-B">B: Los Angeles</label>
<label for="question-1-answers-C">C: Sacramento</label>
<label for="question-1-answers-D">D: Marina</label>
<h3 style = "color:#008c00"> You chose <?=$answer1?>.</h3>
<!-- *******************end output1*****************************-->
<h2>2) Check the only villain in this list from the Marvel Cinematic Universe </h2> 
<label for="question-2-answers-A">A: Captain America </label>
<label for="question-2-answers-B">B: Iron Man</label>
<label for="question-2-answers-C">C: Thor</label>
<label for="question-2-answers-D">D: Thanos</label>
<h3 style = "color:#008c00"> You chose <?=$answer2?>.</h3>
<!-- *******************end output2*****************************-->
<h2>3) 10 - 6 =  </h2> 
<label for="question-3-answers-A">A: 4 </label>
<label for="question-3-answers-B">B: 16</label>
<label for="question-3-answers-C">C: 60</label>
<label for="question-3-answers-D">D: -4</label>
<h3 style = "color:#008c00"> You chose <?=$answer3?>.</h3>
</div>