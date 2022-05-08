 <?php 
 include 'top.php';
 
?> 	
<div class="ny-main">
<?php 
 include 'left.php';

						  $date=date("Y/m/d");
						 $startdate= strtotime("$time");
						 $enddate= strtotime("$date");
						 
						 $days=round(($enddate-$startdate)/3600/24) ;
						 
					 	$xzs=date("H:i:s",time());
		
						
						 
			
			
?> 	
<div class="ny-right">
<div class="ny-zjhz">


<?php 
if(isset($_GET['id'])){


	$sql= "select * from product where id = ".$_GET['id'];
	$check=@mysqli_query($conn,$sql) or exit (mysqli_error());
	$_rows=mysqli_fetch_array($check);
	$title=$_rows['title'];
		$price2=$_rows['price'];
		
		
		
}





if ($_GET['action']=='add'){
	if (empty($_SESSION["uname"])){
			echo "<script type='text/javascript'>alert('plese login ');window.location.href='user_login.php';</script>";
			exit;
		}
		

		$price2=$_rows['price'];
		
		
		$beg=$_POST['btime'];
			$end=$_POST['etime'];
			$price1=$_POST['price'];
			$mprice=$_POST['mprice'];
		
			
					$sj1=strtotime($xzs);
					$sj2=strtotime($beg);
					$sj3=strtotime($end);
					 $days1=round(($sj1-$sj2));
					 $days2=round(($sj1-$sj3));
					 
					 
					 $ye=round(($price1-$mprice));
		
				 
				if($days1<0){
					
					 echo "<script type='text/javascript'>alert('The auction has not yet started');history.go(-1);location.reload();</script>";
				     exit;
					}	
			   if($days2>0){
					
					 echo "<script type='text/javascript'>alert('The auction time has ended');history.go(-1);location.reload();</script>";
					  exit;
					}	
					
		
		
		if($ye<0){
			
		   echo "<script type='text/javascript'>alert('You should offer more than the previous price');history.go(-1);location.reload();</script>";
			exit;
			
			}
		
 
	$sql1 ="insert into dingdan (title,uname,price,pic,pid) values ('{$_POST['title']}','{$_POST['uname']}','{$_POST['price']}','{$_POST['pic']}','{$_POST['pid']}')";

		$result=@mysqli_query($conn,$sql1) or die (mysqli_error());
		if($result){
		echo "<script>alert('bid sucess');history.go(-1);location.reload();</script>";
			}

}







	 

	 




$sql1= "select * from dingdan where title like '$title' order by id desc limit 0,1";
	$check1=@mysqli_query($conn,$sql1) or exit (mysqli_error());
	$_rows1=mysqli_fetch_array($check1);
	$price=$_rows1['price'];

?>



<div id="jtxq">
        <dl>
          <dt><img src="upload/<?php echo $_rows['pic'];?>"></dt>
          <dd>
            <h4><?php echo $_rows['title'];?></h4>
            <font> Begin Time：<?php echo $_rows['btime'];?></font>
               <font> End Time：<?php echo $_rows['etime'];?></font>
             <font>Starting Price：<?php echo $_rows['price'];?></font>
             

                 <form action="?action=add" method="post" enctype="multipart/form-data">
            <font>Location：<?php echo $_rows['location'];?></font>
      
  <font>max price：<?php echo $price;?></font>
 
                    <font>Bid price： <input type="text" name="price" size="10"></font>

                <input type="hidden" name="btime" value="<?php echo $_rows['btime'];?>">
                
                <input type="hidden" name="mprice" value="<?php echo $price?>">
   
               <input type="hidden" name="etime" value="<?php echo $_rows['etime'];?>">
             <input type="hidden" name="title" value="<?php echo $_rows['title'];?>">
			 <input type="hidden" name="uname" value="<?php echo $yhm?>"> 
			  <input type="hidden" name="pic" value="<?php echo $_rows['pic'];?>">
                <input type="hidden" name="pid" value="<?php echo $_rows['id'];?>">
            
                 <br>     <br>     <br>
       
       
       <?php 
				   
				   echo' <input type="submit" name="submit" value="BID" class="tjhy" />';
			
	   
	   ?>
       
      
           </form>  
        
      
            
            
       
          
          </dd>
        
        </dl>
        
        <div class="nrxq">
        
        
        
        
        
        
        <p style="text-align:center;"><img src="upload/<?php echo $_rows['pic'];?>" width="300px"></p>
        <p> <?php echo $_rows['content'];?></p>
        
          

<table border=1px cellpadding="0" cellspacing="0" width="96%" style="margin:10px 0 0 10px;" >   

<tr><td>Username</td><td>Price</td><td>TIME</td></tr>



 <?php



	 $sql="select * from  dingdan where title like '$title'  order by id desc";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['uname'];?></td><td><?php echo $row['price'];?></td><td><?php echo $row['time'];?></td></tr>
	<?php
}
?>
</table>
        
        
             

  
           </div>



</div>

</div>

</div>
<div class="clear"></div>
</div> <?php 
 include 'foot.php';
 
?> 	