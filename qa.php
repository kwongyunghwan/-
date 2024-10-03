<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/QA.css" rel="stylesheet">
        <style>
        textarea{
              width:100%;
            }

        .reply_reply {
                border: 2px solid #FF50CF;
            }
        .reply_modify {
                border: 2px solid #FFBB00;
            }@font-face {
            font-family: "NanumGothicExtraBold";
            src:url(text/NanumGothicExtraBold.ttf) format('truetype');
        }
                * {
                  font-family: NanumGothicExtraBold;
                  font-weight: bold;
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
        <?php
              $connect = mysqli_connect('211.218.150.109', 'ci2020ohhat', '2020ohhat', 'ci2020ohhat') or die ("connect fail");
              session_start();
              $query = "select * from QA order by bno desc";
              $result = $connect->query($query);
              $total = mysqli_num_rows($result);
?>
<BODY>
    <div class="board_list_wrap">
        <table class="board_list">
            <caption>게시판 목록</caption>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성일</th>
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
                              <a href = "qaview.php?bno=<?php echo $rows['bno']?>">
                              <?php echo $rows['title']?></td>
                              <td width = "200" align = "center"><?php echo $rows['date']?></td>
                              </tr>
                              <?php
                                      $total--;
                                      }
                              ?>
            </tbody>
        </table>
    </div>
</BODY>
