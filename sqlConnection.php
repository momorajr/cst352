<?php

    function getConnection($dbname){
        $host = "localhost"; //c9
        //$dbname = "quotes"; //database name will be different for project and midterm
        $username = "momorajr";
        $password = "";
        
        //when connecting to heroku
        if (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
            $host = $url["host"];
            $dbname = substr($url["path"], 1);
            $username = $url["user"];
            $password = $url["pass"];
        }
    
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $dbConn;
    }
    
    
    
    
?>