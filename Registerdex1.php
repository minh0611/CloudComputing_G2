<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
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
            <img src="Pomade\poseidon.jpg" />
        </div>
        <h3 style="font-size:36px; text-align:center; font-family:'Calisto MT'">REGISTER</h3>
        <div id="table">
            <form method="post">
                <table>
                    <!--<tr>
                        <td colspan="2"><label><b>FIRST NAME</b></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="" size="70" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label><b>LAST NAME</b></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="" size="70" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label><b>E-MAIL</b></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="" size="70" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label><b>PASSWORD</b></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="" size="70" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name=""value="REGISTER" /></td>
                    </tr>
                    -->
                    <tr>
                        <td colspan="2"><label><b>USER ID:</b></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="id" size="70"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label><b>USERNAME:</b></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="name" size="70"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label><b>PASSWORD:</b></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="pass" size="70"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="register"value="REGISTER" /></td>
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
        </div>
    </div>
    <br />
    <br />
</body>
</html>