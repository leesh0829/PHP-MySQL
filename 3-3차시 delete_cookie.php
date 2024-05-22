<?php
setcookie("username", "", time()-60*60*24*30);
echo "쿠키 삭제 완료";
?>