<html>
    <title>Select</title>
    <head>
        <title>Select</title>
    </head>
    <body>
        <h1>Select Example</h1>
        <form action = "./select_result.php" method = "select">
        이름:
            <select name = "name">
                <option value="">선택하세요</option>
                <option value="아델리">아델리</option>
                <option value="황제">황제</option>
                <option value="아프리카">아프리카</option>
            </select>   
            <br>아이디:
            <select name = "id">
                <option value="">선택하세요</option>
                <option value="아델리">아델리</option>
                <option value="황제">황제</option>
                <option value="아프리카">아프리카</option>
            </select>
            <br>이메일:
            <select name = "email">
                <option value="">선택하세요</option>
                <option value="아델리">아델리</option>
                <option value="황제">황제</option>
                <option value="아프리카">아프리카</option>
            </select>
            <input type = "submit" value="전송">
        </form>    
    </body> 
</html>