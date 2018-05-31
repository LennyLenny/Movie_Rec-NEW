<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>为您推荐的电影</title>
    <style>

        .wrap{
            height:500px;
            width:350px;
            border: 1px double black;
            border-radius: 20px;
            margin:0 auto;
            box-shadow: 10px 10px 5px #888888;
            background:url(images/strip.jpg);

        }



        .inner-wrap{
            border:1px solid black;
            height:480px;
            width:320px;
            border-radius: 20px;
            margin:0 auto;
            margin-top: 10px;
            background-color:rgb(245,245,245);
        }

        .round{
            width:180px;
            height:180px;
            border-radius: 50%;
            border:0.5px solid black;
            margin:0 auto;
            margin-top: 20px;


        }
        .round img{
            width:180px;
            height:180px;
            border-radius: 50%;


        }

        .inner-wrap h1{
            height: 50px;
            margin: 20px auto;
            text-align: center;
        }
        .inner-wrap p{
            height: 180px;
            border:1px solid #ccc;
            border-radius: 0 0 10px 10px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<div class="wrap">
    <?php
        include "conn/db.php";
        $sql = "SELECT * FROM show_movie WHERE id = $_COOKIE[id]";
//        echo $_COOKIE['id'];
        $result = mysql_query($sql,$con);
        $rows = mysql_fetch_array($result);
    ?>
    <div class="inner-wrap">
        <div class="round"><img src="images/<?php echo $rows['mPicture']?>" alt=""></div>
        <h1><?php echo $rows['mName']?></h1>
        <p><?php echo $rows['mContent']?></p>
    </div>

</div>
<a href="index.html" style="float:right">返回主页</a>
</body>
</html>