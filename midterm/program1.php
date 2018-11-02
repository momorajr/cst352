<?php
if($_POST && isset($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'])){
  $errorMsg = "";
  $q1 = $_POST['q1'];
  //$errorMsg2 = "";
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  
  
  if(!$q1) {
      $errorMsg = "Please enter a Number";
    }
    else if($q1 < 2 or $q1 > 6){
      $errorMsg = "Number must be between 2 and 6";
    }
    /*else{
      echo something;
    }*/
  
  
  
  
  
  /*if($q4 == "Yes" && $q2 == "C"){
    echo '<img src="/cst352/midterm/img/acapulco.png">';
    echo '<img src="/cst352/midterm/img/alesund.png">';
    echo '<img src="/cst352/midterm/img/bergen.png">';
    echo '<img src="/cst352/midterm/img/cabos.png">';
    echo '<img src="/cst352/midterm/img/cancun.png">';
    echo '<img src="/cst352/midterm/img/chichenitza.png">';
    echo '<img src="/cst352/midterm/img/hammerfest.png">';
    echo '<img src="/cst352/midterm/img/huatulco.png">';
    echo '<img src="/cst352/midterm/img/mexico_city.png">';
    echo '<img src="/cst352/midterm/img/oslo.png">';
    echo '<img src="/cst352/midterm/img/stavenger.png">';
    echo '<img src="/cst352/midterm/img/trondheim.png">';
  }
  else if($q4 == "Yes" && $q2 == "B"){
    
    echo '<img src="/cst352/midterm/img/alesund.png">';
    echo '<img src="/cst352/midterm/img/bergen.png">';
    echo '<img src="/cst352/midterm/img/hammerfest.png">';
    echo '<img src="/cst352/midterm/img/oslo.png">';
    echo '<img src="/cst352/midterm/img/stavenger.png">';
    echo '<img src="/cst352/midterm/img/trondheim.png">';
  }
  else if($q4 == "Yes" && $q2 == "A"){
    echo '<img src="/cst352/midterm/img/acapulco.png">';
    echo '<img src="/cst352/midterm/img/cabos.png">';
    echo '<img src="/cst352/midterm/img/cancun.png">';
    echo '<img src="/cst352/midterm/img/chichenitza.png">';
    echo '<img src="/cst352/midterm/img/huatulco.png">';
    echo '<img src="/cst352/midterm/img/mexico_city.png">';
    
  }
  else {
    echo something;
  }*/
 



    
   
    
    

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Progarm 1 </title>
    </head>
    
    <body>
      <h1>Next Vacation Spots</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          
          <div>Number of cities to visit: 
          <input type="text" id="q1" name="q1" value="<?PHP if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?>"></div>
          <?PHP
          if(isset($errorMsg) && $errorMsg) {
                echo "<p style=\"color: red;\">*",htmlspecialchars($errorMsg),"</p>\n\n";
              }
          ?>
          
          
          <div> Country to visit: 
          <input type="radio" id="q2" name="q2" value="A" required> Mexico
          <input type="radio" id="q2" name="q2" value="B" required> Norway
          <input type="radio" id="q2" name="q2" value="C" required> Both </div>
          
          
          <div> Display cities to visit in alphabetical order: 
          <input type="radio" id="q3" name="q3" value="A"> A-Z
          <input type="radio" id="q3" name="q3" value="Z"> Z-A <br> </div>
          
          <input type="checkbox" id="q4" name="q4" value="Yes"> Display Images <br>
          
          
          <input type="submit" name="submit" value="Display Cities to Visit!">
          
        </form>
        <hr>
        
    </body>


  <footer>
    
    
  </footer>


</html>