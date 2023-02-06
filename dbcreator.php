#this is only for onetime run purpose. Rerun if you want new database.

<?php
$servername = "localhost";
//$username = "id20205276_todos";
$username ="root";
//$password = "65>>y)*yn5-S+R=3";
$password="";
//$dbname = "id20205276_todolists";
$dbname = "todolists";
$con1 = new mysqli($servername, $username, $password, $dbname);

$sql1 = "CREATE TABLE todos (
    SN int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    todo TEXT NOT NULL
    )";
$con1->query($sql1);
$con1 -> close();

?>