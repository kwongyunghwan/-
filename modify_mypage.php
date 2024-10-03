<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $connect = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat") or die ("connect fail");
    $id = $_GET[id];
    $pwd = $_GET[pass1];
    $name = $_GET[name1];
    $phone = $_GET[phone1];
    $address = $_GET[address1];
    $query = "update Worker set pwd='$pwd', name='$name', phone='$phone', address='$address' where id='$id'";
    $result = $connect->query($query);
    if($_GET[pass1] != $_GET[pass2]){
      ?>
      <script>
      alert("패스워드 확인이 잘못되었습니다.");
      history.back();
      </script>
<?
  exit;
    }
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./mypage.php?id=<?=$id?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
