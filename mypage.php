<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
  background: #white;

}
table.mypage {
  border-collapse: collapse;
  background-color:white;
	text-align: left;
	line-height: 1.5;
  width:90%;
	border-top: 1px solid #ccc;
  border-left: 1px solid #ccc;
   border-radius: 5px;
    margin-left:50px;
    margin-top:20px;
}
table.mypage th {
  width: 20%;
	padding: 10px;
	font-weight: bold;
	vertical-align: top;
	color: #153d73;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;

}
  table.mypage td{
	padding: 10px;
  width: 50%;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
  }
  button {

    width:80px;

    background-color: #369;

    border: none;

    color:#fff;

    padding: 8px 0;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 15px;
    margin: 4px;

    cursor: pointer;
text-align: center;
}
#complete{
  width:60%;
  float:right;
  margin-top:20px;
}
</style>

<?php
    $connect = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat") or die ("connect fail");

    $id = $_GET[id];

    session_start();
    $query = "select * from Worker where id='$id'";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);

    $URL = "./login.php";

    if(!isset($_SESSION['id'])) {
    ?>              <script>
                    alert("권한이 없습니다.");
                    location.replace("<?php echo $URL?>");
            </script>
    <?php   }
    else if($_SESSION['id']==$id) {
    ?>
    <table class="mypage">
        <tr>
<div id=tablebackground>
                <form method = "get" action = "modify_mypage.php">
                        <tr align="center" style="background-color: #369">
                            <td colspan="2"><b style="color: #FFFFFF">회원정보수정</b></td>
                        </tr>
                        <tr>
                            <th >아이디</th>
                            <td >
                                <input type="text" name="id" size="15" style="background-color: lightgray" readonly="readonly" value="<?php echo $rows['id']?>">
                            </td>
                        </tr>
                        <tr>
                            <th >패스워드 </th >
                            <td><input type="password" name="pass1" size="15"></td>
                        </tr>
                        <tr>
                            <th >패스워드 확인 </th >
                            <td><input type="password" name="pass2" size="15"></td>
                        </tr>
                        <tr>
                            <th >이름</th>
                            <td><input type="text" name="name1" size="15" value="<?php echo $rows['name']?>"></td>
                        </tr>
                        <tr>
                            <th>전화번호</th>
                            <td><input type="text" name="phone1" size="20" value="<?php echo $rows['phone']?>"></td>
                        </tr>
                        <tr>
                            <th>주소</th>
                            <td><input type="text" name="address1" size="60" value="<?php echo $rows['address']?>"></td>
                        </tr>
                    </table>
                <div id=complete>
                <input type = "submit" value="수정완료">
                </div>
</div>
<?php   }
        else {
?>              <script>
                        alert("권한이 없습니다.");
                        location.replace("<?php echo $URL?>");
                </script>
<?php   }
?>
