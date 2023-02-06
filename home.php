<?php 
ob_start();
include('code.php');
$title = "ToDoLists Home";
include('includes/header.php');
?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">ToDoLists</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home">Home</a>
        <a class="nav-link" href="about">About Us</a>
        <a class="nav-link" href="features">features</a>
        <a class="nav-link" href="contactus">Contact</a>
        
      </div>

    </div>
    <form action="login">
    <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
    

        <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-user "></i>Login</button>
    </form>
</div>
</nav>
<a href="https://todolists.pacharya.com.np/index">Official</a>
<script src = 'script.js' type="text/javascript"></script>

<?php include ('includes/footer.php');?>