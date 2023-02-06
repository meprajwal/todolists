#this is only for onetime run purpose. Rerun if you want new database.

<?php
$servername = "localhost";
$username ="root";
//$username = "id20205276_login_user";
$password = "";
//$password = "IJ&5q{k~+eiR5mEg";
//$dbname =  "id20205276_todolistsdb";
$dbname =  "todolistsdb";
$con1 = new mysqli($servername, $username, $password, $dbname);
$sql1 = "CREATE TABLE `login_user` (
    `id` int(11) NOT NULL,
    `name` varchar(60) NOT NULL,
    `user_name` varchar(20) NOT NULL,
    `password` varchar(20) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$con1->query($sql1);
$con1 -> close();

?>