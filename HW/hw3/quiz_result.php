<head>
     <link rel="stylesheet" href="css/styles.css" type="text/css"/>
     <link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
</head>
<?php
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];
$answer6 = $_POST['question-6-answers'];
$answer7 = $_POST['question-7-answers'];
$answer8 = $_POST['question-8-answers'];
$answer9 = $_POST['question-9-answers'];
$answer10 = $_POST['question-10-answers'];
$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }

if ($answer2 == "A") { $totalCorrect++; }

if ($answer3 == "B") { $totalCorrect++; }
if ($answer4 == "D") { $totalCorrect++; }
if ($answer5 == "B") { $totalCorrect++; }
if ($answer6 == "A") { $totalCorrect++; }
if ($answer7 == "4") { $totalCorrect++; }
if ($answer8 == "D") { $totalCorrect++; }
if ($answer9 == "C") { $totalCorrect++; }
if ($answer10 == "D") { $totalCorrect++; }


$name = $_POST['name'];
echo "<h3>  $name, you got:  </h3>";
echo "<div id='results'>$totalCorrect / 10 correct</div>";
?>
<h2>1)Which pop star is this </h2> 
<label for="question-1-answers-A">A: Jennifer Love Hewitt </label>
<label for="question-1-answers-B">B: Grazie.</label>
<label for="question-1-answers-C">C: Per favore.</label>
<label for="question-1-answers-D">D: Mi dispiace.</label>
<h3 style = "color:#008c00"> You chose <?=$answer1?>.</h3>
<!-- *******************end output1*****************************-->
<h2>2)How do you say "Good Morning" in Italian? </h2> 
<label for="question-2-answers-A">A: Buon giorno. </label>
<label for="question-2-answers-B">B: Grazie.</label>
<label for="question-2-answers-C">C: Per favore.</label>
<label for="question-2-answers-D">D: Mi dispiace.</label>
<h3 style = "color:#008c00"> You chose <?=$answer2?>.</h3>
<!-- *******************end output2*****************************-->
<h2>3)Which of these is not a mammal? </h2> 
<label for="question-3-answers-A">A: Buon giorno. </label>
<label for="question-3-answers-B">B: Grazie.</label>
<label for="question-3-answers-C">C: Panda</label>
<label for="question-3-answers-D">D: Rabbit</label>
<h3 style = "color:#008c00"> You chose <?=$answer3?>.</h3>
<!-- *******************end output3*****************************-->
<h2>4)Which country's flag is this? </h2> 
<label for="question-4-answers-A">A: Barbados </label>
<label for="question-4-answers-B">B: Trinidad and Tobago</label>
<label for="question-4-answers-C">C: Bahamas</label>
<label for="question-4-answers-D">D: Jamaica</label>
<h3 style = "color:#008c00"> You chose <?=$answer4?>.</h3>
<!-- *******************end output4*****************************-->
<h2>5)Who made this sculpture? </h2> 
<label for="question-5-answers-A">A: Leonardo DaVinci </label>
<label for="question-5-answers-B">B: Michelangelo</label>
<label for="question-5-answers-C">C: Donatello</label>
<label for="question-5-answers-D">D: Raphael</label>
<h3 style = "color:#008c00"> You chose <?=$answer5?>.</h3>
<!-- *******************end output5*****************************-->
<h2>6)When was Dolly the sheep cloned? </h2> 
<label for="question-6-answers-A">A: 1996 </label>
<label for="question-6-answers-B">B: 1997</label>
<label for="question-6-answers-C">C: 1998</label>
<label for="question-6-answers-D">D: 1999</label>
<h3 style = "color:#008c00"> You chose <?=$answer6?>.</h3>
<!-- *******************end output6*****************************-->
<h2>7)Which of these is not a prime number?  </h2> 
<label for="question-7-answers-A">A: 1 </label>
<label for="question-7-answers-B">B: 2</label>
<label for="question-7-answers-C">C: 3</label>
<label for="question-7-answers-D">D: 4</label>
<h3 style = "color:#008c00"> You chose <?=$answer7?>.</h3>
<!-- *******************end output7*****************************-->
<h2>8)Which Ninja Turtle is this?  </h2> 
<label for="question-8-answers-A">A: Leonardo </label>
<label for="question-8-answers-B">B: Michelangelo</label>
<label for="question-8-answers-C">C: Raphael</label>
<label for="question-8-answers-D">D: Donatell</label>
<h3 style = "color:#008c00"> You chose <?=$answer8?>.</h3>
<!-- *******************end output8*****************************-->
<h2>9)Which football team has the most Super Bowl wins?  </h2> 
<label for="question-9-answers-A">A: Green Bay Packers </label>
<label for="question-9-answers-B">B: Dallas Cowboys</label>
<label for="question-9-answers-C">C: Pittsburgh Steelers</label>
<label for="question-9-answers-D">D: New England Patriots</label>
<h3 style = "color:#008c00"> You chose <?=$answer9?>.</h3>
<!-- *******************end output9*****************************-->
<h2>10)Who wrote Wuthering Heights?</h2> 
<label for="question-10-answers-A">A: Jane Austen </label>
<label for="question-10-answers-B">B: Emily Dickinson</label>
<label for="question-10-answers-C">C: Charlotte Brontë</label>
<label for="question-10-answers-D">D: Emily Brontë</label>
<h3 style = "color:#008c00"> You chose <?=$answer10?>.</h3>
<!-- *******************end output10*****************************-->