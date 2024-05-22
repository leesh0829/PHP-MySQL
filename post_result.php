<?php
$name = $_GET["name"];
$id = $_GET["id"];
$email = $_GET["email"];
?>

<html>
    <head>
        <title>Post Result</title>
    </head>
    <body>
        <h1>Post Example</h1>
        <?php echo $name."님의 아이디는 ".$id.",이메일 주소는 ".$email."입니다.";?>
    </body>
</html>