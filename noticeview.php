<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/notice.css" rel="stylesheet">
<style>
@font-face {
font-family: "NanumGothicExtraBold";
src:url(text/Nanum  GothicExtraBold.ttf) format('truetype');
}
    * {
      font-family: NanumGothicExtraBold;
      font-weight: bold;
    }
    #viewbtn {
	display: inline-block;
	padding: 5px 10px;
	border: 1px solid #4b0082;
	border-radius: 5px;
	margin-left: 5px;
	font-size: 12px;
  background:white;
}
</style>
<?php

                $connect = mysqli_connect('211.218.150.109', 'ci2020ohhat', '2020ohhat', 'ci2020ohhat');
                $number = $_GET['bno'];
                session_start();
                $query = "select title, contents, bdate, view, id from Board where bno =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);

                $update_query = "update Board set view=view+1 where bno =$number";
                $connect->query($update_query);
        ?>
        <div class="board_list_wrap">
            <table class="board_list">
        <tr>
                <td colspan="4"><font size="5" color="#5858FA"><?php echo $rows['title']?></td>
        </tr>
        <tr>
          <td bgcolor="#F2F2F2">작성자</td>
                <td><?php echo $rows['id']?></td>
              <td bgcolor="#F2F2F2">조회수</td>
                <td><?php echo $rows['view']?></td>
        </tr>


        <tr>
                <td colspan="4" valign="top">
                <?php echo $rows['contents']?></td>
        </tr>
        </table>


        <!-- MODIFY & DELETE -->
        <div class="change">
                <a href="notice.php">목록으로</a> &nbsp;&nbsp;
                <button id="viewbtn" onclick="location.href='./noticemodify.php?bno=<?=$number?>&id=<?=$_SESSION['id']?>'">수정</button>
&nbsp;&nbsp;
                <button id="viewbtn" onclick="location.href='./noticedelete.php?bno=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
        </div>
        </div>
