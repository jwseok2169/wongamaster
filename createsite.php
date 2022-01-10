<?php

file_put_contents('data/'.$_POST['gongsamyeong'], $_POST['gongmoney']);

$gongsamyeong=$_POST['gongsamyeong'];
$balzugubun=$_POST['balzugubun'];
$gongjong=$_POST['gongjong'];
$gongmoney=$_POST['gongmoney'];
$m2=$_POST['m2'];
$chackgong=$_POST['chackgong'];
$jungong=$_POST['jungong'];

$conn = mysqli_connect('127.0.0.1:1233', 'root','1233123','prototype');

 $sql="
 insert into siteinfo (gongsamyeong, balzugubun, gongjong, gongmoney, m2, chackgong, jungong
     ) values ('$gongsamyeong','$balzugubun','$gongjong', '$gongmoney', '$m2', '$chackgong', '$jungong'
         )";
    mysqli_query($conn, $sql);     
    mysqli_close($conn);

    header('location: sitelist.php');
?>
   
