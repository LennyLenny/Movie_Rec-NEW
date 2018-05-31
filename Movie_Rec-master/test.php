<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/12/15
 * Time: 20:27
 */

include "conn/db.php";

$one=$_GET['one'];
$two=$_GET['two'];

$sql = "UPDATE movie_rate SET `$x` = $point WHERE name = 'temp'";

if(!mysql_query($sql)){
    echo "<script>alert('失败!');</script>";
    exit();
}else{
    echo "<script>alert('成功！');</script>";
}

mysql_close($con);