<?php 
define('DB_HOST', 'ENTER_DB_HOST'); 
define('DB_USERNAME', 'ENTER_DB_USERNAME'); 
define('DB_PASSWORD', 'ENTER_DB_PASSWORD'); 
define('DB_NAME', 'ENTER_DB_NAME');

date_default_timezone_set('Asia/Karachi');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}