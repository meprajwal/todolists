<?php
ob_start();
session_start();
$popshow = "";
$succeed = "";
$servername = "localhost";
//$username = "id20205276_todos";
//$password = "65>>y)*yn5-S+R=3";
//$dbname = "id20205276_todolists";

$username = "root";
$password = "";
$dbname = "todolists";
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit'])) 
{
    if(!empty($_POST['todotasks']))
    {
        $todotasks = $_POST['todotasks'];
        $addsql = "INSERT INTO todos (todo) VALUES ('$todotasks')";
        $conn->query($addsql);
        $_SESSION['message'] = "Task Added Successfully!";
        header('location: index');
        ob_end_flush();
        
    }
    else{

        $_SESSION['message'] = "Write in your task first";
        header('location: index');
        ob_end_flush();
        
    }

    
    
}

    
// delete task
if (isset($_GET['del_list'])) {
	$id = $_GET['del_list'];
    $deletesql = "DELETE FROM todos WHERE SN=".$id;
    $conn->query($deletesql);
    $_SESSION['message'] = "Task Deleted Successfully!";

	header('location: index');
	ob_end_flush();


    

}


?>