<?php
header("Content-Type: text/html; charset=UTF-8");
                $connect = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat") or die("fail");

                $id = $_GET[name];
                //$pw = $_GET[pw];
                $title = $_GET[title];
                $contents = $_GET[contents];
                $bdate = date('Y-m-d H:i:s');

                $URL = './notice.php';

                                                                                // , password
                $query = "insert into Board (bno,title, contents, bdate, btype, id)
                        values(null,'$title', '$contents', '$bdate',0, '$id')";   //, '$pw'


                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }

                mysqli_close($connect);
?>
