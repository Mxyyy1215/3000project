<?php
include("conn.php");
$buynum=$_POST['buynum'];
$lowprice=$_POST['lowprice'];
$price=$_POST['price'];
$oneprice=$_POST['oneprice'];

$id=$_POST['id'];
if(!isset($_SESSION['yonghu'])){
		echo '<script type="text/javascript">alert("You are not logged in yet!");</script>';
	    echo '<script type="text/javascript">location.href="login.php";</script>';
		}
		
	if($buynum<$lowprice){
		echo '<script type="text/javascript">alert("Your bid cannot be less than the minimum bid!");</script>';
	    echo '<script type="text/javascript">location.href="news.php?eaid='.$id.'";</script>';
		}	
if($oneprice==1){
 	 $sql3="select * from tb_saleuser where goodid='$id' and user='$_SESSION[yonghu]' "; //查询数据
	 $rs3=mysqli_query($link,$sql3);//执行sql语句
	  $num3=mysqli_num_rows($rs3); //统计查询多少数据
	  if($num3>0){
		  echo '<script type="text/javascript">alert("You have already bid, please do not bid again!");</script>';
	    echo '<script type="text/javascript">location.href="news.php?eaid='.$id.'";</script>';
		  }else{
			  
			 	    $sql2="select * from tb_sale where goodid='$id' "; //查询数据
					 $rs2=mysqli_query($link,$sql2);//执行sql语句
					 $num2=mysqli_num_rows($rs2); //统计查询多少数据
					 $row=mysqli_fetch_array($rs2);
					 
				 if($num2>0){
					$sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$buynum','$_SESSION[yonghu]',now())";
					$rsq=mysqli_query($link,$sqlq);//执行sql语句
					$titles=$row['goodprice']+$buynum;	
					$sqls="update tb_sale set goodprice='$titles' where goodid='$id'";
					$rss=mysqli_query($link,$sqls);//执行sql语句
				 }else{
					$sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$buynum','$_SESSION[yonghu]',now())";
					$rsq=mysqli_query($link,$sqlq);//执行sql语句 
					$titles=$price+$buynum;
					 $sqls="INSERT INTO tb_sale (`goodid`,`goodprice`)  VALUES('$id','$titles')";
					$rss=mysqli_query($link,$sqls);//执行sql语句
					 }
				  
			  
		}
	}else{
		
		
			
		
	 $sql2="select * from tb_sale where goodid='$id' "; //查询数据
	 $rs2=mysqli_query($link,$sql2);//执行sql语句
 	 $num2=mysqli_num_rows($rs2); //统计查询多少数据
	 $row=mysqli_fetch_array($rs2);
	 
	 if($num2>0){
 		    $sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$buynum','$_SESSION[yonghu]',now())";
		  	$rsq=mysqli_query($link,$sqlq);//执行sql语句
			$titles=$row['goodprice']+$buynum;	
			$sqls="update tb_sale set goodprice='$titles' where goodid='$id'";
			$rss=mysqli_query($link,$sqls);//执行sql语句
		 }else{
			$sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$buynum','$_SESSION[yonghu]',now())";
		 	$rsq=mysqli_query($link,$sqlq);//执行sql语句 
			$titles=$price+$buynum;
		    echo $sqls="INSERT INTO tb_sale (`goodid`,`goodprice`)  VALUES('$id','$titles')";
			$rss=mysqli_query($link,$sqls);//执行sql语句
			 }
			 
			 
			 }	
?> 