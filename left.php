<div class="ny-left">
<div class="cjjj">
	
	 <h3>news</h3>

	 
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

</div>