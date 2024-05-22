<?php

?>

<html>
    <title>Checkbox</title>
    <head>
        <title>Checkbox</title>
    </head>
    <body>
        <h1>Checkbox Example</h1>
        <form action = "./check_result.php" method = "post">
            <input type = "checkbox" name = "fruit[]" value = "사과">사과<br>
            <input type = "checkbox" name = "fruit[]" value = "포도">포도<br>
            <input type = "checkbox" name = "fruit[]" value = "바나나">바나나<br>
            <input type = "checkbox" name = "fruit[]" value = "딸기">딸기<br>
            <input type = "submit" value = "전송">
        </form>
    </body> 
</html>