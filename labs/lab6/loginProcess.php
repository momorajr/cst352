<?php  
    include'../../sqlConnection.php';
    $dbConn = getConnection("quotes");

    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    
    $sql = "SELECT *
            FROM q_admin
            WHERE username = '$username';
            AND password = '$password' ";
            
    echo $sql;



?>