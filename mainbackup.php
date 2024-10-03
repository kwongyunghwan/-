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
		function button_cancle1(){
if (confirm("정말 취소하시겠습니까??") == true){    //확인
     var list = document.getElementById("list1");
     list.style.display='none';
}else{   //취소
    return;
}
}
		function button_cancle2(){
if (confirm("정말 취소하시겠습니까??") == true){    //확인
     var list = document.getElementById("list2");
     list.style.display='none';
}else{   //취소
    return;
}
}
	</script>
	<script>
    function checkAll() {	 //모두 체크 함수
	for(var i=0; i<document.info.length; i++){
		document.info.elements[i].checked=true;
		}
    }
	function clearAll() {	 //모두 체크 해제 함수
	for(var i=0; i<document.info.length; i++){
		document.info.elements[i].checked=false;
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
<?php
			session_start();
			$URL = "./login.php";
			if(!isset($_SESSION['id'])) {
?>

			<script>
							alert("로그인이 필요합니다");
							location.replace("<?php echo $URL?>");
			</script>
<?php
			}
?>

<body>

<div id = "page">
<div id = "top"><b><a href ="main.php">Online Hard Hat</a></b></div>
<div id = "menu">
<div id ="Lmenu">
		<div class="dropdown">
		<button class="dropdown-button">설정</button>
		<div class="dropdown-content">
			<a href="#">시간 설정</a>
		</div>
	</div>
	&nbsp; &nbsp;
	<div class="dropdown">
	<button class="dropdown-button">게시판</button>
	<div class="dropdown-content">
		<a href="notice.php" target="content">공지사항</a>
		<a href="qa.php" target="content">Q & A</a>
	</div>
	</div>
</div>
<div id ="Rmenu">
	<a href ="mypage.php" target="content"> MYPAGE </a>
	<b>|</b>
	<a href ="logout.php" >LOGOUT</a>
</div>
</div>
<div id="map">
	 <iframe name="content" id="content" src="map.html" frameborder="0" width="100%" height="910px"></iframe>
 </div>
<div id = "right"><!--인부정보 html-->
<a href="http://ci2020ohhat.dongyangmirae.kr/project/Database/datamovement2.php" target="content">이전 기록</a>
<p><b>인부정보</b><p>

<div style="width: 100%; height: 800px; overflow: auto">

<form name ="info" action="deleteinfo.php" method="get">
<input type ="submit" name="deletebtn" value="삭제하기" > <!-- 삭제 버튼 -->
<p>
<input type ="button" value="모두 체크" onclick =checkAll()> <!-- 모두 췤 버튼 -->
<input type ="button" value="체크 해제" onclick =clearAll()> <!-- 모두 췤 버튼 -->

<table border ="0" width="100%">
<tr>
		<th>ID</th>
		<th>근무</th>
        <th>착용</th>
        <th> 삭제 </th>
	</tr>

	<!-- 인부 리스트 -->
<?php
$conn = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat");
$select_query = "SELECT num, wear, time FROM HardHat ";
$result_set = mysqli_query($conn, $select_query);
while ($row = mysqli_fetch_array($result_set)){
    if($row['wear']==1){$row['wear']='O';}
	else{$row['wear']='X';}
	if($row['time']==NULL) $row['time'] = '미근무';
    echo '<tr>
    <td>' . $row[ 'num' ] . '</td>
    <td>'. $row[ 'time' ] . '</td>
    <td>'. $row[ 'wear' ] . '</td>
    <td>  <input type="checkbox" name="checkid[]" value="'. $row['num'] .'"> </td>
    </tr>';
}



mysqli_close($conn);

?>


</table>
</div>
</div>
<!--SOS 리스트-->
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
	<tr id = "list1">
		<td>1</td>
		<td>안전모군</td>
		<td>2020-06-02</td>
		<td>17 : 13 : 57</td>
		<td>가연성 가스 감지</td>
		<td><input type ="button" class="button" name="btn1" value="찾 기"></td>
		<td><input type ="button" class ="button" name="btn2" value="신고 취소" onclick="button_cancle1()"></td>
	</tr>
		<tr id="list2">
		<td>2</td>
		<td>안전모양</td>
		<td>2020-06-05</td>
		<td>18 : 34 : 21</td>
		<td>충격 감지</td>
		<td><input type ="button" class ="button" name="btn1" value="찾 기"></td>
		<td><input type ="button"  class ="button" name="btn2" value="신고 취소" onclick="button_cancle2()"></td>
	</tr>
</table>
</div>
</div>
</body>
</html>
