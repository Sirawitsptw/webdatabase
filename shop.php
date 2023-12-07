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
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link href ="shopstyle.css" rel = "stylesheet">
  <title>Shop</title>
 </head>
 <body>
    <div class ="wrapper">
     <div class = "container">
            <a href = "shop.php" class = "hh">Shoe shop</a>
        </div>
        <p><strong><?php echo $_SESSION['username']; ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "homepage.php?logout='1'" style = "color : red;">Logout</a></p>
         
    </div>
	<form align="center" method="POST" action=condbshop.php>
		<br><br><br><br><br><br>
		<img src="pic1.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic2.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic3.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic4.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic5.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<input type="number" name="a" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="b" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="c" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="d" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="e" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<br><br>
		<img src="pic6.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic7.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic8.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic9.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="pic10.jpg" size width="300" height="300">&nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<input type="number" name="f" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="g" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="h" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="i" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="j" value="0" style="width: 292px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<br><br><br>
        <div class="input-group">
		<button type="submit" class = "btn"style="width: 100px;">Pursche</button>
    </div>
	</form>
 </body>
</html>
