<?php

    function getConnection($dbname){
        $host = "localhost"; //c9
        //$dbname = "quotes"; database name will be different for project and midterm
        $username = "momorajr";
        $password = "";
    
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $dbConn;
    }
    
    
    
    
?>