<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/11/11
 * Time: 18:48
 */
$con = mysql_connect("localhost","root","root");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("movielist");
mysql_query("set names utf8");
header("Content-type:text/html;charset=utf-8");