<!-- 此文件是测试用的 -->
<!-- 此文件是测试用的 -->
<!-- 此文件是测试用的 -->
<!-- 此文件是测试用的 -->
<!-- 此文件是测试用的 -->
<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';

var_dump($_POST);
$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$code= $_POST["code"];
$room_id= $_POST["room-id"];
$edu = $_POST["education"];
$salary = $_POST["salary"];
$link = connect();
$sql = "insert into nurse(ID,Name,age,sex,code,room_ID,education,salary) 
        values(id,'$name',$age,'$gender',$code,$room_id,'$edu',$salary)";
execute_sql($link,$sql);

