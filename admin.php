<?php
mysql_connect("localhost","root","");
mysql_select_db("my_database_gis");
$strSQL = "SELECT * FROM products";
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

    <title>admin_page</title>

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
  <li role="presentation"class="active"><a href="admin.php">ตรวจสินค้า</a></li>
  <li role="presentation"><a href="admin2.html">อัพเดทรายการสินค้า</a></li>
  <li role="presentation"><a href="adminbuy.php">รายการสั่งซื้อ<span class="badge">2</span></a></li>
  <li role="presentation"><a href="admin3.php">จำนวนการสั่งซื้อ</a></li>
  <li role="presentation" ><a href="admincon.php">ติดต่อกลับ</a></li>
  
</ul>

<h2>ระบบตรวจสินค้า</h2>
					
					
					<div class="col-xs-12 .col-sm-12">
					<hr>
					</hr>
					</div>
					
					
<div class="col-xs-12 .col-sm-12">
<div class="panel panel-default">

  <!-- Default panel contents -->
  <div class="panel-heading">ตารางตรวจสอบระบบสินค้า</div>
  <div class="panel-body">
    <p>     <table class="table table-condensed">
    <thead>
      <tr>
        <th>ภาพสินค้า</th>
        <th>รหัสสินค้า</th>
		<th>ชื่อสินค้า</th>
		<th>ราคา</th>
		<th>ประเภท</th>
		<th>รายละเอียดสินค้า</th>
		<th>EDIT</th>
		<th>DELETE</th>
		<th></th>
		
      </tr>
	  <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
  <tr>
	<th><img src="showpic.php?id=<?php echo $objResult['PID']; ?>" style="width: 72px; height: 72px;""></th>
    <th>#<?php echo $objResult["PID"];?></th>
    <th><?php echo $objResult["PName"];?></th>
    <th><?php echo $objResult["Price"];?>บาท</th>
	<th>ประเภทที่ : <?php echo $objResult["Type"];?></th>
	 <th><?php echo $objResult["Detail"];?></th>
    <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='adminbuydelete.php?OrderID=<?php echo $objResult["ID"];?>';}">EDIT</a></td>
	<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='productdelete.php?PID=<?php echo $objResult["PID"];?>';}">Delete</a></td>
  </tr>
  <?php
  }
  ?>
  
    </thead>
	</table></p>
  </div>

  <!-- Table -->
  
</div>
						
						
</div>
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
