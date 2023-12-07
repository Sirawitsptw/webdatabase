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
    <title>Cart</title>
</head>
<body>
    <div class="header">
        <h2>Cart</h2>
    </div>
    <div class="content">
<?php
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
    $sum = 0;
    $sum2 = 0;
	if($A < 0 || $B < 0 || $C < 0 || $D < 0 || $E < 0 || $F < 0 || $G < 0 || $H < 0  || $I < 0 || $J < 0 ){
		echo "nice";
	}
	else if($A == 0 && $B == 0 && $C == 0 && $D == 0 && $E == 0 && $F == 0 && $G == 0 && $H == 0  && $I == 0 && $J == 0){
		echo "nice";
	}
	else{
		$link = mysqli_connect("localhost","root","","shop") or die("not connected");
		$select = "SELECT * FROM shopprice";
		$result = mysqli_query($link,$select);
		while($row = mysqli_fetch_array($result)){
			echo "รายการสั่งซื้อ";
			echo "<br/>";
			if($A > 0){
				echo "Nike Air Force 1 '07 EasyOn จำนวน = ";
				echo "$A";
				echo " <br>";
				echo $row[0];
				$pA = $A*$row[0];
				echo " = $pA บาท";
				echo "<br/>";
				$sum = $A;
				$sum2 = $pA;
			}
			if($B > 0){
				echo "Nike Dunk Low Retro จำนวน = ";
				echo "$B";
				echo " <br>";
				echo $row[1];
				$pB = $B*$row[1];
				echo " = $pB บาท";
				echo "<br/>";
				$sum = $sum+$B;
				$sum2 = $sum2+$pB;
			}
			if($C > 0){
				echo "Nike Air Max 97 SE จำนวน = ";
				echo "$C";
				echo "<br>";
				echo "$row[2] * $C";
				$pC = $C*$row[2];
				echo " = $pC บาท";
				echo "<br/>";
				$sum = $sum+$C;
				$sum2 = $sum2+$pC;
			}
			if($D > 0){
				echo "Nike Vomero 5 จำนวน = ";
				echo "$D";
				echo " <br>";
				echo $row[3];
				$pD = $D*$row[3];
				echo " = $pD บาท";
				echo "<br/>";
				$sum = $sum+$D;
				$sum2 = $sum2+$pD;
			}
			if($E > 0){
				echo "Nike Air Max 90 GORE-TEX จำนวน = ";
				echo "$E";
				echo " <br>";
				echo $row[4];
				$pE = $E*$row[4];
				echo " = $pE บาท";
				echo "<br/>";
				$sum = $sum+$E;
				$sum2 = $sum2+$pE;
			}
			if($F > 0){
				echo "Nike Blazer Low ’77 Jumbo จำนวน = ";
				echo "$F";
				echo " <br>";
				echo $row[5];
				$pF = $F*$row[5];
				echo " = $pF บาท";
				echo "<br/>";
				$sum = $sum+$F;
				$sum2 = $sum2+$pF;
			}
			if($G > 0){
				echo "Nike SB Zoom Blazer Low Pro GT จำนวน = ";
				echo "$G";
				echo " <br>";
				echo $row[6];
				$pG = $G*$row[6];
				echo " = $pG บาท";
				echo "<br/>";
				$sum = $sum+$G;
				$sum2 = $sum2+$pG;
			}
			if($H > 0){
				echo "Nike Revolution 7 จำนวน = ";
				echo "$H";
				echo " <br>";
				echo $row[7];
				$pH = $H*$row[7];
				echo " = $pH บาท";
				echo "<br/>";
				$sum = $sum+$H;
				$sum2 = $sum2+$pH;
			}
			if($I > 0){
				echo "Nike Invincible 3 จำนวน = ";
				echo "$I";
				echo " <br>";
				echo $row[8];
				$pI = $I*$row[8];
				echo " = $pI บาท";
				echo "<br/>";
				$sum = $sum+$I;
				$sum2 = $sum2+$pI;
			}
			if($J > 0){
				echo "Nike P-6000 Premium จำนวน = ";
				echo "$J";
				echo " <br>";
				echo $row[9];
				$pJ = $J*$row[9];
				echo " = $pJ บาท";
				echo "<br/>";
				$sum = $sum+$J;
				$sum2 = $sum2+$pJ;
			}
			echo "จำนวนทั้งหมด $sum ชิ้น";
			echo "<br/>";
			echo "จำนวนเงินทั้งหมด  $sum2 บาท";
    
?>		

        <form method="post" action="payment.php">
        <div class="input_group">
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
			<button type="button" class = "btn" onClick="history.back();">Back</button>
            <button type="submit" class = "btn">Pursche</button>
            </div>
		</form>
        </div>
<?php
        }
    }
    ?>
    </body>
    </html>
