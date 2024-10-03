<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $connect = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat") or die ("connect fail");
    $number = $_GET[bno];
    $id = $_GET['id'];
    $query = "delete from Board where bno=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("삭제되었습니다.");
            location.replace("./notice.php");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
