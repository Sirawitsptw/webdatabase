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
    <title>Success</title>
</head>
<body>
<div class="content">
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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$location = $_POST['location'];
	if($name==""||$email ==""||$phone ==""||$location == ""){
		echo "ใส่ข้อมูลไม่ครบนะครับ";
		echo "<br>";
		?>
		<input type="button" value="ย้อนกลับไปแก้ไข" onClick="location = 'payment.php'">
		<?php
	}
	else{
		$link = mysqli_connect("localhost","root","","shop") or die("not connected");
		$insert = "INSERT INTO shopcustomer VALUES ('$sum','$sum2','$name','$email','$phone','$location')";
		$result = mysqli_query($link,$insert);
		echo "success";
		echo"<head><meta http-equiv='Refresh'content = '2; URL = shop.php'></head>";
		exit(0);
	}
?>
    </div>
</body>
</html>