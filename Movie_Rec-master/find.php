<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/11/11
 * Time: 19:28
 */
include "conn/db.php";
$findOne = $_POST['findOne'];
$findTwo = $_POST['findTwo'];
$findThree = $_POST['findThree'];

// $sql = "SELECT * FROM show_movie WHERE mKeywordOne = '$findOne' OR mKeywordTwo LIKE '$findTwo' OR mKeywordThree LIKE '$findThree'";、

$sql = "SELECT * FROM show_movie WHERE (mKeywordOne = '$findOne' or mKeywordTwo = '$findOne' or mKeywordThree = '$findOne') or (mKeywordOne = '$findTwo' or mKeywordTwo = '$findTwo' or mKeywordThree = '$findTwo') or (mKeywordOne = '$findThree' or mKeywordTwo = '$findThree' or mKeywordThree = '$findThree') ";

// $sql = "SELECT * FROM show_movie WHERE (mKeywordOne = '$findOne' or mKeywordTwo = '$findOne' or mKeywordThree = '$findOne'  or mKeywordOne is null or mKeywordTwo is null or mKeywordThree is null)
//  or (mKeywordOne = '$findTwo' or mKeywordTwo = '$findTwo' or mKeywordThree = '$findTwo'  or mKeywordOne is null or mKeywordTwo is null or mKeywordThree is null)
//   or (mKeywordOne = '$findThree' or mKeywordTwo = '$findThree' or mKeywordThree = '$findThree'   or mKeywordOne is null or mKeywordTwo is null or mKeywordThree is null)";


$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result);
$val = $row['id'];

setcookie("id",$val);
$nums = mysql_num_rows($result);

if($nums>0){
    echo "<script>alert('查到'+$nums+'条数据');location.href='show-movie.php';</script>";
}else{
    echo "<script>alert('没有查到任何东西，请重新输入关键字');location.href='index.html'</script>";
}
mysql_close($con);