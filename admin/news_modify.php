
<?php 
include 'top.php';
 	?>
<div class="ny-right">



     <div id="twjs">


<style type="text/css">
td {padding:10px;}
</style>

<style type="text/css">
td {font-size:14px;padding:10px;}
h3{ font-size:16px;}
</style>

  <h3>news modify</h3>





<?php 

 if(isset($_GET['id'])){
    $sql= "select * from reports where id = ".$_GET['id'];
    $check=@mysqli_query($conn,$sql) or exit (mysqli_error());
    $_rows=mysqli_fetch_array($check);
    

 }
 else{

 }
?>


<?php 
if ($_GET['action']=='edit'){

		


	$sql1="update reports set title='{$_POST['title']}',uname='{$_POST['uname']}',content='{$_POST['nr']}' where id = ".$_GET['id'];
	
    $result1=@mysqli_query($conn,$sql1) or die (mysqli_error($result1));
  if($result1){
    echo "<script>alert('修改成功请刷新');history.go(-1);location.reload();</script>";
   }
}

 ?>


  <form action="?action=edit&id=<?php echo $_GET['id'];?>" method="post"  >
    <table border=1px cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td height="28">title：</td>
                    <td><input type="text" name="title" value="<?php echo $_rows['title'];?>" /></td>
                </tr>
              
              
                    <tr>
                    <td height="28">username：</td>
                    <td><input type="text" name="uname" value="<?php echo $_rows['uname'];?>" /></td>
                </tr>
              
       
       
                
         <tr>
                    <td height="25">content：</td>
                    <td>   <textarea name="nr" cols="70" rows="5"><?php echo $_rows['content'];?></textarea></td>
                </tr>
			
              

               
              
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="modify" />
                    </td>
                </tr>
 
        </form>

</table>
  
    </div>

   </div>
     
 
    <hr/>
   
        
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">
  <p>版权所有 翻版必究</p>      
</div>
</div>

<!--end-Footer-part-->

</body>
</html>
