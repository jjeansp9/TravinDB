<?php

    header('Content-Type:application/plain; charset=utf-8');

    //@PartMap으로 전달된 POST방식의 데이터들
    $nickname= $_POST['nickname'];
    $id= $_POST['id'];
    $password= $_POST['password'];
    $now= date("Y-m-d H:i:s");

    

    // MySQL DB에 데이터 저장 [ 테이블명 : travin_user_data ]
    $db= mysqli_connect("localhost", "jspstudio", "qawsedrftg#3", "jspstudio"); //host, id, pasword, filename
    mysqli_query($db, "set names utf8");

    // 데이터들 삽입하는 쿼리문
    $sql= "INSERT INTO travin(nickname, id, password, date) VALUES('$nickname','$id','$password','$now')";
    $result= mysqli_query($db, $sql);

    if($result) echo "회원가입 완료";
    else echo "회원가입에 실패했습니다. 다시 시도해주세요";

    mysqli_close($db);
?>