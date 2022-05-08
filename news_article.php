 <?php 
 include 'top.php';
 
?>
	
	<div class="main">

	

	<div class="hzms">
	<h3>News</h3>
	
 <?php


if(isset($_GET['id'])){


	$sql= "select * from reports where id = ".$_GET['id'];
	$check=@mysqli_query($conn,$sql) or exit (mysqli_error());
	$_rows=mysqli_fetch_array($check);
	$title=$_rows['title'];
}
?>
 <br>
    <h4 style="text-align:center;"><?php echo $_rows['title'];?></h4> <br>
        <p style="padding:15px; font-size:14px;"><?php echo $_rows['uname'];?></p> <br>
                <p style="padding:15px; font-size:14px; line-height:24px;"><?php echo $_rows['content'];?></p> <br>


	</div>
	


<div class="clear"></div>
</div>
<?php 
 include 'foot.php';
 
?>
