<!DOCTYPE html>
<html lang="en">
<head>
<title>ADMIN</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="admin.css">
<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
</style>
</head>
<body>


<div class="wap">
   <div class="head">
  <h3>ADMIN</h3> <p> <?Php    
  
    include '../connect.php';  
  
  $yhm=$_SESSION["uname"];
  
   $sql="select * from users where yhm like '$yhm' ";
$result=@mysqli_query($conn,$sql);
$row1=mysqli_fetch_array($result);

echo $row1['department'];
echo "--";
echo $row1['role'];
echo "--";
echo $row1['yhm'];
  

  
   ?> &nbsp;ADMIN</p>

  </div>
    <div class="clear"></div>
<div class="nav">
  <ul>
  <li class="active" ><a href="#"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li ><a href="admin.php"><i class="icon icon-info-sign"></i> <span>USER</span></a> </li>

    <li ><a href="admin_news.php"><i class="icon icon-info-sign"></i> <span>News</span></a> </li>
        <li ><a href="admin_product.php"><i class="icon icon-info-sign"></i> <span>BID PRODUCT</span></a> </li>

         
      <li ><a href="admin_statistics.php"><i class="icon icon-info-sign"></i> <span>BID Statistics</span></a> </li>


    
   
       




    <li><a href="../login_out.php"><i class="icon icon-file"></i> <span>EXIT</span></a></li>
    
   
  </ul>
		
</div>
<div class="main">