<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/12/4
 * Time: 10:01
 */
include "conn/db.php";

$point=(int)$_GET['rating'];
$x=(int)$_GET['id'];
// echo $point .",".$x;

$type = gettype($point);
// echo $type;
$type2 = gettype($x);
// echo  $type2;
// echo $x;


    $sql = "UPDATE movie_rate SET `$x` = $point WHERE name = 'temp'";
    echo $sql;


  if(!mysql_query($sql)){
      echo "<script>alert('失败!');</script>";
     exit();
  }else{
      echo "<script>alert('成功！');</script>";
  }

mysql_close($con);




