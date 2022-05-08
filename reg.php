<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>bid</title>
 <style>
 *{margin:0; padding:0;}
 body{background:url(images/bg2.jpg) no-repeat top center; font-size:14px;}
 .bd1{width:1200px;margin:0 auto; position:relative;}
 .bd1 h3{ border-bottom:2px solid #000; width:350px;padding:0 0 20px 0;}
 .bd2{ width:380px;height:400px; padding:20px 0 0 50px; background:#fff; position:absolute; top:100px; left:400px;border-radius:7px;box-shadow: #666 0px 0px 3px; opacity:0.8;}
 td{padding:4px;}
 </style>

</head>
 
<body >
		    <?php 
 
include 'connect.php';
 
?>

<?php 		

if ($_GET['action']=='reged'){
	$_clean = array();
	$_clean['username'] = _check_username($_POST['username'],2,20);
	$_clean['password'] = _check_password($_POST['password'],$_POST['repassword'],3);
   $check = "select yhm from users where yhm = '{$_clean['username']}'";
   
   $res=@mysqli_query($conn,$check) or exit (mysqli_error());
	if(mysqli_fetch_array($res)){
	echo "<script type='text/javascript'>alert('sorry your name has been registered');history.back();</script>";
  }
  else{

    $sql="insert into users (yhm,mm,tel,email,role) values ('{$_clean['username']}','{$_clean['password']}','{$_POST['tel']}','{$_POST['email']}','{$_POST['role']}')" ;	
    $result=@mysqli_query($conn,$sql) or exit (mysqli_error());
    if($result){
      echo "<script type='text/javascript'>alert('sucess');window.location.href='user_login.php';</script>";
    }
  }
  


};

?>
<div class="bd1">
<div class="bd2">


<form action="reg.php?action=reged" method="post" name="reg" id="reg" enctype="multipart/form-data">
  <h3>Regsiter</h3>
 <br>
      <table width="482" border="0" align="center">
        <tr>
          <td width="86" height="29">Username: </td>
          <td width="386"><input type="text" name="username" class="text" required/></td>
        </tr> 
         <tr>
          <td width="86" height="29">role: </td>
          <td width="386"><select name="role">
             <option value="user">user</option>
  
       </select></td>
        </tr> 
      
        <tr>
          <td height="28">password: </td>
          <td><input type="password" name="password" class="text"  required/></td>
        </tr>
        <tr>
          <td height="27">repassword:</td>
          <td><input type="password" name="repassword" class="text" required /></td>
        </tr>
     	 <tr>
          <td height="28">tel:</td>
          <td><input type="tel" name="tel" class="text" id="email" /> </td>
        </tr>    
        
		 <tr>
          <td height="28">email:</td>
          <td><input type="email" name="email" class="text" id="email" /> </td>
        </tr>       <tr>
          <td height="38" colspan="2" align="center"><input type="submit" class="submit"  class="tj" value="submit" /></td>
        </tr>
      </table>
    </form>
 </div>
  </div>

	</body>
</html>