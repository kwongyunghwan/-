<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

        session_start();
        $result = session_destroy();

        if($result) {
?>
        <script>
                alert("로그아웃 되었습니다.");
                location.href='login.php';
        </script>
<?php   }
?>
