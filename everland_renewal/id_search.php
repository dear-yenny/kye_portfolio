<?
  session_start();
?>
<meta charset="utf-8">
<?
 

include "dbconn.php";
mysqli_query($connect,'set names utf8');  
 
$name=$_POST['name'];
$hp=$_POST['hp'];
//$hp=  $_POST['hp1']."-".$_POST['hp2']."-".$_POST['hp3']; 
 
$sql ="select * from join_ever where name='$name'  AND hp='$hp'";
 
$result = mysqli_query( $connect,$sql);
$num_match = mysqli_fetch_array($result);

if(!empty($num_match)){
  echo "<script>alert('회원님의 아이디는 $num_match[id]입니다. 로그인해주세요*^^*'); location.href='login_form.php';</script>";
  //알람창을 띄워주고, 로그인화면으로 넘깁니다. 알람창을 사용하기 위해서는  <script>안에 있어야함
} else {
  echo $hp."<script>alert('정보와 일치하는 아이디가 없습니다.');</script>";
}

mysqli_close($connect);     

/*
        echo("
              <script>
                location.href = 'index.html';
              </script>
           ");*/
            

?>