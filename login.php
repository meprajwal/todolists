<?php
ob_start();
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    <style>
<?php include './magic.css';
session_start();
?>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

<script src="https://kit.fontawesome.com/e108b4bf7a.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
$title = "Login";
$message = "";
if (count($_POST)>0)
{
    //$con = new mysqli('localhost','id20205276_login_user','IJ&5q{k~+eiR5mEg','id20205276_todolistsdb') or die ('Unable to connect to database.');
    $con = new mysqli('localhost','root','','todolistsdb') or die ('Unable to connect to database.');
    $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
    $_SESSION["id"] = $row['id'];
    $_SESSION["name"] = $row['name'];
    } else {
        $_SESSION['message'] = 'Invalid Username or Password!';
        header("refresh:3;url=login");
ob_end_flush();

     
    }
}
if(isset($_SESSION["name"])) {
    $_SESSION['message'] = 'Login successful...Redirecting';
                ?>
            <div id="notification-area" style="display: block;"><div class="notification success"><div><b>Message</b></div>
                        <strong> <?= $_SESSION['message']; ?> </strong>
                        <div  class="notification-color success"></div><a class="notification-icon success"><i class="fa fa-2x fa-check-circle"></i></a></div></div> 
                        
                    </div>
                <?php 
                unset($_SESSION['message']);
                header("refresh:3;url=index");
ob_end_flush();


}
?>

    <?php


    if(isset($_SESSION['message']))
    {
       


        
    

        
        if ($_SESSION['message'] == 'Invalid Username or Password!')
        {
            ?>
            <div id="notification-area" style="display: block;"><div class="notification success"><div><b>Message</b></div>
                        <strong> <?= $_SESSION['message']; ?> </strong>
                        <div  class="notification-color danger"></div><a class="notification-icon danger"><i class="fa fa-2x fa-xmark-circle"></i></a></div></div> 
                        
                    </div>
                <?php 
                unset($_SESSION['message']);

        }

       
    }
?>


<form name="frmUser" method="post" align="center" action="">
<i class="bi bi-brightness-high-fill" id="toggleDark"></i>

    <nav id="logincontainer" class="container mx-auto mt-5 pb-5 rounded-pill bg-light shadow">
<h3 class="text-center text-primary">Login Details</h3>
 Username:<br>
 <input class="rounded" type="text" name="user_name">
 <br>
 Password:<br>
<input class="rounded" type="password" name="password">
<br><br>
<button type="submit" class="btn btn-primary">Login</button>
<button type="reset" class="btn btn-danger">Clear</button>
</nav>
</form>
<script language="JavaScript" src="./loginscript.js?n=1"></script>


<?php include ('includes/footer.php'); ?>
