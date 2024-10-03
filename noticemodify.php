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
    </style>
<?php    $connect = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat") or die("connect fail");
               $id = $_GET[id];
               $number = $_GET[bno];
               $query = "select title, contents, bdate,view, id from Board where bno=$number";
               $result = $connect->query($query);
               $rows = mysqli_fetch_assoc($result);

               $title = $rows['title'];
               $content = $rows['contents'];
               $usrid = $rows['id'];

               session_start();


               $URL = "./login.php";

               if(!isset($_SESSION['id'])) {
       ?>              <script>
                               alert("권한이 없습니다.");
                               location.replace("<?php echo $URL?>");
                       </script>
       <?php   }
               else if($_SESSION['id']==$id) {
       ?>
       <form method = "post" action = "modify_action.php">
         <div class="board_list_wrap">
             <table class="board_list">
               <td colspan="4" align= center><font size="5" color="#5858FA">글수정</font></td>

               <tr>
               <tr>
                       <td>작성자</td>
                       <td><input type="hidden" name="id">관리자</td>
                       </tr>

                       <tr>
                       <td>제목</td>
                       <td><input type = text name = title size=60 value="<?=$title?>"></td>
                       </tr>

                       <tr>
                       <td>내용</td>
                       <td><textarea name = contents cols=85 rows=15><?=$content?></textarea></td>
                       </tr>

                       </table>

                       <center>
                       <input type="hidden" name="bno" value="<?=$number?>">
                       <input type = "submit" value="작성">
                       </center>
               </td>
               </tr>
             </div>
       </table>
       <?php   }
               else {
       ?>              <script>
                               alert("권한이 없습니다.");
                               location.replace("<?php echo $URL?>");
                       </script>
       <?php   }
       ?>
