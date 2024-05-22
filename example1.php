<?php
$book = 10000;
$sale = 10;
$delivery = 2500;
$result = $book - ($book * $sale / 100) + $delivery;

echo "책 값 : ".$book."원<br>";
echo "할인율 : ".$sale."%<br>";
echo "배송료: ".$delivery."원<br>";
echo "결제 금액: ".$result."원<br>";

echo "<br>";
echo "<br>";

$wonha = 10;
$euro = 0.00068;
$result1 = 0;

$string = "";
$string .= "<table border='1'>";
$string .= "<tr><th width='100>원화</th><th width='100'>유로</th>";

echo "<table border='1'>";
echo "<tr><th width = '100'>원화</th><th width = '100'>유로</th>";



for($wonha = 10; $wonha <21; $wonha= $wonha+2)
{
    $result1 = $wonha * $euro;
    $f = ($wonha * 9/5) + 32;
    echo "<tr><th>$wonha</th><th>$result1</th>";
}
echo "</table>";
?>