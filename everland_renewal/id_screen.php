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

		#search_id {
			width: 80%;
			margin: 10px auto;
			margin-top: 70px;
		}
		#search_id form {
			width: 100%;
			margin: 20px;
		}
		#search {
			font-family: "Cafe24SsurroundAir", aral;
		}
		#search #name {
			margin-bottom: 30px;
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
  		margin: 50px auto 20px ;
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
  		padding: 10px 100px;
  		font-family: "Cafe24SsurroundAir", aral;
		}	
	</style>
</head>

<body>
	<header id="header">
    <a href="login_form.php">
    <div class="prev">
      <img src="./img_icon/arrow_prev.png" alt="prev">
    </div>
    </a>
    <p>아이디 찾기</p>
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

		<section id="search_id">
    	<from action="id_search.php" method="post" name="id_form" class="login">
      	<div id="search">
					<div class="name">
        	  <input type="text" name="name" id="name" placeholder="이름">
        	</div>

        	<div class="ph">
        	  <input type="text" name="ph" id="ph" placeholder="전화번호">
        	</div>

        	<div id="button">
        	  <input type="submit" value="아이디찾기" class="in">
        	</div>
      	</div>
    	</from>
  	</section>
  
</body>
</html>