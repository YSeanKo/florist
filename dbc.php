<?php
echo 'hello';
$db_username = ''; //username
$db_password = ''; //password

//path to database file
$database_path = "database.mdb";

//check file exist before we proceed
if (!file_exists($database_path)) {
    die("Access database file not found !");
}

//create a new PDO object
$database = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\\xampp\\htdocs\\florist\\database.mdb;Uid=Admin");

$sql  = "SELECT * FROM users";
$result = $database->query($sql);
while ($row = $result->fetch()) {
    echo $row["u_name"];
    echo $row["u_email"];
    echo $row["u_website"];
}

?>

