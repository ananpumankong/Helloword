<?php
mysql_connect("localhost","root","");
mysql_select_db("my_database_gis");
$strSQL = "SELECT * FROM orders";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_results='UTF8'");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>adminbuy_page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="#"><img src="image/logo.png" alt="" /></a>
						</div>
						
					
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
						
							<ul class="nav navbar-nav">
							
							
								<li><a href="#"><i class="glyphicon glyphicon-user"></i>สวัสดีคุณ Admin</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> ออกจากระบบ</a></li>
							</ul>
							
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
	
	<ul class="nav nav-tabs">
  <li role="presentation"><a href="test.php">ตรวจสมาชิก<span class="badge">5</span></a></li>
  <li role="presentation"><a href="admin.php">ตรวจสินค้า</a></li>
  <li role="presentation"><a href="admin2.html">อัพเดทรายการสินค้า</a></li>
  <li role="presentation"class="active"><a href="adminbuy.php">รายการสั่งซื้อ<span class="badge">2</span></a></li>
  <li role="presentation"><a href="admin3.php">จำนวนการสั่งซื้อ</a></li>
 <li role="presentation" ><a href="admincon.php">ติดต่อกลับ</a></li>
  
</ul>

<h2>รายการสั่งซื้อสินค้า</h2>
						<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("my_database_gis");
$strSQL = "DELETE FROM orders ";
$strSQL .="WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "ระบบทำการลบข้อมูลเรียบร้อยแล้ว";
	header("location:adminbuy.php");
}
else
{
	echo "Error Delete [".$strSQL."]";
}
mysql_close($objConnect);
?>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("my_database_gis");
$strSQL = "DELETE FROM orders_detail ";
$strSQL .="WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "ระบบทำการลบข้อมูลเรียบร้อยแล้ว";
	header("location:adminbuy.php");
}
else
{
	echo "Error Delete [".$strSQL."]";
}
mysql_close($objConnect);
?>
					
					
					<div class="col-xs-12 .col-sm-12">
					<hr>
					</hr>
					</div>
					


        

            
    <!-- /.container -->
	<footer id="footer">
		
    <!-- /.container -->
	</footer><!--/Footer-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>