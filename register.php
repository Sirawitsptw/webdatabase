<?php 
    include('server.php') ; 
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "logregstyle.css" rel = "stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action = "registerdb.php" method= "post">
        <?php include('error.php'); ?>
        <?php if(isset($_SESSION['error'])) :  ?>
            <div class="error">
                <h3><?php 
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
    <?php endif ?>
        <div class="input-group">
            <label for = "username">Username</label>
            <input type = "text" name = "username">
        </div>
        <div class="input-group">
         <label for = "email">Email</label>
            <input type = "email" name = "email">
        </div>
        <div class="input-group">
            <label for = "password1">Password</label>
            <input type = "password" name = "password1">
        </div>
        <div class="input-group">
            <label for = "password2">Confirm Password</label>
            <input type = "password" name = "password2">
        </div>
        <div class="input-group">
            <button type = "submit" name = "reg_user" class = "btn">Register</button>
        </div>
        <p>Already a member ? <a href = "login.php">Sign in</a></p>
    </form>
</body>
</html>