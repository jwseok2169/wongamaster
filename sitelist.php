<head>
    <title>현장관리-Proto type</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>현장관리</h1>
    <h2>건설업 실무 종사자들을 위한 현장관리 A to Z</h2>
<p>관리할 현장을 생성/선택해주세요</p>
<input type="button" value="새 현장 생성"onclick="location.href='newsite.php'" />

<ol>
<?php
    $list = scandir('./data');
    $i=0;
    while($i < count($list)){
        if($list[$i]!="."){
            if($list[$i]!=".."){
                echo "<li><a href=\"siteinpo.php?id=$list[$i]\">$list[$i]</li>\n";
                
            }
            
        }
        $i=$i+1;
    }
?>  
</ol>

</body>

