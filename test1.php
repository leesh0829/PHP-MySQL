여기는 HTML영역
<br>
<?php
echo "<br>";
echo "여기는 PHP영역<br>";
$str1 = "Hello World";
$str2 = "PHP!!!";
echo "중괄호를 이용한 변수 출력 {$str1}<br>";
echo "문자열 간 결합 연산자 ." .$str1."!!!!<br>";
echo "문자열 간 결합 연산자 ." .$str1.$str2."!!!<br>";

// 주석 처리
// 한줄
#한줄
/* 여러 줄 */

//상수 선언 방법
echo "<br>";
echo "<br>";
echo "상수 선언 방법<br>";
define("CONSTANT_BOOL", true);
define("CONSTANT_BOOL2", false);
define("CONSTANT_INT", 5);
define("constant_float", 3.14);
define("constant_string", "문자열도 가능.");
const OTHER = "또 다른 상수 정의 방법";

echo CONSTANT_BOOL;
echo "<br>";
echo CONSTANT_BOOL2;
echo "<br>";
echo CONSTANT_INT;
echo "<br>";
echo constant_float;
echo "<br>";
echo constant_string;
echo "<br>";
echo OTHER;
echo "<br>";

$배열 = array("사과", 5, true, false, 3.14);
$배열1 = ["사과", 5, true, false, 3.14];

echo "<br>";
print_r($배열);
print_r($배열1);
var_dump($배열);
var_dump($배열1);

echo "<br>";
echo "<br>";
echo "연관 배열 선언 방법<br>";

$test_array = array(
    "key1" => "사과",
    "key2" => 5,
    "key3" => true,
    "key4" => false,
    "key5" => 3.14,
);
$test_array2 = array(
    "key1" => "사과",
    "key2" => 5,
    "key3" => true,
    "key4" => false,
    "key5" => 3.14,
);

echo $test_array['key1']."<br>";
echo $test_array2['key3']."<br>";

//산술연산자
echo "<br>";
echo "<br>";
echo "산술 연산자<br>";

$a = 5;
$b = 3;
$c1 = $a ** $b;

echo "a에 b승은 {c3}입니다. <br>";

//비교연산자
echo "<br>";
echo "<br>";
echo "비교 연산자<br>";
echo "a < b는 ".($a < $b)."입니다.<br>";
echo "a != b는 ".($a != $b)."입니다.<br>"; //같지 않을때 true(1) 같지 않으면 false()
echo "a <> b는 ".($a <> $b)."입니다.<br>";
echo "a !== b는 ".($a !== $b)."입니다.<br>"; //데이터 형식까지 같아야함

//대입연산자
echo "<br>";
echo "<br>";
echo "대입 연산자<br>";
$a += $b; //a= a+b
$a .= $b;
echo "복합대입연산자<br>";
echo "a .= b는 {$a} 입니다.<br>";

//논리연산자
$a = true;
$b = false;

echo "<br>";
echo "<br>";
echo "대입 연산자<br>";
echo "a xor b는 " .($a xor $b). " 입니다.<br>";

//삼항 연산자
echo "<br>";
echo "<br>";
echo "삼항 연산자<br>";
$age = 20;
echo $age == 19 ? 1 : 2; //true이면 앞에꺼 false이면 뒤에꺼 반환

$my_age = $age ?: 18; //
echo $my_age;

//null 병합 연산자
echo "<br>";
echo "<br>";
echo "null 병합 연산자<br>";
$str1 = "hello world";
$str2 = "PHP";
$result1 = $str1 ?? $str2;
echo $result1;
echo "<br>";

$str1 = "null";
$str2 = "null";
$result2 = $str1 ?? $str2;
echo $result2;
echo "<br>";

$str1 = null;
$str2 = null;
$result3 = $str1 ?? $str2;
echo $result3;
echo "<br>";

$fruits = [
    "apple" => "사과",
    "banana" => "바나나",
    "strawberry" => "딸기"
];

echo "<br>";
echo "값만 출력 <br>";
foreach($fruits as $fruit) {
    echo "{$fruit}<br>";
}

foreach($fruits as $eng => $kor) {
    echo "{$eng} => {$kor}<br>";
}

//함수
function hello_world(){
    echo "Hellow world<br>";
}

hello_world();

echo "<br>";
function profile($name, $age){
    $my_profile = "저의 이름은 {$name}입니다. 나이는{$age}입니다.<br>";
    return $my_profile;
}

echo profile("이승현", "19");
echo "<br>";
echo profile(age: 19, name: "이승현");

echo "<br>";
echo "<br>";
echo "스플랫(..) 연산자<br>";
function sum(...$numbers){
    $acc = 0;
    foreach($numbers as $n){
        $acc += $n;
    }
    return $acc;
}

echo "<br>";
echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

echo "<br>";
echo "<br>";
echo "익명함수<br>";
$lambda = function($name){
    return $name;
};

echo $lambda("이승현<br>");

echo "<br>";
echo "<br>";
echo "화살표 함수<br>";
$lambda1 = fn() => "이승현";
echo $lambda1();

echo "<br>";
echo "<br>";
echo "객체<br>";
class Hello {
    public $name = "이승현";

    function say_hello(){
        return $this -> name."님 안녕하세요.";
    }
}

$message = new Hello();
echo "<br>";
echo $message -> say_hello();
echo "<br>";

// 의사 변수 $this : 클래스 내에서만 사용 가능
// $인스턴스 명 -> 속성명 = "속성값"
// $인스턴스 명 -> 메서드명()
echo "<br>";
echo "<br>";
echo "의사 변수 this<br>";

class Fruit {
    public $name;
    public $color;

    function set_fruit(string $name, string $color) {
        $this -> name = $name; // $this -> name에 매개변수로 받은 $name으로 대입, $this -> name은 
        $this -> color = $color;
    }
    function get_fruit() : string{
        $string = "이 과일은 {$this->name} 입니다. 색깔은 {$this->color}입니다.";
        return $string;
    }
}
$apple = new Fruit();
$apple -> set_fruit(name: '사과', color:'빨강');
echo $apple -> get_fruit();

echo "<br>-------------<br>";
echo "섭씨 화씨<br>";
echo "-------------<br>";

for($c=-10; $c<=30; $c+=5){
    $f = ($c * 9/5) + 32;
    echo $c." &nbsp; ".$f."<br>";
}

echo "-------------<br>";
echo "-------------<br>";

$string = "";
$string .= "<table border='1'>";
$string .= "<tr><th width='100>섭씨</th><th width='100'>화씨</th>";

echo "<table border='1'>";
echo "<tr><th width = '100'>섭씨</th><th width = '100'>화씨</th>";
for($c=-10; $c<=30; $c+=5){
    $f = ($c * 9/5) + 32;
    echo "<tr><th>$c</th><th>$f</th>";
}
echo "</table>";
?>