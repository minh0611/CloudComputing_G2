<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- Câu lệnh if ... else /// notes trong html --><br>
<?php
$a = 5;
$b = 10;
echo("Giai phuong trinh bac nhat: " .$a ."x + $b = 0<br />");

if($a == 0){
	if ($b == 0){
		echo("Phuong trinh co vo so nghiem !");
	}
	else{
		echo("Phuong trinh vo nghiem !");
	}
}
else{
	$x = -$b / $a;
	echo("Phuong trinh co mot nghiem: x = $x");# notes trong php
}
?><br>
<br>
<br>
<?php
$gender = 3;

if ($gender == 0)
    echo "Male";
elseif ($gender ==1)
	echo "Famale";
else
	echo "Undefined";

?>
<br>
<br>
<?php
$x = 1;  # nếu là 1 hoặc 2 thì in ra là One or Two còn lại thì ra default
switch ($x) {
	case 1:
		echo "One";
		break;
	case 2;
	    echo "Two";
	    break;
	default:   # default: mặc định sẽ in ra 
		echo "No match";
		break;
}
?>
<br>
<br>
<?php
$thu = 1;
$ngay ="";
switch($thu){
	case 1: echo("Chủ nhật");
	break;
	case 2: echo("Thứ hai");
	break;
	case 3: echo("Thứ ba");
	break;
	case 4: echo("Thứ tư");
	break;
	case 5: echo("Thứ năm");
	break;
	case 6: echo("Thứ sáu");
	break;
	case 7: echo("Thứ bảy");
	break;
	default: echo("Không tồn tại ngày này");
	break;
}
?>
<br>
<br>
<?php
$i = 5;
do{
	echo "Hello<br />";
}
while ($i < 0 );
?>
<br><br>
<?php
$i = 5;
do{
	
	echo "$i<br />"; #có thể để $i++ trước echo nhưng sẽ cho ra đáp án khác
	$i++;
}
while($i < 10);
?>
<br><br>
<?php
$items = array("One","Two","Three");
foreach ($items as $item) {   #foreach là lặp tất cả phần tử có tring mảng
	echo "$item <br />";
}
?>
<br><br>
<?php
$arr[0] = 'PHP';
$arr[1] = "awesome";
$arr[2] = "is";
echo "$arr[0] $arr[2] $arr[1]";
?> 
<br><br>
<?php
$paper[0] = "Deadpool";
$paper[1] = "The Rock";
$paper[2] = "Joker";
$paper[3] = "Captain American";
$paper[4] = "khabid";
for($i = 0; $i < count($paper);$i++){
	echo "$i: $paper[$i]<br />";
}
?>

<br><br>
<?php # mảng liên kết
$age = array("Son"=>"19", "Dung"=>"19", "Kien"=>"18");
echo "Son is " .$age['Son'] ." years old.<br />";
echo "Dung is " .$age['Dung'] ." years old.<br />";
echo "Kien is " .$age['Kien'] ." years old.<br />";
?>
<br><br>
<!-- sd biến toàn cục là GET và POST trong tạo Form-->
<!-- GET: hiển thị tất cả đường dẫn ; POST: che đi đường dẫn giúp bảo mật -->
<form method="post">
<!--<form action="Page4-welcome.php" method="post">-->

<!--sd action="Page4-welcome.php" thì sẽ sử lý trên trang Page4-welcome.php-->
<!--Không sd action thì sẽ thực hiện ngay trên trang Page4.php-->
	Username: <input type="text" name="username"><br><br>
	Password: <input type="text" name="password"><br><br>
	<input type="submit" name="submit" value="Submit"><br>
</form>
<?php
if(isset($_POST["submit"]))
{
	echo $_POST['username'];
	echo $_POST['password'];
}
?>
<br>
<br>
</body>
</html>