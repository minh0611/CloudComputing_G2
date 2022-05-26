<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydl";
# kết nối hướng thủ tục
$connect = mysqli_connect($servername,$username,$password,$database);
if($connect){
	echo "Ket noi thanh cong!<br />";
}
else{
	echo "Ket noi that bai!<br />";
}
# thêm dl vào bảng csdl = gõ code
$sql = "INSERT INTO user values(5,'Dochet','R456')";
#dùng hàm mysqli_query để thực thi câu lệnh sql
$result = mysqli_query($connect,$sql);
if($result){
	echo "Successful!<br />";
}
else{
	echo "Failure!<br />";
}
?>