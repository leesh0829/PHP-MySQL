<html>
    <head>
        <title>php test</title>
    </head>

    <body>
        <?php   
            $str = "php영역";
        ?>

        HTML영역<br>

        <?php 
            echo $str
        ?> <br>
        <?php 
            echo "중괄호를 이용한 변수 출력 {$str}"
        ?> <br>
        <?php
            echo "문자열을 이어주는 변수".$str."!!!"
        ?> <br>
    </body>
</html>