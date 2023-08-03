
	<div id="t_login2">
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
	<a href="login_form.php">
		<img src="./H_img/icon3.png" alt="로그인 아이콘">
		<span class="text1">로그인</span>
	</a>
	
<?
	}
	else
	{
?>
		<img src="./H_img/icon3.png" alt="로그인 아이콘">
		<span class="text1">마이페이지</span>
<?
	}
?>
	  
  </div>
  
