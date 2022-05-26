<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>User ID: </td>
				<td><input type="text" name="user_id"></td>
			</tr>
			<tr>
				<td>UserName: </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register" value="Register"></td>
			</tr>
		</table>
	</form>
	<?php
    //Ket noi theo Mysqli procedural
    $connect = mysqli_connect('localhost','root','','mydl');
    if(!$connect){  # dấu ! là chỉ khi nào thất bại thì mới thông báo còn thành công thì k
    	echo "Ket noi that bai!";
    }
    // Nếu click vào nút register thì mới thực hiện
    if(isset($_POST['register'])){
    	$user_id = $_POST['user_id'];
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    $sql = "INSERT INTO user VALUES('$user_id','$username','$password')";
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "<script> alert('SUCCESSFUL!')</script>";
    }
    else{
	    echo "<script> alert('FAILURE!')</script>";
    }
    }
	?>

</body>
</html>