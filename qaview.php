<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/qaview.css" rel="stylesheet">
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
.comment {
  font-size: 15px;
}
</style>
<?php
                $connect = mysqli_connect('211.218.150.109', 'ci2020ohhat', '2020ohhat', 'ci2020ohhat');
                $number = $_GET[bno];
                session_start();

                $query = "select title, contents, date, id, comment, pwd from QA where bno ='$number'";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);

        ?>
        <div class="board_list_wrap">
            <table class="board_list">
        <tr>
                <td colspan="4"><font size="5" color="#9932cc"><?php echo $rows['title']?></td>
        </tr>
        <tr>
          <td bgcolor="#F2F2F2">작성일</td>
                <td><?php echo $rows['date']?></td>
        </tr>
        <tr>
                <td colspan="4" valign="top">
                <?php echo $rows['contents']?></td>
        </tr>
        <table class="comment">
        <tr><td style="color:blue; font-size:17px;">관리자</td></tr>
        <tr></tr>
        <tr><td>답변 내용: <?php echo $rows['comment']?></td></tr>
      </table>
        <form method ="post" action = "qa_input.php">
            <table class="board_list">
            <tr>
              <td >
                          <textarea name="comment1" rows="4" cols="140" style="width:100%;" placeholder="답변을 작성해주세요.
이미 작성 되어 있으면 적으실때 수정됩니다."></textarea>
                      </td>
                              <td style="text-align: right;">
                                  <input type="hidden" name="bno" value="<?=$number?>">
                                  <input type="submit"style="width:100%; height:80px;" value="답변 등록">
                              </td>
                              </tr>
        </table>
        </form>
        <div class="change">
          <a href="qa.php">목록으로</a>
                <button id="viewbtn" onclick="location.href='./qadelete.php?bno=<?=$number?>&id=<?=$_SESSION['userid']?>'">게시물 삭제</button>
        </div>
        </div>
