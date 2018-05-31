<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/11/11
 * Time: 18:40
 */
include "conn/db.php";
$name = $_POST['name'];
$year = $_POST['year'];
$keyWordOne = $_POST['keywordOne'];
$keyWordTwo = $_POST['keywordTwo'];
$keyWordThree = $_POST['keywordThree'];
$content = $_POST['content'];
//echo "名字:".$name.",年份".$year.",關鍵詞1".$keyWordOne.",关键词2".$keyWordTwo.",关键词3".$keyWordThree.",内容".$content;
$msg = "";
if(isset($_POST['upload'])){
    $target = "images/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $val = explode(".",$image);
    if(!($val[1]=="jpg" || $val[1] == "GIF" || $val[1] == "png")){
        echo "<script>alert('图片格式不对!');</script>";
        header("Location:index.html");
        exit();
    }

    $sql = "insert into show_movie (mName,mYear,mKeywordOne,mKeywordTwo,mKeywordThree,mPicture,mContent) VALUES ('$name','$year','$keyWordOne','$keyWordTwo','$keyWordThree','$image','$content')";
//    mysql_query($sql);
    if(!mysql_query($sql)){
        echo "<script>alert('添加失败!');location.href='index.html';</script>";
        exit();
    }else{

        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg = "Image uploaded successfully";
//            header("Location:index.html");
        }else{
            $msg = "There was a problem uploading image";
            exit();
        }
        echo "<script>alert('谢谢您的推荐！');location.href='index.html';</script>";
    }

    mysql_close($con);
}
