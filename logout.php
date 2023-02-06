<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("refresh:3;url=home");
echo 'Logged out...Redirecting to home page';


?>