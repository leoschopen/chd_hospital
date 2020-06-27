<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
session_start();
$id = $_POST['id'];
$pw = $_POST['passWord'];
$link = connect();
$sql = "select id,password from user where id={$id} and password={$pw}";
$result = execute_sql($link,$sql);

$sql2 = "select * from user where id={$id}";
$result2 = execute_sql($link,$sql2);
$row = mysqli_fetch_assoc($result2);

if(mysqli_fetch_assoc($result)==null)
{
    echo "账号或密码输入错误!";
}else if($row['occupation']=="医生"){
        $_SESSION['name']=$row['name'];
        $_SESSION['pw']=sha1(md5($pw));
        $_SESSION['occupation']="医生";
		setcookie('name',$row['name'],time()+3600);
        setcookie('pw',sha1(md5($pw)),time()+3600);
        setcookie('occupation',"医生",time()+3600);
print<<<A
 <meta http-equiv="refresh" content="1;url=index_doctor.php">
A;
    }else if($row['occupation']=="护士"){
        $_SESSION['name']=$row['name'];
        $_SESSION['pw']=sha1(md5($pw));
        $_SESSION['occupation']="护士";
        setcookie('name',$row['name'],time()+3600);
        setcookie('pw',sha1(md5($pw)),time()+3600);
        setcookie('occupation',"护士",time()+3600);
print<<<A
        <meta http-equiv="refresh" content="1;url=index_nurse.php">
A;
    }else if($row['occupation']=="admin"){
        $_SESSION['name']=$row['name'];
        $_SESSION['pw']=sha1(md5($pw));
        $_SESSION['occupation']="管理员";
        setcookie('name',$row['name'],time()+3600);
        setcookie('pw',sha1(md5($pw)),time()+3600);
        setcookie('occupation',"管理员",time()+3600);
print<<<A
        <meta http-equiv="refresh" content="1;url=index.php">
A;
    }else{
        echo "出错了";
    }

?>