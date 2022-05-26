<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.wapper {
            width: 1000px;
            margin: auto;
        }
        .menu {
            width: 1000px;
            height: 30px;
            background-color: grey;
            text-align: center;
        }

        .menu img {
            float: left;
            width: 50px;
            height: 30px
        }

        .menu ul li {
            list-style: none;
            text-align: center;
            display: inline-table;
        }

        .menu ul li a {
            text-decoration: none;
            font-size: 20px;
            margin: 30px;
            text-transform: capitalize;
            padding: 5px;
            color: snow;
        }

        .img img {
            width: 800px;
            height: 350px;
            margin:2px 100px;
        }
        #table{
            margin:2px 250px;
        }
        #table label{
            height:30px;
            color:darkslategrey;
            
        }
        #table input[type=text]{
            height:30px;

        }
        #table input[type=password]{
            height: 30px;
        }
        #table input[type=submit]{
            color:snow;
            background-color:orange;
            height:50px;
            width:503px;
            font-size:22px;
            font-family:'Comic Sans MS'
        }
	</style>
</head>
<body >
<div class="wapper">
        <div class="menu">
            <a href="Index1.php">
                <img src="Pomade\PoseidonLOGO.jpg" />
            </a>
            <ul>
                <li><a href="Index1.php">Trang chủ</a></li>
                <li><a href="Introduce1.php">Giới thiệu</a></li>
                <li><a href="Contact1.php">Liên hệ</a></li>
                <li><a href="Logindex1.php">Đăng nhập</a></li>
                <li><a href="Registerdex1.php">Đăng ký</a></li>
            </ul>
        </div>

        <div class="img">
            <img src="Pomade\poseidon.jpg" />
        </div>
        <h3 style="font-size:36px; text-align:center; font-family:'Calisto MT'">ADD PRODUCT</h3>
   <div id="table">
	<!--làm giống form Đăng ký tài khoản-->
    <form method="post" enctype="multipart/form-data">
	  <table>
		<tr> 
			<td colspan="2"> Product ID</td>
        </tr>
        <tr>
			<td colspan="2"><input type="text" name="product_id" size="70"> </td>
		</tr>
		<tr>
			<td colspan="2">Product Name</td>
		</tr>
		<tr>
			<td colspan="2"><input type="text" name="product_name" size="70"></td>
		</tr>
		<tr>
			<td colspan="2">Product Price</td>
		</tr>
		<tr>
			<td colspan="2"><input type="text" name="product_price" size="70"></td>
		</tr>
		<tr>
			<td colspan="2">Product Image</td>
		</tr>
		<tr>
			<td colspan="2"><input type="file" name="product_img" size="70"></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"><input type="submit" name="add_product" value="ADD" size="70"></td>
		</tr>
	  </table>
    </form>
   </div>
<?php
$connect = mysqli_connect('localhost','root','','mydl');
    if(!$connect){  # dấu ! là chỉ khi nào thất bại thì mới thông báo còn thành công thì k
        echo "Ket noi that bai!";
    }
    if(isset($_POST['add_product'])){
    	$product_id = $_POST['product_id'];
    	$product_name = $_POST['product_name'];
    	$product_price = $_POST['product_price'];
    	//lấy ảnh từ folder bất kì
    	$product_img = $_FILES['product_img']['name'];
        //di chuyển ảnh từ thư mục bất kỳ sang thư muacj tmp_name của htdocs
        $product_img_tmp = $_FILES['product_img']['tmp_name'];

        //đưa ảnh từ thư muacj tmp sang thư mục cần lưu
        move_uploaded_file($product_img_tmp, "Pomade/$product_img");

        //thêm sp vào csdl
        $sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_price','$product_img')";
        $sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_price','$product_img')";
        $result =mysqli_query($connect, $sql);
        if($result){
        	echo "<script>alert('Thêm mới sản phẩm thành công') </script>";
        	echo"<script> window.open('index.php','_self') </script>";
        }
        else{
        	echo"<script>alert('Thêm mới lỗi') </script>";
        }
    }
?>
</body>
</html>