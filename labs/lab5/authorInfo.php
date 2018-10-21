<?php
    include '../../sqlConnection.php';
    $dbConn = getConnection("quotes");
    
    function displayAuthorInfo(){
        global $dbConn;
        
        $authorId = $_GET['authorId'];
        $sql = "SELECT * FROM q_author WHERE authorId = $authorId";
        
        $stmt = $dbConn->prepare($sql); //FOR THE EXAM WE NEED THESE 3 LINES
        $stmt->execute(); //use fetchall for fetching multiple records
        $record = $stmt->fetch(PDO::FETCH_ASSOC); //we expect only ONE record
        
        //print_r($record);
        echo '<img src="' . $record['picture'] . '" alt="portrait" />';
        
        echo "<div class='textinside'>";
        
        echo "<br> Bio: " . $record['bio'] . "<br><br>";
        echo "Country: " . $record['country'] . "<br>";
        echo "Gender: " . $record['gender'] . "<br>";
        echo "Profession: " . $record['profession'] . "<br>";
        echo "Day of Birth: " . $record['dob'] . "<br>";
        echo "Day of Death: " . $record['dod'] . "<br>";
        
        echo "</div>";
        
        
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Author Info </title>
        <style>
            .textinside {
                color: #fff48f;
                font-size: 1.2em;
                
            }
            h2 {
                color: yellow;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <h2>Author Info</h2>
        
        <?php displayAuthorInfo() ?>
        
        
    </body>
</html>