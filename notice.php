
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <TITLE></TITLE>
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
</style>
<body>
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
  <?php
                $connect = mysqli_connect('211.218.150.109', 'ci2020ohhat', '2020ohhat', 'ci2020ohhat') or die ("connect fail");
                $query ="select * from Board order by bno desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

?>
    <div class="board_list_wrap">
        <table class="board_list">
            <caption>권경환</caption>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>작성일</th>
                    <th>조회수</th>
                </tr>
            </thead>
            <tbody>
<?php
                while($rows = mysqli_fetch_assoc($result)){
                    if($total%2==0){
    ?>                      <tr>
                    <?php   }
                    else{
    ?>                      <tr>
                    <?php } ?>
                    <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "noticeview.php?bno=<?php echo $rows['bno']?>">
                <?php echo $rows['title']?></td>
                  <td width = "100" align = "center"><?php echo $rows['id']?></td>
                <td width = "200" align = "center"><?php echo $rows['bdate']?></td>
                <td width = "100" align = "center"><?php echo $rows['view']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
            </tbody>
        </table>
        <div class="change">
            <a href="noticeinput.html">글쓰기</a>
        </div>
        <div class="paging">
            <a href="#">첫 페이지</a>
            <a href="#">이전 페이지</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">다음 페이지</a>
            <a href="#">마지막 페이지</a>
        </div>
    </div>
    <table>
</body>
