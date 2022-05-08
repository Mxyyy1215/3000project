 <?php 
 include 'top.php';
 
?>
	
	<div class="main">
	<?php 
 include 'left.php';
 
?> 
	

	<div class="hzms">
	<h3>人才推荐</h3>
	

 <?php


	 $sql="select * from lost where lx like '求职'order by id desc limit 0,6";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<dl><dt><a href="kc_article.php?id=<?php echo $row['id'];?>"><img src="upload/<?php echo $row['pic'];?>"></a></dt><dd><?php echo $row['title'];?> &nbsp;<?php echo $row['uname'];?></dd></dl>
	<?php
}
?>

	</div>
	


<div class="clear"></div>
</div>
<?php 
 include 'foot.php';
 
?>
