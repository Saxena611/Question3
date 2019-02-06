//Database for Assignment i.e Question 3.
<?php 

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "byju";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);







?>
