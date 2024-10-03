<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
                $connect = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat") or die("fail");
                $number = $_GET[bno];
                $pwd = $_GET[pwd1];
                $comment = $_GET[comment1];

                $query = "update QA set pwd='$pwd', comment='$comment' where bno='$number'";

                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "답변이 등록되었습니다."?>");
                          location.replace("./qaview.php?bno=<?=$number?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }

                mysqli_close($connect);
?>
