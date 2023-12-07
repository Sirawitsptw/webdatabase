
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
    <title>Information</title>
</head>
<body>
    <div class="header">
        <h2>Information</h2>
    </div>
<?php
	$sum = $_POST['sum'];
	$sum2 = $_POST['sum2'];
	$A = $_POST['a'];
	$B = $_POST['b'];
	$C = $_POST['c'];
	$D = $_POST['d'];
	$E = $_POST['e'];
	$F = $_POST['f'];
	$G = $_POST['g'];
	$H = $_POST['h'];
	$I = $_POST['i'];
	$J = $_POST['j'];
?>
	<form method="POST" action="success.php">
        <div class="input-group">
		    <label>Name & Lastname</label>
		        <input type="text" name="name"><br>
		        <label>Email</label>
		        <input type="text" name="email"><br>
		        <label>Phone Number</label>
		        <input type="text" name="phone"><br>
		        <label>Address</label>
		        <textarea name="location" cols="76" rows="10"></textarea><br><br>
		        <input type="hidden" name="sum" value="<?=$sum;?>">
		        <input type="hidden" name="sum2" value="<?=$sum2;?>">
		        <input type="hidden" name="a" value="<?=$A;?>">
		        <input type="hidden" name="b" value="<?=$B;?>">
		        <input type="hidden" name="c" value="<?=$C;?>">
		        <input type="hidden" name="d" value="<?=$D;?>">
		        <input type="hidden" name="e" value="<?=$E;?>">
		        <input type="hidden" name="f" value="<?=$F;?>">
		        <input type="hidden" name="g" value="<?=$G;?>">
		        <input type="hidden" name="h" value="<?=$H;?>">
		        <input type="hidden" name="i" value="<?=$I;?>">
		        <input type="hidden" name="j" value="<?=$J;?>">
        </div>
            <div class="input-group">
		        <button type="submit" class = "btn" style="width: 120px;">Confirm</button>
            </div>
	</form>
<?php
	
	

	/*$insert = "INSERT INTO shoplist VALUES ('','$A','$B','$C','$D','$E','$F','$G','$H','$I','$J','$K','$L','$M','$N','$O','$P','$Q','$R','$S','$T','$U','$V','$W','$X')";*/
?>
</body>
</html>