<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var bDisplay = true;
		function doDisplay(){
			var con = document.getElementById("bottom2");
			if(con.style.display=='none'){
				con.style.display = 'block';
			}else{
				con.style.display='none';
			}
		}
	</script>
	  <meta name="viewport" content="initial-scale=1.0"> <!--지도를 위해 -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>main page</title>
		<link href="css/main.css" rel="stylesheet">
</head>
<style>
.gradien{
	background: -webkit-linear-gradient(#FF0000, #0000FF);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
margin-bottom : 1em;

}
</style>
<style type="text/css">
@font-face {
font-family: "Cafe24Ohsquare";
src:url(text/Cafe24Ohsquare.ttf) format('truetype');
}
@font-face {
font-family: "TmonMonsori";
src:url(text/TmonMonsori.ttf) format('truetype');
}
@font-face {
font-family: "NanumMyeongjo";
src:url(text/NanumMyeongjo.ttf) format('truetype');
}
</style>
<body>

<div id = "page">
<div id = "top"><b><a href ="main.php">Online Hard Hat</a></b></div>
<div id = "menu">
<div id ="Lmenu">
		<div class="dropdown">
		<button class="dropdown-button">설정</button>
		<div class="dropdown-content">
			<a href="#">시간 설정</a>
			<a href="#">언어 설정</a>
		</div>
	</div>
	&nbsp; &nbsp;
	<div class="dropdown">
	<button class="dropdown-button">게시판</button>
	<div class="dropdown-content">
		<a href="notice.html" target="content">공지사항</a>
		<a href="QA.html" target="content">Q & A</a>
	</div>
	</div>
</div>
<div id ="Rmenu">
	<a href ="mypage.html" target="content"> MYPAGE </a>
	<b>|</b>
	<a href ="login.php">LOGOUT</a>
</div>
</div>
<div id="map">
	 <iframe name="content" id="content" src="map.html" frameborder="0" width="100%" height="910px"></iframe>
 </div>
<div id = "right">
<p><b>인부정보</b><p>
	<a href="http://ci2020ohhat.dongyangmirae.kr/project/Database/datamovement2.php" target="content">센서값 보여주기</a>
<div style="width: 100%; height: 800px; overflow: auto">
<table border="0" bordercolor="#fff5ee" width="100%">
	<tr>
	 <?
	$conn = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat");
	$select_query = "SELECT num FROM Sensor";
	$result = mysqli_query($conn, $select_query);
	$records=mysqli_num_rows($result);
	$lastvaluenum = mysqli_fetch_row($result);
	echo '<td>'.$lastvaluenum[0].'</td>';
	mysqli_close($conn);
	?>
	  <td>3시간</td>

	<?php
	$conn = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat");
	$select_query = "SELECT UltraSonic FROM Sensor";
	$result = mysqli_query($conn, $select_query);
	$hatuse="X";
	$lastvaluehat = mysqli_fetch_row($result);
	if($lastvaluehat[0]<=800){
	  $hatuse="O";
	}else{
	  $hatuse="X";
	}
	echo '<td>'.$hatuse.'</td>';
	mysqli_close($conn);

	?>
	</tr>
		<tr>
		<td>2</td>
		<td>6/6</td>
		<td>x</td>
	</tr>
	<tr>
		<td>3</td>
		<td>근무</td>
		<td>o</td>
	</tr>
		<tr>
		<td>4</td>
		<td>근무</td>
		<td>o</td>
	</tr>
		<tr>
		<td>5</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>6</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>7</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>8</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>9</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>10</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>11</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>12</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>13</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>14</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>15</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>16</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>17</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>18</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>19</td>
		<td>근무</td>
		<td>o</td>
	</tr>
	<tr>
		<td>20</td>
		<td>근무</td>
		<td>o</td>
	</tr>
</table>
</div>
</div>
<div id = "bottom1"><a class="gradient" href ="javascript:doDisplay();">SOS(Click)</a></div>
<div id = "bottom2">
<table  width="90%">
	<tr>
		<td>ID</td>
		<td>이름</td>
		<td>날짜</td>
		<td>시간</td>
		<td>위험 정보</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>1</td>
		<td>안전모군</td>
		<td>2020-06-02</td>
		<td>17 : 13 : 57</td>
		<td>가연성 가스 감지</td>
		<td><input type ="button" class="button" name="btn1" value="찾 기"></td>
		<td><input type ="button" class ="button" name="btn2" value="신고 취소" onclick="alert('정말 취소 하시겠습니까?')"></td>
	</tr>
		<tr>
		<td>2</td>
		<td>안전모양</td>
		<td>2020-06-05</td>
		<td>18 : 34 : 21</td>
		<td>충격 감지</td>
		<td><input type ="button" class ="button" name="btn1" value="찾 기"></td>
		<td><input type ="button"  class ="button" name="btn2" value="신고 취소" onclick="alert('정말 취소 하시겠습니까?')"></td>
	</tr>
</table>
</div>
</div>
</body>
</html>
