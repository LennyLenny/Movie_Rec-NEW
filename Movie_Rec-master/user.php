<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/11/26
 * Time: 16:35
 */
include "conn/db.php";
$username = $_POST['username'];
$password = $_POST['password'];
$city = $_POST['city'];
$birthday = $_POST['date'];
$email = $_POST['email'];
$note = $_POST['text'];
//echo "名字:".$username.",密码".$password.",城市".$city.",出生日期".$birthday.",电子邮箱".$email.",内容".$note;


    $sql = "insert into user_info (username,password,city,birthday,email,note) VALUES ('$username','$password','$city','$birthday','$email','$note')";
//   mysql_query($sql);
    if(!mysql_query($sql)){
        echo "<script>alert('注册失败!');location.href='index.html';</script>";
        exit();
    }else{
        echo "<script>alert('注册成功！');location.href='index.html';</script>";
    }

    mysql_close($con);
