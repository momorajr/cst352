
<!DOCTYPE html>
<html>
    <head>
        <title>Homwork 3 PHP forms </title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
      <div class="wholeThing">
        <h1>Welcome to my short simple quiz</h1>
        <h2>Have fun</h2>
        <form action='check.php' method="post" id="quiz" name="quiz">
        
            <p class"wname">what is your name: <input type="text" name="name" /></p>
            
            
            <h3>1) What is the capital of California?</h3> 
            <img src="img/sac.jpg" alt="sacremento" id="sac" />
                <input type="radio"  value="A" name="question-1-answers" id="question-1-answers-A" ><label for="sanfrancisco"> San Francisco</label><br>
                <input type="radio"  value="B" name="question-1-answers" id="question-1-answers-B" ><label for="losangeles"> Los Angeles</laberl><br>
                <input type="radio"  value="C" name="question-1-answers" id="question-1-answers-C" ><label for="sacramento"> Sacramento</label><br>
                <input type="radio"  value="D" name="question-1-answers" id="question-1-answers-D" ><label for="marina"> Marina</label><br>
             
               
            <h3>2) Check the only villain in this list from the Marvel Cinematic Universe</h3>
            <img src="img/marvel.jpg" alt="marvel" id="mar" /> 
                  <input type="checkbox" name="question-2-answers" id="question-2-answers-A" value="A"><label for="captainamerica">Captain America</label></option><br>
                  <input type="checkbox" name="question-2-answers" id="question-2-answers-B" value="B"><label for="ironman">Iron Man</label></option><br>
                  <input type="checkbox" name="question-2-answers" id="question-2-answers-C" value="C"><label for="thor">Thor</label></option><br>
                  <input type="checkbox" name="question-2-answers" id="question-2-answers-D" value="D"><label for="thanos">Thanos</label></option><br>
                
            <div class="q3">
            <h3>3) 10 - 6 = </h3>
                <select name="question-3-answers" >
                    <option name="question-3-answers" id="question-3-answers-X" value="">Select one</option>
                    <option name="question-3-answers" id="question-3-answers-A" value="A">4</option><br>
                    <option name="question-3-answers" id="question-3-answers-B" value="B">16</option><br>
                    <option name="question-3-answers" id="question-3-answers-C" value="C">60</option><br>
                    <option name="question-3-answers" id="question-3-answers-D" value="D">-4</option><br>
                </select></p></div>
            
            
                
            
            <input type="submit" name="submitted" value="Submit Quiz" />
            <input type="reset" name="reset" value="Reset">
        </div>
  


    </body>
</html>