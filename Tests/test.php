<?php

try{
    $connection = new PDO('mysql:host=localhost;dbname=id15718874_flutterserver','id15718874_flutteruser', '4SjKJwCE0?!<$zZj');
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
    echo('Connected');
}catch(PDOException $exc){
     echo $exc -> getMessage();
     die("erro");
}

?>