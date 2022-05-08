<?php 		

if ($_GET['action']=='reged'){
	$_clean = array();
	$_clean['username'] = _check_username($_POST['username'],2,20);
	$_clean['password'] = _check_password($_POST['password'],$_POST['repassword'],3);
   $check = "select yhm from users where yhm = '{$_clean['username']}'";
   
   $res=@mysqli_query($conn,$check) or exit (mysqli_error());
	if(mysqli_fetch_array($res)){
	echo "<script type='text/javascript'>alert('不好意思！您输入的用户名已经被注册');history.back();</script>";
  }
  else{
    $sql="insert into users (yhm,mm,tel,email,role) values ('{$_clean['username']}','{$_clean['password']}','{$_POST['tel']}','{$_POST['email']}','{$_POST['role']}')" ;	
    $result=@mysqli_query($conn,$sql) or exit (mysqli_error());
    if($result){
      echo "<script type='text/javascript'>alert('注册成功,前往登录');window.location.href='user_login.php';</script>";
    }
  }
  


};

?>
<form action="reg.php?action=reged" method="post" name="reg" id="reg">
      <table width="482" border="0" align="center">
        <tr>
          <td width="86" height="29">用户名: </td>
          <td width="386"><input type="text" name="username" class="text" required/></td>
        </tr> 
        <tr>
          <td width="86" height="29">角色: </td>
          <td width="386"><select name="role">
                             <option value="读者">读者</opiton>
                             <option value="作者">作者</opiton>

          </select></td>
        </tr> <br>
        <tr>
          <td height="28">密码: </td>
          <td><input type="password" name="password" class="text"  required/></td>
        </tr><br>
        <tr>
          <td height="27">确认密码:</td>
          <td><input type="password" name="repassword" class="text" required /></td>
        </tr><br>
     	 <tr>
          <td height="28">电话:</td>
          <td><input type="tel" name="tel" class="text" id="email" /> </td>
        </tr>    
        
		 <tr>
          <td height="28">邮箱:</td>
          <td><input type="email" name="email" class="text" id="email" /> </td>
        </tr>       <tr>
          <td height="38" colspan="2" align="center"><input type="submit" class="submit" value="提交" /></td>
        </tr>
      </table>
    </form>