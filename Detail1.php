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
        .content {
        	padding-top: 20px;
        }
        .ctleft {
        	float: left;
        	width: 400px;
        	height: 800px;
        	padding-right: 30px;
        	margin-top: 40px;
        }
        .ctright {
        	width: 500px;
            height: 800px;
            margin-top: 50px;
            float: right;
        }
        .ctright p {
        	font-size: 36px;
        	font-family: Calisto MT;

        }
        .button button {
        	width: 220px;
        	font-size: 30px;
        	font-family: Elephant;
        	color: snow;
        	background-color: #7633bd;

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
        <div class="content">
        	<?php
        	$connect = mysqli_connect('localhost','root','','mydl');
              $id = $_GET['id'];
              $sql = "SELECT * FROM product WHERE Product_ID = {$id}";
              $result = mysqli_query($connect,$sql);
              while($row = mysqli_fetch_array($result)){


        	?>
        	<div class="ctleft">
        		<img src="Pomade/<?php echo $row['Product_img']?>" width="400px" height="400px"/>
        	</div>
        	<div class="ctright">
        		<p>Product Name: <?php echo $row['Productname'] ?>
        		</p>
        		<p >Product Price: <p style="color: green;"><?php echo $row['Product_price'] ?> </p></p>
        		<div class="button">
        			<table>
        				<tr>
        					<td><button>Add Cart</button></td>
                            <td><button>Buy Now</button></td>
        				</tr>
        			</table>
        		</div>
        	</div>
        	<?php
               }
        	?>
        </div>
    </div>
</body>
</html>