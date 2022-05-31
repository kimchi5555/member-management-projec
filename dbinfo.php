<?php
    $db_host = "localhost"; // 변경안함
    $db_user = "root"; // 계정정보
    $db_passwd = ""; // 패스워드
 
    $conn = mysqli_connect($db_host, $db_user, $db_passwd); // mysql관리자 계정으로 접속
 
    $result = mysqli_select_db($conn, 'memDB');
 
    // 데이터베이스의 선택 성공 여부
 
    if($result){
        echo "<b> DB데이터베이스 선택 성공 </b><br>";
        echo "<hr>";
    }else {
        echo "<b> study_db 데이터베이스 선택 실패</b><br>";
        echo "프로그램을 종료합니다";
        exit;
    }
?>