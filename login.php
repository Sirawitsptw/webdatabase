<?php 
    include('server.php'); 
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "logregstyle.css" rel = "stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form action = "logindb.php" method= "post">
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
            <label for = "password">Password</label>
            <input type = "password" name = "password">
        </div>
        <div class="input-group">
            <button type = "submit" name = "log_user" class = "btn">Login</button>
        </div>
        <p>Not yet a member ? <a href = "register.php">Sign up</a></p>
    </form>
</body>
</html>