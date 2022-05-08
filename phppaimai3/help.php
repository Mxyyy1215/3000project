<?php
include("conn.php");
    $sql="select * from tb_study "; //查询10条数据库内容
	$rs=mysqli_query($link,$sql);
	$nowdate= date('Y-m-d');
	while($row=mysqli_fetch_array($rs)){
		if($row['overtime']<$nowdate){
 			mysqli_query($link,"update tb_study set zt='0' where eaid='$row[eaid]'");
 			}
		}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GU2</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type=text/javascript src="js/jquery.flexslider.js"></script>
</head>

<body>
 <div class="yonghudenlgu">
   <div class="headmain">
   
      <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
  
    <a href='seller/index.php'>Merchants landing</a>
   <a href='seller/res.php'>Business registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"/></dt>
      <dd> <a  class="cur" href="index.php">Home page</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a><a href="help.php">Help</a> </dd>
    </dl>
  </div>
</div>

<div class="main">

 
<div class="indexright">
  <div class="titlehote">
    <h3>Frequently Asked Questions</h3>
  </div>
  
   </div>
     <h3>helphelphelp</h3>
  
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>
<script>
	$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			directionNav: false,  
			 controlNav: true,    
			start: function(slider){
 			}
		  });

  
		  
 		 
    })
 
</script>