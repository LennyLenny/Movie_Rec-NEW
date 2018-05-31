<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/4/21
 * Time: 19:28
 */
include "conn/db.php";
$mov_Name = $_POST['findByName'];


$sql = "SELECT * FROM show_movie WHERE mName = '$mov_Name'";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result);
$val = $row['id'];

setcookie("id",$val);
$nums = mysql_num_rows($result);
//echo $nums;

if($nums>0){
    echo "<script>alert('查到'+$nums+'条数据');location.href='show-movie.php';</script>";
}else{
    echo "<script>alert('没有查到任何东西，请重新输入关键字');location.href='index.html'</script>";
}
mysql_close($con);