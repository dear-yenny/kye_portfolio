<?
	session_start();
?>

<style>
	#t_login3 {
		position: relative;
		bottom: 390px;
	}
	.texts {
		font-size: 1.3rem;
		font-family: "Cafe24SsurroundAir";
		text-align: center;
		margin: 0 auto;
		color: #000;
	}
</style>


	<div id="t_login3">
	  <?
    if(!$_SESSION['userid'] )
	{
?>
	 <span> </span>
<?
	}
	else
	{
?>
		<span class="texts"><?=$_SESSION['username']?> 님</span>
		<span class="texts">안녕하세요.</span>
<?
	}
?>
	  
  </div>
  
