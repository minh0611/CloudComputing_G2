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
        .img img{
            width:600px;
            height:300px;
            margin:5px 200px;

        }
        #table{
            margin-left:30px;
            
            
        }
        #table input[type=submit]{
            background-color:#ffbe0d;
            width:100px;
            height:40px;
            color:snow;
            font-size:22px;
            font-family:Georgia;

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
        <div id="table">
          <form>
            <table>
              
                <tr style="font-size:18px;">
                    <td><b>LIÊN HỆ</b></td>
                    <td><b>GỬI LIÊN HỆ</b></td>
                </tr>
                <tr>
                    <td style="font-size:18px;"><b>American Pomade Store</b></td>
                    <td><label>Họ tên:*</label></td>
                </tr>
                <tr>
                    <td>Công ty TNHH Thương Mại Dịch Vụ Sản Xuất Gia Phúc Nguyễn</td>
                    <td><input type="text" name=""size="60"/></td>
                </tr>
                <tr>
                    <td>Số: 0315156748 - cấp ngày:20/10/2015</td>
                    <td><label>Điện thoại:</label></td>
                </tr>
                <tr>
                    <td><b><u>CS 1:</u></b> 205/7 Nguyễn Trãi - Phường Nguyễn Cư Trinh - Quận 1 - Tp. HCM</td>
                    <td><input type="text"name="" size="60"/></td>
                </tr>
                <tr>
                    <td rowspan="2"><b><u>CS 2:</u></b> 141A Đường số 79 - Phường Tân Quy - Quận 7 - Tp. HCM</td>
                    <td><label>Email:</label></td>
                    
                </tr>
                <tr>
                    <td><input type="text" name="" size="60" /></td>
                </tr>
                <tr>
                    <td><b><u>Hotline:</u></b> 0933 544 351</td>
                    <td></td>
                </tr>
                <tr>
                    <td><b><u>Email:</u></b> AmericanPomade@gmail.com</td>
                    <td><label>Nội dung:*</label></td>
                </tr>
                <tr>
                    <td><b><u>Opening Hours:</u></b>  24/7</td>
                    <td><textarea rows="5" cols="57"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"name="" value="GỬI" size="30"/></td>
                </tr>
            </table>
          </form>
        </div>
    </div>

</body>
</html>