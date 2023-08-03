<? 
	session_start(); 
?>
<style>
	.Y_logname {
		font-size: 0.75rem;
		display: block;
		margin-bottom: 2px;
	}
	.Y_logout {
  	font-size: 0.75rem;
		margin-left: 1px;
		vertical-align: sub;
	}



.k-navi {
  height:40px;
  width:100%;
}
.k-navi > li {
  float:right;
  width:35px;
  position:relative;
}
.k-navi > li a {
  display:block;
  line-height:40px;
	text-align:center;
}
/* .k-navi > li a img {
	vertical-align: top;
} */
/* .hamburger img {
	padding-top: 1px;
} */

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
/*.k-sub1:focus ~ .k-sub1 > li {
	display: block;
	transition: all 0.5s ease-in-out;
} */


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

  

<ul class="k-navi">

<?
  if(!$_SESSION['userid'] )
	{
?>	
		
			
			<li>
				<a class="hamburger" href="#"><img src="./H_img/icon4.png" alt="icon"></i></a>
			</li>
          
			<li class="lan">
				<a href="#">
					<img src="H_img/cb_icon1.png" alt="icon">
				</a>
				
				<ul class="k-sub1">
					<li>
						<a href="#"><img src="H_img/kor.png" alt="icon"></a>
					</li>
					<li>
						<a href="#"><img src="H_img/eng.png" alt="icon"></a>
					</li>
					<li>
						<a href="#"><img src="H_img/chi.png" alt="icon"></a>
					</li>
				</ul>
			</li>

			<li>
				<a href="login_form.php"><img src="H_img/cb_icon2.png" alt="icon"></a>
			</li>

			

<?
	}
	else
	{
?>
		
			
			<!-- <a href="#" class="Y_logname"><?=$_SESSION['username']?> 님</a> -->
			<a href="logout_ever.php" class="Y_logout">로그아웃</a>

			<li>
				<a class="hamburger" href="#"><img src="./H_img/icon4.png" alt="icon"></i></a>
			</li>

			<li class="lan">
				<a href="#">
					<img src="H_img/cb_icon1.png" alt="icon">
				</a>
				
				<ul class="k-sub1">
					<li>
						<a href="#"><img src="H_img/kor.png" alt="icon"></a>
					</li>
					<li>
						<a href="#"><img src="H_img/eng.png" alt="icon"></a>
					</li>
					<li>
						<a href="#"><img src="H_img/chi.png" alt="icon"></a>
					</li>
				</ul>
			</li>

			
		
	
          
	
<?
	}
?>
	  
	</ul>
  <!-- </div> -->
  
