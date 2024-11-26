<?php

$DBHOST = '127.0.0.1:3307';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';


$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);

if(mysqli_connect_error()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}

