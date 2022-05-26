<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<!-- đối với form có method = post thì dùng biến $_POST để nhận lấy dữ liệu từ foem dựa theo name của input-->
<p>Username:  <?php echo $_POST['username']; ?> </p>
<p>Password:  <?php echo $_POST['password']; ?> </p>
</body>
</html>