<?php
session_start();

if (!isset($_SESSION['adminName'])) {
    
    header("Location: login.php");
    
}

if (isset($_GET['addAuthorForm'])) {  //checks whether the form has been submitted

 include '../../sqlConnection.php';
 $dbConn = getConnection("quotes");
    
    
  $firstName = $_GET['firstName'];    
  $lastName = $_GET['lastName'];
  $gender = $_GET['gender'];
  $dob = $_GET['dob'];
  $dod = $_GET['dod'];
  $country = $_GET['country'];
  $profession = $_GET['profession'];
  $imageUrl = $_GET['imageUrl'];
  $bio = $_GET['bio'];
  
  
  $sql = "INSERT INTO q_author (firstName, lastName, gender, dob, dod, country, profession, picture, bio) 
                 VALUES ( :fn, :lastName, :gender, :dob, :dod, :country, :profession, :picture, :bio);";
                 
  $namedParameters = array();
  $namedParameters[':fn'] = $firstName;
  $namedParameters[':lastName'] = $lastName;
  $namedParameters[':gender'] = $gender;
  $namedParameters[':dob'] = $dob;
  $namedParameters[':dod'] = $dod;
  $namedParameters[':country'] = $country;
  $namedParameters[':profession'] = $profession;
  $namedParameters[':picture'] = $imageUrl;
  $namedParameters[':bio'] = $bio;

  $stmt = $dbConn->prepare($sql);                 
  $stmt->execute($namedParameters); //This will insert the record!
  
  echo "Author was added!";
 
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin: Add New Author </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        
    </head>
    <body>

        <h1> Adding New Author</h1>
        
        <form>
            First Name: <input type="text" name="firstName"/> <br />
            Last Name: <input type="text" name="lastName"/> <br />
            Gender: 
            <input type="radio" name="gender" value="M" id="genderMale"/>
                <label for="genderMale">Male</label>
            <input type="radio" name="gender" value="F" id="genderFemale"/> 
                <label for="genderFemale">Female</label><br>
            
            Day of birth: <input type="text" name="dob"/> <br />
            Day of death: <input type="text" name="dod"/> <br />
            Country: <input type="text" name="country"/> <br>
            Profession: <input type="text" name="profession"/> <br>
            
            Image URL: <input type="text" name="imageUrl"/><br>
            Bio: 
            <textarea name="bio" cols="50" rows="5"/></textarea>
            
            <br>

            <input type="submit" value="Add Author" name="addAuthorForm" />
        </form>
        
        
        
        
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Author Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe name="authorModal" width='450'height='200'></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>