<?php
    $backgroundImage = "img/sea.jpg";
    //print_r($_GET)
    if (isset($_GET['keyword']) ){
        include 'api/pixabatAPI.php';
        
        $keyword = $_GET['keyword'];
        
        $imageURLs = getImageURLs($_GET['keyword']);
        echo "You searched for: <strong> $keyword </strong>";
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
        
        for($i=0; $i<5; $i++){
            echo "<img src'" . $imageURLs[rand(0, count($imageURLs) )] . "' width='200' >";
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" link="stylesheet">
        <title>Lab 4: Image Slider </title>
        <style>
            @import url("css/styles.css");
            body {
                background-image: url('<?= $backgroundImage ?>');
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <form method="GET">
            <input type="text" name="keyword" size="14" placeholder="keyword"/>
            <input type="submit" name="submitButtn" value="Go!"/>
        </form>
        <h1>You must type a keyword or slect a category </h1>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>