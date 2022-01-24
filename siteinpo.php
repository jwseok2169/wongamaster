<head>
    <title>현장관리-Proto type</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>현장관리</h1>
    <h2>건설업 실무 종사자들을 위한 현장관리 A to Z</h2>

 <?php
    $conn=mysqli_connect('127.0.0.1:1233', 'root','1233123','prototype');

        $sql= "select * from siteinfo WHERE gongsamyeong={$_GET['id']}";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        
        if(isset($_GET['id'])) {
            echo $row['gongsamyeong'], "  현장은"; 
            
        }
    
        if(isset($_GET['id'])) {
            echo "  공사금액  ", $row['gongmoney'], "  원의"; 
            
        }
    
        if(isset($_GET['id'])) {
            echo "  ", $row['balzugubun'], "공사 현장입니다"; 
        }
    
    ?>
    <br>
    관련규정에 따라
</body>
