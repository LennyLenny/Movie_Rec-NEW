<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/12/6
 * Time: 20:28
 */

include "conn/db.php";



if(isset($_POST['user'])){


$user = $_POST['user'];
$password = $_POST['password'];


$sql = "select * from user_info where username='$user' AND password='$password'  ";

$sql2 = "insert into movie_rate(name) VALUES ('temp')";
mysql_query($sql2);
$result = mysql_query($sql);

$row = mysql_num_rows($result);


if($row==1){
    echo "<script>alert('登录成功！');</script>";
    header("refresh:0;url=index.html");
    exit();
}

else{
    echo "<script>alert('错误的用户名或密码！');</script>";
    echo mysql_error();
    header("refresh:0;url=login.html");
    exit();
}

}
mysql_close($con);
