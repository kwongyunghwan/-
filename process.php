<?php
 header("Content-Type: text/html;charset=UTF-8");
 $host = 'localhost';
 $user = 'root';
 $pw = '';
 $dbName = 'test';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 if($mysqli)
 {
    echo "MySQL successfully connected!<br/>";
    $temp = $_GET['temp'];
    $humi = $_GET['humi']; 
    echo "<br/>Temperature = $temp"; 
    echo ", "; 
    echo "Humidity = $humi<br/>"; 
    $query = "INSERT INTO tempnhumi (temp, humi) VALUES ('$temp','$humi')"; 
    mysqli_query($mysqli,$query); echo "</br>success!!"; 
    } 
    else
    { 
        echo "MySQL could not be connected";
    } 
     mysqli_close($mysqli); 
?>