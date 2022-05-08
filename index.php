 <?php 
 include 'top.php';
 
?>
	
	<div class="main">
	<div class="cjjj">
	 <h3>News</h3>

	 
     <ul>
     
 <?php


	 $sql="select * from reports limit 0,8 ";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<li><a href="news_article.php?id=<?php echo $row['id'];?>"></dt><dd><?php echo $row['title'];?> </a></li>
	<?php
}
?> 
     </ul>

	</div>
	
	<div class="jdt">
	<div class="h-flash">
	<img src="images/banner1.png">
					  </div>
	</div>

	<div class="hzms">
	<h3>BIDING PRODUCT</h3>
	

 <?php


	 $sql="select * from  product where state like 'begin' order by id desc limit 0,6";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<dl><dt><a href="kc_article.php?id=<?php echo $row['id'];?>"><img src="upload/<?php echo $row['pic'];?>"></a></dt><dd><?php echo $row['title'];?></dd></dl>
	<?php
}
?>

	</div>
	


<div class="clear"></div>
</div>
<?php 
 include 'foot.php';
 
?>
