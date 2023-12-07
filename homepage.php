<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "logregstyle.css" rel = "stylesheet">
    <title>Homepage</title>
</head>
<body>
    <div class="header">
        <h2>Homepage</h2>
    </div>

    <div class="content">

    <?php if(isset($_SESSION['success'])) :  ?>
        <div class="success">
            <h3><?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
            </h3>
        </div>
    <?php endif ?>


        <?php if(isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p>Go to shop <a href = "shop.php">Shop</a></p>
            <p><a href = "homepage.php?logout='1'" style = "color : red;">Logout</a></p>
        <?php endif ?>
    </div>
</body>
</html>