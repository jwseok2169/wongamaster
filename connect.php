<?php
$db_host="127.0.0.1:1233";
$db_user="root";
$db_password="1233123";
$db_name="opentutorials";
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(mysqli_connect_error($con)){
    echo "MariaDB 접속 실패";
    exit();
}
echo "MariaDB 접속 성공";
mysqli_close($con);
?>