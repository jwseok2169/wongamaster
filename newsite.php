<head>
    <title>현장관리-Proto type</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>현장관리</h1>
    <h2>건설업 실무 종사자들을 위한 현장관리 A to Z</h2>
    <p>현장관리를 위해 새 현장을 생성합니다</p>
    <p>현장 생성을 위해 아래 기본정보를 입력해 주세요</p>
    <form action="createsite.php" method="post">
        공사명  <input type='text'name="gongsamyeong" id="text" placeholder="계약서상 공사명"/><br>
        
        발주구분 <input type="radio" name="balzugubun" value="공공">공공공사
                <input type="radio" name="balzugubun" value="민간">민간공사<br>

        공종    <input type="radio" name="gongjong" value="토목">토목
                <input type="radio" name="gongjong" value="건축">건축
                <input type="radio" name="gongjong" value="전문">전문<br>
        
        공사금액 <input type="text" name="gongmoney" id="text" placeholder="계약서상 총공사금액">원<br>

        연면적 <input type="text" name="m2" id="text" placeholder="착공신고시 연면적">원<br>

        착공(예정)일 <input type="date" name="chackgong"> <br>
        준공(예정)일 <input type="date" name="jungong"> <br>
        
        <input type="submit" value="새 현장 생성" > <br>
        
    </form>  
    
<style>
    h1{
        text-align: center;
        margin-top: 45px;       
    }
    h2{
        text-align: center;
        margin-top: 30px;
        border-bottom: 2px grey;
    }
    p{
        text-align: left;
        margin-top: 10px;
        margin-left: 15%;
                
    }
    input{
        text-align : left;
        margin-left: 10%;
        margin-top : 20pt
    }
    #text{
            width: 300pt;
    }

    form{
        text-align: left;
        margin-top: 45px;
        margin-left: 20%;
    }
</style>
</body>