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

        .header {
            height: 100px;
            margin: auto;
            background-color: lavender;
        }

            .header img {
                float: left;
            }

        #search {
            padding-top: 20px;
            float: right;
        }

            #search input[type=text] {
                height: 50px;
                width: 400px;
            }

            #search input[type=submit] {
                height: 55px;
                width: 80px
            }

        .banner {
        }
        
        .menu {
            height: 50px;
            background-color: grey;
            text-align: center;
            padding-top: 1px;
            
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
                    padding: 1px;
                    color: snow
                }

        .content {
            height: 1000px;
            padding-top: 0px;
        }

        .left {
            width: 250px;
            height: 1000px;
            background-color: lavender;
            float: left
        }

            .left > p {
                background-color: grey;
                font-family: Onyx;
                font-size: 30px;
                text-align: center;
                height: auto;
            }

        .category ul li {
            list-style: none;
        }

            .category ul li a {

                font-size: 30px;
                font-family: Chiller;
                text-decoration: none;
            }

        .category a:hover {
            text-decoration: underline;
        }

        .brand ul li {
            list-style: none;
        }

            .brand ul li a {
                font-size: 20px;
                font-family: Cambria;
                text-decoration: none;
                color: black
            }

        .brand a:hover {
            text-decoration: underline;
        }

        .right {
            width: 750px;
            height: 1000px;
            background-color: lavender;
            float: right;
        }

            .right > p {
                background-color: lightblue;
                font-family: Onyx;
                font-size: 30px;
                text-align: center;
                height: auto;
            }

        .products {
            float: left;
            margin-left: 30px;
        }

            .products a {
                text-decoration: none
            }

            .products p {
                color: black;
                font-size: 18px;
                text-align: center;
            }

        .footer {
            width: 1000px;
            height: 350px;
            background-color:black;
            color:snow;
            padding-top:1px;
            
        }
        .footer h3{
            font-size:40px;
            font-family:Georgia;
            text-align:center;
            color:darkgrey
        }
        .footer p{
            color:darkgrey;
            text-align:center;
            font-size:22px;
        }
        .prlist{
            float: left;
            margin-left: 30px;
        }
	</style>
</head>
<body>
	<!--sd thẻ div để chia bố cục-->
    <div class="wapper">
        <div class="header">
            <!-- check ng dùng log in chưa. rồi thì hiển thị tên ng dùng-->
            <!--
             <?php
              /* session_start();
              if($_SESSION['username']){
               $u = $_SESSION['username'];
               echo "WELCOME $u";*/
              }
             ?>
            -->
             <a href="Index1.php"><img src="Pomade\PoseidonLOGO.jpg" width="100" height="100"/></a>
            <div id="search">
                <form method="get" action="Search1.php">
                    <input type="text" name="user_query"placeholder="Search a Products" />
                    <input type="submit" name="Search" value="Search" />
                </form>
            </div>
        </div>
        <div class="banner">
            <a href=""><img src="Pomade\banner.jpg" width="1000" height="200" /></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="Index1.php">HOME</a></li>
                <li><a href="Introduce1.php">INTRODUCE</a></li>
                <li><a href="Contact1.php">CONTACT</a></li>
                <li><a href="Add_product1.php">ADD PRODUCT</a></li>
                <li><a href="Registerdex1.php">REGISTER</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <p>PRODUCTS TYPE</p>
                <div class="category">
                    <ul>
                        <li><a href="">WAX</a></li>
                        <li><a href="">CLAY</a></li>
                        <li><a href="">POMADE</a></li>
                    </ul>
                </div>
                <p>BRANDS</p>
                <div class="brand">
                    <ul>
                        <li><a href="">REMAKER</a></li>
                        <li><a href="">APESTOMEN</a></li>
                        <li><a href="">KEVIN MURPHY</a></li>
                        <li><a href="">REUZEL</a></li>
                        <li><a href="">DAPPER DAN</a></li>
                        <li><a href="">BONA FIDE</a></li>
                        <li><a href="">ARCADIAN</a></li>
                        <li><a href="">BLUMAAN</a></li>
                        <li><a href="">O'DOUDS</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <p><b>ALL PRODUCTS</b></p>
                <div class="products">
                    <?php
                          
                    $connect = mysqli_connect('localhost','root','','mydl');
                    if(!$connect){
                        echo "Failure Connect";
                    }

                    $sql ="SELECT * FROM product";
                           // Thực thi, truy vấn
                    $result = mysqli_query($connect,$sql);
                    //tìm và trả về kết quả dưới dạng 1 mảng và lấy từ dòng dl
                    while($row = mysqli_fetch_array($result)) 
                    {
                        //lấy ra từng dòng dl truy vấn được và hiển thị
                        //$row['Product_ID'];
                        //$row['Productname'];
                        //$row['Product_price'];
                        //$row['Product_img'];
                    ?>
                    <div class ="prlist"><a href="Detail.php?id=<?php echo $row['Product_ID'] ?>">
                        <img src="Pomade/<?php echo $row['Product_img']?>" width="200px" height="200px"/>
                        <p><?php echo $row['Productname'] ?></p>
                    </a>
                    <p style="color:green"><?php echo $row['Product_price'] ?></p>
                    </div>
                    <?php
                    }
                    ?>
                    
                    
                </div>
                
            </div>
        </div>
        <div class="footer">
            <h3>LIÊN HỆ</h3>
            <p>
                American Store - Wax & Pomade<br />
                Công ty TNHH Thương Mại Dịch Vụ Sản Xuất Gia Phúc Nguyễn<br />
                Số: 0315156748 - Cấp ngày: 20/10/2015<br />
                CS 1: 205/7 Nguyễn Trãi - Phường Nguyễn Cư Trinh - Quận 1 - HCM<br />
                CS 2: 141A Đường số 79 - Phường Tân Quy - Quận 7 - HCM<br />
                Hotline: 0933544351<br />
                Mail: AmericanStore@gmail.com
            </p>
            
        </div>

        
    </div>

</body>
</html>