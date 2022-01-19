<head>
    <title>현장관리-Proto type</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>현장관리</h1>
    <h2>건설업 실무 종사자들을 위한 현장관리 A to Z</h2>


 <?php
    $conn=mysqli_connect('127.0.0.1:1233', 'root','1233123','prototype');
        $sql= "select * from siteinfo where id = {$_post['gongsamyeong']}";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $article = array('gongsamyeong' => $row ['gongsamyeong'], 
                        'balzugubun' => $row ['balzugubun'],
                        'gongjong' => $row ['gongjong'],
                        'gongmoney' => $row ['gongmoney'],
                        'm2' => $row ['m2'],
                    );
        print_r($article);
    
    ?>

