<?php 
#session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title></title>
    <style type="text/css">
        .wapper {
            width: 1000px;
            margin: auto;

        }

        .menu {
            width: 1000px;
            height: 30px;
            background-color: #010826;
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
            
            width:1000px;
            height:400px;
            margin-top: 5px;
            
        }
        .big{
            margin:2px 150px;
        }
        .one{
            color:darkslategrey
        }
        #two input[type=password]{
            height:35px;

        }
        #two input[type=text]{
            height: 35px;
        }
        #table input[type=submit]{
            width:703px;
            height:70px;
            background-color:orange;
            color:snow;
            font-size:22px;
            font-family: Georgia;
        }
        #check input[type=checkbox]{
            width:13px;
            height:13px;
            margin-right:10px;
        }
        #check{
            color:darkslategrey
        }
        .one td a{
            color:orange;
            text-decoration:none;
            
        }
/* Phần làm icon */
.icon{
    height: 200px;
    size: 100;
    padding-top: 5px;
    padding-left: 750px;
}
/**{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;

}*/

/*body{
  background: #353b48;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}*/

.social-buttons{
    align-items: center;
    justify-content: center;
}
.social-buttons a{
  display: inline-flex;
  text-decoration: none;
  font-size: 18px;
  width: 40px;
  height: 40px;
  color: #fff;
  justify-content: center;
  align-items: center;
  position: relative;
  margin: 0 8px;
}

.social-buttons a::before{
  content: "";
  position: absolute;
  width: 40px;
  height: 40px;
  background: linear-gradient(45deg,#22a6b3,#30336b);
  border-radius: 50%;
  z-index: -1;
  transition: 0.3s ease-in;
}

.social-buttons a:hover::before{
  transform: scale(0);
}

.social-buttons a i{
  transition: 0.3s ease-in;
}

.social-buttons a:hover i{
  background: linear-gradient(45deg,#22a6b3,#30336b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transform: scale(2.2);
}


    </style>
</head>
<body>
    <div class="wapper">
        <div class="menu">
            <a href="Index1.php">
                <img src="Pomade\PoseidonLOGO.jpg" />
            </a>
            <ul>
                <li><a href="Index1.php">HOME</a></li>
                <li><a href="Introduce1.php">INTRODUCE</a></li>
                <li><a href="Contact1.php">CONTACT</a></li>
                <li><a href="Logindex1.php">LOG IN</a></li>
                <li><a href="Registerdex1.php">REGISTER</a></li>
            </ul>
        </div>
    
        <div class="img">
            <img src="Pomade\Poseidon.jpg" />
        </div>
        <h3 style="font-family:'Calisto MT'; font-size:36px;text-align:center">ĐĂNG NHẬP</h3>
        <div class="big">
            <form method="post">
                <table>
                    <tr class="one">
                        <td colspan="2"><label><b>TÊN ĐĂNG NHẬP HOẶC ĐỊA CHỈ EMAIL *</b></label></td>
                    </tr>
                    <tr id="two">
                        <td colspan="2"><input type="text" name="nameormail"size="94"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="one">
                        <td colspan="2"><label><b>MẬT KHẨU</b></label></td>
                    </tr>
                    <tr id="two">
                        <td colspan="2"><input type="password"name="pass"size="94"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr><td id="table" colspan="2"><input type="submit"name="Zo"value="ĐĂNG NHẬP"/></td></tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td id="check"><input type="checkbox"/><label><b>GHI NHỚ MẬT KHẨU</b></label></td>
                        <td class="one" style="text-align:right;"><a><b>QUÊN MẬT KHẨU?</b></a></td>
                    </tr>
                </table>
            </form>
            <?php
            # kết nối hướng thủ tục
$connect = mysqli_connect('localhost','root','','mydl');
if(!$connect){
    echo "Ket noi that bai!<br />";
}
// Neu click vao nut login thi moi thuc hien
if(isset($_POST['Zo'])){
$username = $_POST['nameormail'];
$password = $_POST['pass'];
//lay tu bang user cot username = gia tri username nhap tu form va cot password = gia tri password nhap tu form
$sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
//thu thi truy van
$result = mysqli_query($connect, $sql);
//tra ve ket qua, chinh la cac dong dc truy van
$row = mysqli_num_rows($result);
// Neu $row > 0 --->co tren 1 dong trong CSDL trung voi du lieu nhap vao form -> Dang nhap thanh cong
if($row > 0){
   echo "<script> alert('SUCCESSFUL!')</script>";
   echo"<script>window.open('index1.2.php','_self')</script>"; # câu này để sau khi đăng nhạp thì vào trang chủ
   //lưu tên đăng nhập vào biến toàn cục $_SESSION
   # $_SESSION['username'] = $username;
}
else{
    echo "<script> alert('FAILURE!')</script>";
}
}
            ?>
        </div>
    </div>
    <br />
    <br />
<div class="icon">
    <div class="social-buttons">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</div>
</body>
</html>