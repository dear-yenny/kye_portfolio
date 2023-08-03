<? 
	session_start(); 
?>
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>html5문서</title>
		<link rel="stylesheet" href="./css/reset.css">
		<!-- <link rel="stylesheet" href="./css/logo_everland2.css"> -->
		<!--<link rel="stylesheet" href="css/member.css">-->
	  <!-- <link rel="stylesheet" href="../css/common.css"> -->
		
		
		<style>

			@import url('https://fonts.googleapis.com/css?family=Titan+One');
			@import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap');
			@font-face {
			  font-family: 'Cafe24SsurroundAir';
			  src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2105_2@1.0/Cafe24SsurroundAir.woff') format('woff');
			  font-weight: normal;
			  font-style: normal;
			}	
			@font-face {
			  font-family: 'Cafe24Ssurround';
			  src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2105_2@1.0/Cafe24Ssurround.woff') format('woff');
			  font-weight: normal;
			  font-style: normal;
			}
			

			*, *::after, *::before {
  			box-sizing: border-box;
			}

		a {
  		text-decoration: none;
		}

		body {
  		max-width: 640px;
  		width: 100%;
  		margin: 0;
  		padding: 0;
  		/* font-size: 1rem; */
		}

		#header {
  		width: 100%;
  		margin-top: 10%;
  		margin-bottom: 50px;
		}
		.prev {
  		position: absolute;
  		left: 5%;
		}
		.prev img {
  		width: 50%;
		}
		#header p {
  		font-size: 1.2rem;
  		text-align: center;
  		font-family: "Cafe24SsurroundAir";
  		top: 5%;
  		/* font-weight: bold; */
		}

		#logo {
			width: 80%;
			margin: 0 auto;
			text-align: center;
		}
		#logo a img {
			width: 50%;
		}

		#search_pw {
			width: 80%;
			margin: 10px auto;
			margin-top: 50px;
		}
		#search_pw form {
			width: 100%;
			margin: 20px;
		}
		#search {
			font-family: "Cafe24SsurroundAir", aral;
		}
		#search #id {
			margin-bottom: 10px;
		}
		#search #id label {
			border-bottom: 1px solid #000;
		}
		#search input {
  		width: 100%;
  		border: none;
  		border-bottom: 1px solid #666;
  		padding-bottom: 10px;
  		margin: 15px auto;		
			font-size: 0.9rem;
  		font-family: "Cafe24SsurroundAir", aral;
		}
			

		#button {
  		text-align: center;
  		margin: 50px 0 20px 0;
  		width: 100%;
		}
		#button input {
  		border: none;
  		width: 100%;
  		background-color: #FF7878;
  		color: #fff;
  		font-size: 0.9rem;
  		letter-spacing: 0.3rem;
  		font-weight: bold;
  		padding: 8px 0;
  		font-family: "Cafe24SsurroundAir", aral;
		}	
			
		</style>
		
		 
<script>
/*
 function search() {
  var frm = document.id_search;
  if (frm.name.value.length < 1) {
   alert("이름을 입력해주세요");
   return;
  }
  
  frm.method = "post";
  frm.action = "./id_search.php"; 
  frm.submit(); 
 }*/
 </script>
	</head>
	
	<body>
	<header id="header">
    <a href="login_form.php">
    <div class="prev">
      <img src="./img_icon/arrow_prev.png" alt="prev">
    </div>
    </a>
    <p>비밀번호 찾기</p>
  </header>

	<div id="logo">
    <!-- <div class="container">
      <a href="index.html">
        <h1>EVERLAND</h1>
      </a>
    </div> -->
		<a href="index.html">
			<img src="Y_img/ever_logo.png" alt="logo">
		</a>
  </div>

		<section id="search_pw">
    	<form action="login_ever.php" method="post" class="login">
      	<div id="search">
        	<div class="id">
        	  <input type="text" name="id" id="id" placeholder="아이디">
        	</div>
        	
					<div class="name">
        	  <input type="text" name="name" id="name" placeholder="이름">
        	</div>

        	<div class="ph">
        	  <input type="text" name="ph" id="ph" placeholder="전화번호">
        	</div>

        	<div id="button">
        	  <input type="submit" value="비밀번호찾기" class="in">
        	</div>
      	</div>
    	</form>
  	</section>
		
  
  
</body>
</html>