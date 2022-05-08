 <?php 
 include 'top.php';
 
?> 	
<div class="ny-main">
<?php 
 include 'left.php';
 
?> 
<div class="ny-right">
<div class="ny-lxwm">

<ul>
	 <?php


$sql="select * from reports ";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

?>
<li><a href="news_article.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></li>
<?php
}
?>
</ul>
</div>

</div>

<div class="clear"></div>
</div> <?php 
 include 'foot.php';
 
?> 	