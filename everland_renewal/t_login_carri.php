<? 
	session_start(); 
?>
<style>
	.Y_logname {
		font-size: 0.9rem;
	}
	.Y_logout {
  	font-size: 0.9rem;
	}


.k-navi {
  height:50px;
  width:100%;
}
.k-navi > li {
  float:right;
  width:35px;
  position:relative;
}
.k-navi > li a {
  display:block;
  line-height:50px;
	text-align:center;
}

.k-navi > li .k-sub1 {
  position:absolute;
  left:0;
  top:30px;
  display:none;
  z-index:9999;
  width:0px;
}
.k-navi .k-sub1 li a {
  display:block;
  height:25px;
  line-height:25px;
  padding:0 9px;
}

a, li {
	text-decoration: none;
	color: #000;
}

#k-navi > div {
	float: right;
	vertical-align: bottom;
}

 .k-sub1  {
	display: none;
	position: absolute;
}
</style>

<script>
	// 언어 아이콘 슬라이드
$(function(){
    $(".lan > a").mouseenter(function(){
        $(this).next().stop().slideDown(400);
    });

    $(".lan > a").mouseleave(function(){
        $(this).next().stop().slideUp(500);
        // $(this).children().stop().slideUp(500);
        //위에 두가지로도 적용가능 밑에 값이랑 다 같은 의미
        // $(this).find(".k-sub1").stop().slideUp(400);
    });
});
</script>

<!-- <div id="t_login"> -->
  
	<ul class="k-navi">
	  
  <?
    if(!$_SESSION['userid'] )
	{
?>
    <li><a href="login_form.php"><img src="H_img/cb_icon2.png" alt="icon"></a></li>

    <li class="lan"><a href="#" ><img src="H_img/cb_icon1.png" alt="icon"></a>
      <ul class="k-sub1">
        <li><a href="#"><img src="H_img/kor.png" alt="icon"></a></li>
        <li><a href="#"><img src="H_img/eng.png" alt="icon"></a></li>
        <li><a href="#"><img src="H_img/chi.png" alt="icon"></a></li>
      </ul>
    </li>
<?
	}
	else
	{
		?>
			<a href="#" class="Y_logname"><?=$_SESSION['username']?> 님</a>
			<a href="logout_ever.php" class="Y_logout">로그아웃</a>

    	<li><a href="#" class="lan"><img src="H_img/cb_icon1.png" alt="icon"></a>
      	<ul class="k-sub1">
        	<li><a href="#"><img src="H_img/kor.png" alt="icon"></a></li>
        	<li><a href="#"><img src="H_img/eng.png" alt="icon"></a></li>
        	<li><a href="#"><img src="H_img/chi.png" alt="icon"></a></li>
      	</ul>
    	</li>
			
			<?
	}
	?>
	  
	</ul>
  <!-- </div> -->
  
