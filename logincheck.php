<?php
header("Content-Type: text/html; charset=UTF-8");

  session_start();
  include ("connect.php");

  $id = $_POST['id'];
  $pwd = $_POST['pwd'];

  $query = "select * from Worker where id='$id' and pwd='$pwd'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);

  if($id==$row['id'] && $pwd==$row['pwd']){
     $_SESSION['id']=$row['id'];
     echo "<script>location.href='http://ci2020ohhat.dongyangmirae.kr/project/html/main.php';</script>";

  }else{

     echo "<script>window.alert('아이디 또는 비밀번호를 잘못 적으셨습니다.');</script>";
     echo "<script>location.href='login.php';</script>";

  }

  ?>
