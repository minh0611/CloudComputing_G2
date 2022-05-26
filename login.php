<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login"values="Login"></td>
			</tr>
		</table>
	</form>
	<?php

# kết nối hướng thủ tục
$connect = mysqli_connect('localhost','root','','mydl');
if($connect){
	echo "Ket noi thanh cong!<br />";
}
else{
	echo "Ket noi that bai!<br />";
}
// Neu click vao nut login thi moi thuc hien
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
//lay tu bang user cot username = gia tri username nhap tu form va cot password = gia tri password nhap tu form
$sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
//thu thi truy van
$result = mysqli_query($connect, $sql);
//tra ve ket qua, chinh la cac dong dc truy van
$row = mysqli_num_rows($result);
// Neu $row > 0 --->co tren 1 dong trong CSDL trung voi du lieu nhap vao form -> Dang nhap thanh cong
if($row > 0){
   echo "<script> alert('SUCCESSFUL!')</script>";
}
else{
	echo "<script> alert('FAILURE!')</script>";
}
}
?>

</body>
</html>