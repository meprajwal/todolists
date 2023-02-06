<?php 
<<<<<<< HEAD
ob_start();
=======
>>>>>>> 1cf15372f5bbbe488720c82e6d4cabad692eb736
include('code.php');
$title = "ToDo Lists";
include('includes/header.php');
?>


<?php
if(isset($_SESSION["name"])) {

$name = $_SESSION["name"]
?>
<i class="bi bi-brightness-high-fill" id="toggleDark"></i>
<div class="userinfo d-flex justify-content-end ">
Welcome, <?php echo $name; ?>
</div>
<div class="d-flex justify-content-end">

<a class = "text-danger"href = "logout">logout   </a>
</div>

<?php


    if(isset($_SESSION['message']))
    {
        if ($_SESSION['message'] == 'Task Added Successfully!')
        {
            ?>
            <div id="notification-area" style="display: block;"><div class="notification success"><div><b>Message</b></div>
                        <strong> <?= $_SESSION['message']; ?> </strong>
                        <div  class="notification-color success"></div><a class="notification-icon success"><i class="fa fa-2x fa-check-circle"></i></a></div></div> 
                        
                    </div>
                <?php 
                unset($_SESSION['message']);

        }
        elseif ($_SESSION['message'] == 'Write in your task first')
        {
            ?>
            <div id="notification-area" style="display: block;"><div class="notification success"><div><b>Message</b></div>
                        <strong> <?= $_SESSION['message']; ?> </strong>
                        <div  class="notification-color danger"></div><a class="notification-icon danger"><i class="fa fa-2x fa-circle-xmark"></i></a></div></div> 
                        
                    </div>
                <?php 
                unset($_SESSION['message']);

        }
        elseif ($_SESSION['message'] == 'Task Deleted Successfully!')
        {
            ?>
            <div id="notification-area" style="display: block;"><div class="notification success"><div><b>Message</b></div>
                        <strong> <?= $_SESSION['message']; ?> </strong>
                        <div  class="notification-color success"></div><a class="notification-icon success"><i class="fa fa-2x fa-check-circle"></i></a></div></div> 
                        
                    </div>
                <?php 
                unset($_SESSION['message']);

        }

       
    }
?>
    



    
    <form action="code.php" method="post">
        
        
        <div class="container rounded mx-auto shadow bg-light mt-5 mb-2">
            <div class="row text-primary text-center">
                <b>To-Do List</b>
            </div>
            <div class="row text-center mt-5 ">
                <b>
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <input class="rounded" type="text" name = "todotasks" placeholder="Eg: Thank Abay Karn Sir">
                                <button type="submit" name="submit" class="add_btn btn btn-primary font-weight-bold">Add Task</button>
                            </div>
                        </div>
                    </form>
                    
                   
                <br>
                    
                

            </div>
            
        </div>
    </form>
    <div class="tasks container rounded bg-light shadow table-responsive">
        <table class = "table ">
            <thead>
                <tr class="table-active">
                    <th>SN</th>
                    <th>Tasks</th>
                    <th>Status</th>
                </tr>
            </thead>
<?php

$tasks= mysqli_query($conn, "SELECT * FROM todos");
$loop = 1;
while($row = mysqli_fetch_array($tasks))
{
?>
<tr>
    <td>
        <?php echo $loop; ?>
    </td>


    <td class="tasks">
        <?php echo $row['todo']; ?>

    </td>
    <td class="delete"> 
		<a href="code.php?del_list=<?php echo $row['SN'] ?>">x</a> 
        
	</td>
</tr>

 
        

<?php $loop++;
}
?></table>

    </div>
    


    <script src = 'indexscript.js' type="text/javascript"></script>

<?php
}else header("location:home");
ob_end_flush();?>
<?php include ('includes/footer.php');?>
