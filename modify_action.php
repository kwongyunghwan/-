<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $connect = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat") or die ("connect fail");
    $number = $_GET[bno];
    $title = $_GET[title];
    $content = $_GET[contents];
    $date = date('Y-m-d H:i:s');

    $query = "update Board set title='$title', contents='$content', bdate='$date' where bno=$number";

    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./view.php?bno=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
                    mysqli_close($connect);
?>
