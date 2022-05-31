<?php include_once './dbinfo.php'; ?>
<?php

    // --------- user_tbl 테이블 생성 ------
    $sql = "create table user_tbl (
                no int primary Key not null auto_increment,
                userid varchar(12) not null,
                name varchar(12) not null,
                passwd varchar(12),
                sex char(1),
                email varchar(30),
                date datetime,
                ip_addr varchar(30))
                default charset=utf8 ";
    $result = mysqli_query($conn, $sql);

    // ---------- user_tbl 테이블 존재여부 --------
    if($result)
    {
        echo "<br>";        //echo "<hr>";
        echo "<p align=center><font color=green> 🧩 성공적으로 user_tbl 테이블을 생성하였습니다. ..... <br><br>";
        echo "..... 이제 레코드를 삽입할 준비가 되었습니다.. <hr><br></font>";
        echo  "🧩>> <a href=main.php> 메인 화면으로 이동 </a> <<🧩<br> ";
    }
    else
    {
        echo "<br>";    // echo "<hr>"; 
        echo "<p align=center><font color=red> 🧩 user_tbl 테이블은 이미 생성되었습니다....<br>";
        echo "..... MySQL에 접속하여 확인하기 바랍니다. !! <hr><br></font> ";
        echo "🧩>> <a href=user_main.php> 메인 화면으로 이동 </a><<🧩<br>";
        exit;
    }
    echo "</center>";
    mysqli_close($conn);                // db 연결 종료
?>