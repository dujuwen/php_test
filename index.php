<?php

// $arr = [2, 1, 3, 6, 5, 4, 7];
// usort($arr, function (int $a, int $b) { return  ($a <=> $b); });

// var_dump($arr);
// die;

// function cmp($a, $b)
// {
//     if ($a == $b) {
//         return 0;
//     }

//     return ($a < $b) ? 1 : -1;
// }

// $a = array(3, 2, 5, 6, 1);

// usort($a, "cmp");

// foreach ($a as $key => $value) {
//     echo "$key: $value\n";
// }

// die;

$queue = new SplQueue();
$queue->enqueue(1); //用数组式入队列也可以 $queue[] = 1;
$queue->enqueue(2);
$queue->enqueue(3);

foreach ($queue as $value) {
    echo $value . PHP_EOL;
}

die;

// class A {
//     public static $arr = array();

//     public function t1() {

//     }

//     public static function t2() {
//         return self::$arr;
//     }
// }

// class B extends A {
//     public function t1() {
//         self::$arr[] = 'DJW';
//     }
// }

// (new B())->t1();
// var_dump(B::t2());

// umask(011);
// $filename = 'djw4';
// // 哈哈哈这是注释
// // file_put_contents($filename, 1);
// touch($filename);

// preg_match('/(\d{10})/', '/Date(1502149800000)/', $matches);
// var_dump($matches);

// var_dump(intval(ltrim('/Date(1502149800000)/', '/Date(')));

// class Test {
//     public static $FOO = 'haha';
//     const VERSION = 1.0;
// }

// echo Test::$FOO;
// echo Test::VERSION;

// Test::$FOO = 'sss';

// echo Test::$FOO;
// echo Test::VERSION;

// class Foo {
//     function name()
//     {
//         echo "My name is " , get_class() , "\n";
//     }
// }

// // create an object
// $bar = new foo();

// // external call
// echo "Its name is " , get_class($bar) , "\n";

// // internal call
// $bar->name();

// class Test {
//     public function __construct(){
//         var_dump(__CLASS__);
//     }
// }
// // var_dump(test::class, Test::class);

// class eTest extends Test{
//     public function __construct(){
//         var_dump(__CLASS__);
//         parent::__construct();
//     }
// }


// $str = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 车门的发展史早期我们看到的汽车都是没有车门的，类似这样';

// var_dump(handle_escape_sequence($str));

// function handle_escape_sequence($str) {
//     if ($str) {
//         return mb_convert_encoding(mb_convert_encoding($str, 'HTML-ENTITIES'), 'UTF8', 'HTML-ENTITIES');
//     }
//     return '';
// }

//php switch比较是松散比较,并且case后面还可以跟变量
// $i = '45';
// $b = 45;

// switch ($i) {
//     case $b:
//         echo 45;
//     break;

//     case '45':
//         echo '45s';
//     break;
// }


// class mockPost {
//     public $postData;
//     public function __construct($postData = null) {
//         if ($postData) {
//             $this->postData = $postData;
//         } else {
//             $this->postData = file_get_contents('php://input');
//         }
//     }
// }

// $catList = [
//     '1' => ['id' => 1, 'name' => '颜色', 'parent_id' => 0],
//     '2' => ['id' => 2, 'name' => '规格', 'parent_id' => 0],
//     '3' => ['id' => 3, 'name' => '白色', 'parent_id' => 1],
//     '4' => ['id' => 4, 'name' => '黑色', 'parent_id' => 1],
//     '5' => ['id' => 5, 'name' => '大', 'parent_id' => 2],
//     '6' => ['id' => 6, 'name' => '小', 'parent_id' => 2],
//     '7' => ['id' => 7, 'name' => '黄色', 'parent_id' => 1]
// ];

// $treeData = [];// 保存结果
// foreach ($catList as $item) {
//     if (isset($catList[$item['parent_id']]) && ! empty($catList[$item['parent_id']])) {// 肯定是子分类
//         $catList[$item['parent_id']]['children'][] = &$catList[$item['id']];
//     } else {// 肯定是一级分类
//         $treeData[] = &$catList[$item['id']];
//     }
// }
// var_dump($treeData);

// function generateData($max)
// {
// //     $arr = [];
//     for ($i = 0; $i <= $max; $i++) {
//         yield  $i;
//     }
// //     return $arr;
// }

// $data = generateData(500);
// foreach ($data as $d) {
//     echo $d . PHP_EOL;
// }

// function test(...$args) {
//     var_dump(func_get_args());
// }

// test(...[9, 10]); //等价于 test(9, 10)
// // array(2) {
// //     [0]=>
// //     int(9)
// //     [1]=>
// //     int(10)
// // }

// test([9, 10]);
// // array(1) {
// //     [0]=>
// //     array(2) {
// //         [0]=>
// //         int(9)
// //         [1]=>
// //         int(10)
// //     }
// // }

// $arr = [1, 4, 6, 10, 5, 2];
// sort($arr);
// list($a, $b) = $arr;
// var_dump($a, $b);

// {"index":{"_id":"1"}}
// function getChar($num)  // $num为生成汉字的数量
// {
//     $b = '';
//     for ($i=0; $i<$num; $i++) {
//         // 使用chr()函数拼接双字节汉字，前一个chr()为高位字节，后一个为低位字节
//         $a = chr(mt_rand(0xB0,0xD0)).chr(mt_rand(0xA1, 0xF0));
//         // 转码
//         $b .= iconv('GB2312', 'UTF-8', $a);
//     }
//     return $b;
// }


// for ($i = 1001; $i < 1500; $i++) {
//     $index = [
//         'index' => [
//             '_id' => $i
//         ]
//     ];

//     $arr = [
//         "account_number" => $i,
//         "balance" => rand(2000, 15000),
//         "firstname" => getChar(rand(1,4)),
//         "lastname" => getChar(rand(1,4)),
//         "age" => rand(15, 80),
//         "gender" => "M",
//         "address" => getChar(rand(3,20)),
//         "employer" => getChar(rand(3,20)),
//         "email" => "test@tropolis.com",
//         "city" => getChar(rand(2,5)),
//         "state" => "ND"
//     ];

//     $fileName = '/Users/dujunwen/test.json';
//     file_put_contents($fileName, json_encode($index) . PHP_EOL, FILE_APPEND);
//     file_put_contents($fileName, json_encode($arr) . PHP_EOL, FILE_APPEND);
// }

// $buckets = [
//     ['key' => 0, 'doc_count' => 990],
//     ['key' => 1000, 'doc_count' => 998],
//     ['key' => 2000, 'doc_count' => 999],
//     ['key' => 3000, 'doc_count' => 1000],
//     ['key' => 4000, 'doc_count' => 999]
// ];
// $startId = 0;
// $endId = 0;
// $skipDocCount = 0;
// $from = 990 + 997;
// $fromSize = $from + 15;
// $interval = 1000;
// $docCount = 0;
// foreach ($buckets as $i => $bucket) {
//     $docCount += $bucket['doc_count'];
//     if ($from <= $docCount) {
//         if ($from == $docCount) {
//             $startId = $bucket['key'] + $interval;
//         } else {
//             $startId = $bucket['key'];
//         }
//         if (count($buckets) > 0) {
//             foreach ($buckets as $j => $bucket2) {
//                 if ($fromSize <= $docCount) {
//                     $endId = $bucket2['key'] + $interval;
//                     break;
//                 }
//                 $docCount += $bucket['doc_count'];
//             }
//         }
//         break;
//     }
//     unset($buckets[$i]);
//     $skipDocCount += $docCount;
// }

// // var_dump('sss', count($buckets), $from, $fromSize, $skipDocCount, $startId, $endId);
// var_dump($startId, $endId, $skipDocCount);



/**
 * 发红包了
 *
 * @param int $money 发多少
 * @param int $people 给几个人发
 *
 * @return array
 */
// function redPackets($money, $people) {
//     if ($money < 0 || $people < 1) {
//         throw new \Exception('你想做咩啊!');
//     }

//     //扩大100倍
//     $total = $money * 100;
//     //一个最少一分钱,扩大了100倍
//     $min = 1;

//     if ($people * $min > $total) {
//         throw new \Exception('不要装B了, QG!');
//     }

//     $arr = [];
//     if ($people * $min == $total) {
//         //极端情况
//         $arr = array_fill(0, $people, $min);
//     } else {
//         for ($i = 1; $i <= $people; $i++) {
//             if ($i == $people) {
//                 //最后一个了没得选
//                 $arr[] = $total;
//             } else {
//                 //剩下几个人
//                 $leave = $people - $i;
//                 //防止极端情况出现,不能一个人就发完了啊,说好每个人都有的
//                 $rand = rand($min, $total - $leave);
//                 $total -= $rand;
//                 $arr[] = $rand;
//             }
//         }
//     }

//     //实际才发了多少，不要多想了，还是缩小100倍吧
//     array_walk($arr, function(&$v) {
//         $v =  $v / 100;
//     });

//     return $arr;
// }
// $re = redPackets(0.1, 10);
// var_dump($re);

// $string = 'O:6:"Foobar":2:{s:3:"foo";s:1:"1";s:3:"bar";s:1:"2";}';

// $result = unserialize($string);

// var_dump($result);

// $re = password_hash('djw', PASSWORD_BCRYPT);
// var_dump(password_get_info($re));die;

// $timeTarget = 0.05; // 50 毫秒（milliseconds）

// $cost = 8;
// do {
//     $cost++;
//     $start = microtime(true);
//     password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
//     $end = microtime(true);
// } while (($end - $start) < $timeTarget);

// echo "Appropriate Cost Found: " . $cost;

//gcd(a,b)=gcd(b, a%b)
// function gcd($p, $q) {
//     if ($q == 0) {
//         return $p;
//     }
//     return gcd($q, $p % $q);
// }

// function gcd2($p, $q) {
//     while ($q != 0) {
//         $r = $p % $q;
//         $p = $q;
//         $q = $r;
//     }
//     return $p;
// }


/**
 * 产生随机中文字符串
 *
 * @param int $num 字符串文字数
 * @return string
 */
// function randomChineseStr($num) {
//     $num = intval($num);
//     if ($num > 0) {
//         $decodeStr = '"';
//         $min = hexdec('4e00');
//         $max = hexdec('9fa5');
//         for ($i = 0; $i < $num; $i++) {
//             $decodeStr .= '\u' . dechex(rand($min, $max));
//         }
//         $decodeStr .= '"';
//         return json_decode($decodeStr);
//     }

//     return '';
// }


// timeout of one second
// function test() {
//     $context = stream_context_create(array('http'=> array(
//         'timeout' => 1.0,
//         'ignore_errors' => true,
//     )));

//     $data = @file_get_contents("http://xxxx/v1/usertest", false, $context);

//     if ($data === false && count($http_response_header) === 0) {
//         var_dump('timeout');
//     } else {
//         var_dump($data);
//     }
// }

// function djw($a, $b) {
//     return $a <=> $b;
// }

// var_dump(djw(1, 20));
// var_dump(djw(1, 1));
// var_dump(djw(20, 1));

// function add(int $a, int $b): array{
//     return $a + $b;
// }

// var_dump(add(1, '10.s'));

// class wo {
//     const A = [1, 2];
// }
// var_dump(wo::A);

// printf('%x', IntlChar::CODEPOINT_MAX);
// echo IntlChar::charName('@');
// var_dump(IntlChar::ispunct('!'));

// class A {private $x = 1;}
// $getX = function() {return $this->x;};
// echo $getX->call(new A);

// $a = false; // or 0 or false

// $b = $a ?? 'a';
// var_dump($b);

// 生成伪随机字符串
// $bytes = random_bytes(1);
// var_dump(bin2hex($bytes));

// var_dump(random_int(1, 1));

// class ConstDemo
// {
//     const PUBLIC_CONST_A = 10;
//     public const PUBLIC_CONST_B = 2;
//     protected const PROTECTED_CONST = 3;
//     private const PRIVATE_CONST = 4;
// }

// var_dump(ConstDemo::PUBLIC_CONST_A);


// $data = [
//     [1, 'Tom'],
//     [2, 'Fred'],
// ];
// foreach ($data as [$id, $name]) {
//     var_dump($id, $name);
// }

// var_dump("abcdef"[-2], "abcdef"[-5], "abcdef"[0]);

// class CallableClass
// {
//     function __invoke($x) {
//         var_dump($x);
//     }
// }
// $obj = new CallableClass;
// $obj(5);
// var_dump(is_callable($obj));

// ini_set('url_rewriter.tags', 'a=href,form=');
// output_add_rewrite_var('name', 'djw');

// // some links
// echo '<a href="file.php">link</a>
// <a href="http://example.com">link2</a>';

// // a form
// echo '<form action="script.php" method="post">
// <input type="text" name="var2" />
// </form>';


// class MethodTest
// {
//     private $x = 1;

//     public function __get($name)
//     {
//         var_dump($name . 'xxx'); //不会触发
//     }

// }

// $func = function() {
//     return $this->x;
// };

// $re = $func->call(new MethodTest);
// var_dump($re); // 1

// $helpDoc = <<<EOT
// 帮助:
// -f 字段
// -t 表
// -w where条件
// EOT;

// $opts = getopt('f::t::h::w::', ['opt:']);
// if (is_array($opts) && count($opts)) {
//     switch (true) {
//         case array_key_exists('h', $opts):
//             echo $helpDoc . PHP_EOL;
//             return ;
//         break;

//         default:
//         break;
//     }

//     $field = '';
//     if (array_key_exists('f', $opts)) {
//         $field = $opts['f'];
//     }
//     $table = '';
//     if (array_key_exists('t', $opts)) {
//         $table = $opts['t'];
//     }
//     $where = '';
//     if (array_key_exists('w', $opts)) {
//         $where = $opts['w'];
//     }
//     var_dump("select {$field} from `$table` where {$where}");
// }

// function &gen_reference() {
//     $value = 3;

//     while ($value > 0) {
//         yield $value;
//     }
// }

// /*
//  * 我们可以在循环中修改$number的值，而生成器是使用的引用值来生成，所以gen_reference()内部的$value值也会跟着变化。
//  */
// $count = 0;
// foreach (gen_reference() as &$number) {
//     $count++;
//     if ($count > 20) {
//         return ;
//     }
//     echo (--$number).'... ';
// }

// function printer() {
//     while (true) {
//         $string = yield;
//         echo $string;
//     }
// }

// $printer = printer();
// $printer->send('Hello world!');

// var_dump(1 | 2 | 4 | 8);
// var_dump(15 & ~1, 15 & ~2, 15 & ~4, 15 & ~8, 111 & 1 ,2222 & 1);

// new priority: .php .inc

// class test implements JsonSerializable {
//     public $name = 'djw';
//     public function jsonSerialize() {
//         return '啊哈哈哈' . $this->name;
//     }
// }

// var_dump(json_encode(new test(), JSON_UNESCAPED_UNICODE));



// function profile()
// {
//     static $i;
//     $i++;
//     echo "==$i\n";
// }

// // Set up a tick handler
// register_tick_function("profile");

// // Run a block of code, throw a tick every 2nd statement
// declare(ticks=1) {
//     for ($x = 0; $x < 10; $x++) {
//         echo $x . PHP_EOL;
//     }
// }

// echo("ss");

// $password = 'djwtes';
// $hash = password_hash($password, PASSWORD_DEFAULT);
// var_dump($hash, password_verify($password, $hash), password_get_info($hash));

// function myErrorHandler($errno, $errstr, $errfile, $errline)
// {
//     var_dump('eee:' . $errstr);die;
// }
// function myErrorHandler2($errno, $errstr, $errfile, $errline)
// {
//     var_dump('eee:' . $errstr);die;
// }
// $re = set_error_handler('myErrorHandler');
// $re2 = set_error_handler('myErrorHandler2');

// var_dump($re, $re2);

// set_exception_handler('myErrorHandler');

// var_dump(date_default_timezone_get(), date('Y-m-d H:i:s'));

// 处理断言失败时的函数
// function my_assert_handler($file, $line, $code, $desc = null)
// {
//     echo "Assertion failed at $file:$line: $code";
//     if ($desc) {
//         echo ": $desc";
//     }
//     echo "\n";
// }

// // 设置断言标志
// assert_options(ASSERT_ACTIVE,   true);
// assert_options(ASSERT_BAIL,     true);
// assert_options(ASSERT_WARNING,  true);
// assert_options(ASSERT_CALLBACK, 'my_assert_handler');

// assert(true == false, 'sb');
// echo 'Hi!';

// session_reset();
// session_start();
// session_reset();
// if (!isset($_SESSION['count3'])) {
//     $_SESSION['count3'] = 0;
// } else {
//     $_SESSION['count3'] =  $_SESSION['count3'] + 1;
// }
// var_dump($_SESSION, session_status(), PHP_SESSION_ACTIVE);

// $str = 'This is an encoded string';
// $chars = preg_split('//', $str);
// print_r($chars);

// $url = 'https://www.tuhu.org/';
// print_r(get_headers($url));

// $str = 'foo ~';
// var_dump(urlencode($str), rawurlencode($str));
// $str = 'sales and marketing/Miami';
// var_dump(urlencode($str), rawurlencode($str));
// string(7) "foo+%7E"
// string(7) "foo%20~"
// string(27) "sales+and+marketing%2FMiami"
// string(31) "sales%20and%20marketing%2FMiami"

// $arr = [1, 2 ,'sss', ['sd', '2', 99]];
// var_dump($arr);
// var_export($arr);
// print_r($arr);
// function randomFloat($min = 0, $max = 1) {
//     return $min + mt_rand() / mt_getrandmax() * ($max - $min);
// }

// var_dump(date('Y-m-d'), date('Y-m-d 23:59:59'));

// $arr = [
//     3639 => '奔驰B级',
//     4144 => '华晨V5',
//     4122 => '雪铁龙C3'
// ];
// $arr = [
//     'https://img3.tuhu.org/bbs/79ce/a762/0b7e2ce6aacff569f643a18c_w491_h358.png?ratio=0.73',
//     'https://img3.tuhu.org/bbs/6eaf/357b/e24648c7ee527adb928b6045_w510_h298.jpg?ratio=0.58',
//     'https://img3.tuhu.org/bbs/8486/1e9f/797e7c25e19112a620acc4b6_w350_h187.jpg?ratio=0.53'
// ];
// var_dump(json_encode($arr, JSON_UNESCAPED_UNICODE));

// $str = 'https://img1.tuhu.org/bbs/6fab/27de/22915428e967751c85fd8a7c_w450_h600.jpg?imageView2/1/w/200/h/200';
// if ($newStr = strrchr($str, '?')) {
//     $str = str_replace($newStr, '', $str);
// }

// $data = 'dujuwen';
// $sha1Str = sha1($data, true);
// var_dump($sha1Str);
// $err = error_get_last();
// if ($err !== null) {
//     var_dump($err, 11);die;
// }
// $byteArray = unpack('C*', $sha1Str);

// $url = base64_encode('https://img1.tuhu.org/bbs/6603/9bef/9b73710dc12f7823a36079c5_w301_h301.png');
// var_dump(str_replace('/', '_', str_replace('+', '-', $url)));


// var_dump(bindec('11100000'));
// var_dump(bindec('01111111'),decbin(168),decbin(0),decbin(1));

//11000000101010000000000000000001
//11111111111111111111111100000000
//192.168.0.1

// function test($a, &$b) {
//     $b = 10;
// }

// $a = $b = 1;
// // test($a, $b);
// call_user_func_array('test', [$a, &$b]);

// var_dump($a, $b);

// var_dump(0777 & (~(0022)), base_convert('022', 8, 2), base_convert('777', 8, 2), -6^6);

//求a的b次方值
//https://baike.baidu.com/item/%E5%BF%AB%E9%80%9F%E5%B9%82/5500243?fr=aladdin
function myPow(int $a,int $b){
    $re = 1;
    $base = $a;
    while ($b) {
        if ($b & 1) {
            $re *= $base;
        }

        $base *= $base;
        $b >>= 1;
    }
    return $re;
}

//a的b次方对c进行模运算
function quickMod(int $a, int $b, int $c){
    $re = 1;
    $a = $a % $c;
    while ($b) {
        if ($b & 1) {
            $re = ($re * $a) % $c;
        }

        $a = ($a * $a) % $c;
        $b >>= 1;
    }

    return $re;
}

function quickMod2(int $a, int $b, int $c){
    $re = 1;
    $a = $a % $c;
    while ($b) {
        if ($b & 1) {
            $re = ($re * $a) % $c;
        }

        $a = ($a * $a) % $c;
        $b >>= 1;
    }

    return $re == 1;
}


function isPrime(int $num) {
    if ($num <= 3) {
        return $num > 1;
    } else if ($num < 29) {
        if (in_array($num, [5, 7, 11, 13, 17, 19, 23])) {
            return true;
        } else {
            return false;
        }
    } else {
        return quickMod2(2, $num - 1, $num);
    }
}

function isPrime3(int $num) {
    if ($num <= 3) {
        return $num > 1;
    } else if ($num % 2 === 0 || $num % 3 === 0) {
        return false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
}

function isPrime2($n) {//TurkHackTeam AVP production
    if ($n <= 3) {
        return $n > 1;
    } else if ($n % 2 === 0 || $n % 3 === 0) {
        return false;
    } else {
        for ($i = 5; $i * $i <= $n; $i += 6) {
            if ($n % $i === 0 || $n % ($i + 2) === 0) {
                return false;
            }
        }
        return true;
    }
}

// $time = microtime(true);
// $count = 0;
// for ($i = 0; $i <= 1000000; $i++) {
//     if (isPrime($i)) {
//         $count++;
// //         echo $i . PHP_EOL;
//     }
// }
// var_dump($count, microtime(true) - $time);


$str = 'sghjkghj sghjkyhuji哈哈';
$arr = str_split(md5($str), 1);
$map = [];
for ($i = 0; $i <= 9; $i++) {
    $map[$i] = $i;
}

for ($i = ord('a'); $i <= ord('z'); $i++) {
    $map[chr($i)] = $i;
}

$re = 0;

foreach ($arr as $v) {
    $re += $map[strtolower($v)];
}
// var_dump($re);

function bubbleSort($numbers) {
    $cnt = count($numbers);
    for ($i = 0; $i < $cnt - 1; $i++) {
        for ($j = 0; $j < $cnt - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    return $numbers;
}

function quickSort($arr){
    if(count($arr)>1){
        $k=$arr[0];
        $x=array();
        $y=array();
        $_size=count($arr);
        for($i=1;$i<$_size;$i++){
            if($arr[$i]<=$k){
                $x[]=$arr[$i];
            }elseif($arr[$i]>$k){
                $y[]=$arr[$i];
            }
        }
        $x=quickSort($x);
        $y=quickSort($y);
        return array_merge($x,array($k),$y);
    }else{
        return$arr;
    }
}

$num = array(2, 40, 60, 80, 30, 7, 90, 10, 5, 0);


$a = array(
    'where' => 'uid=1',
    'order' => 'uid',
    1 => 'ss',
);
$b = array(
    'where' => 'uid=2',
    'order' => 'uid desc',
    '1' => 'sss',
    '5' => 'sss',
);

function isInt($var) {
    if (! strlen($var)) {
        return false;
    }

    if (is_int($var) && intval($var) == $var) {
        return true;
    }

    $var = strtolower($var);
    $leftStr = substr($var, 0, 2) . '';
    $rightStr = substr($var, 2);

    foreach ([2, 8, 16] as $v) {
        $re1 = base_convert($var, $v, 2);
        $re2 = base_convert($var, $v, 8);
        $re3 = base_convert($var, $v, 16);
        var_dump(base_convert($re1, 2, 10),base_convert($re2, 8, 10),base_convert($re3, 16, 10));
    }

//     if (strlen($var) != mb_strlen($var)) {
//         return false;
//     }


// //     if ($leftStr == '0' && ) {
// //         ;
// //     }

    return false;
}

// function mystrtoupper($a){
//     $b = str_split($a, 1);
//     $r = '';
//     foreach($b as $v){
//         $v = ord($v);//对该字符转成acsii码
//         if($v >= 97 && $v<= 122){//判断是否为小写字母
//             $v -= 32;//转换成大写字母
//         }
//         $r .= chr($v);//将ascii码再转为相应的字符。
//     }
//     return $r;
// }


// $a = 'a中你继续F@#$%^&*(BMDJFDoalsdkfjasl';

// $str = 'http://www.baidu.com?a=1&c=..我 X~.&k0=abc.com/def;/?:@&=+$,# ';
// echo urlencode($str) . PHP_EOL;
// echo rawurlencode($str) . PHP_EOL;


// var_dump(DIRECTORY_SEPARATOR);

// $uids = [1,2,5,18,9];
// sort($uids, SORT_NUMERIC);
// $toUserId = array_shift($uids);
// $lastUserId = array_pop($uids);

// $ticket = 't02QxqnC-3mypXt9inarloQBPf4-wN-xWM9njjUsINwz8sQEYWgPg_lJlTjalVu_X-mJ1R23n0pzjaWn3m9yMwg9egCKf2Tjv3lauXqP3zCJXbATdpJV0RWDQ**';
// var_dump(strlen($ticket), mb_strlen($ticket));

// var_dump(preg_match('/^[a-zA-Z0-9]{6}$/', '127889'));die;


// $re = array_intersect_key(['name' => 'djw', 'age' => 1, 'hhh' => 99], ['name' => '', 'hhh' => ''], ['name' => '']);
// $var = filter_var(111.8, FILTER_SANITIZE_NUMBER_FLOAT);

// $var = preg_replace('/[^[:alpha:]]/', '', 'fgh34aaa56789#$%^&', -1 , $count);

// $start = microtime(true);
// $pattern = "/\d++./";
// $subject = "345678ss9345ssshsh";
// $re = preg_match_all($pattern, $subject, $matches);
// var_dump($re, $matches, microtime(true) - $start);

// $re = preg_match('/y[eE]?[sS]?/', 'y', $matches);
// var_dump($re, $matches);

// throw new \Exception('xxx');


// stream_context_set_default(
//     array(
//         'http' => array(
//             'method' => 'HEAD'
//         )
//     )
//     );

function base64EncodeUrlSafe(string $input = '') : string
{
        return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($input));
//         return str_replace(['+', '/'], ['-', '_'], $encStr);

}

function base64EncodeUrlSafe2(string $input) : string
{
    if ($input) {
        return rtrim(strtr(base64_encode($input), '+/', '-_'), '=');
    }
}


// function base64DecodeUrlSafe(string $encStr) : string
// {
//     if ($encStr) {
//         $encStr = str_replace(['-', '_'], ['+', '/'], $encStr);
//         if ($mod = strlen($encStr) % 4) {
//             $encStr .= str_repeat('=', 4 - $mod);
//             //$encStr .= substr('====', $mod);
//         }

//         return base64_decode($encStr);
//     }
// }

//var_dump(urlencode('+= _-~.'), rawurlencode('+= _-~.'));

//var_dump(base64EncodeUrlSafe(random_bytes(12)));

// var_dump(0x30, 0x61, 0x41);


// function filterTitle($str) {
//     if ($str) {
//         $str = preg_replace('/[^a-zA-Z0-9\x{4e00}-\x{9fa5}]/u', '-', $str);
//         return preg_replace('/-{1,}/', '-', $str);
//     }
// }

class Hero {

    protected $name;

    protected $skills = [];

    public function __construct($name, $skills = []) {
        $this->name = $name;
        $this->skills = $skills;
    }

    public function attack($hero) {
        echo "Attack {$hero->name}" . PHP_EOL;
    }

    public function execute($index) {
        echo "Axecute {$index} skill" . PHP_EOL;
    }
}

// $ref = new ReflectionClass('Hero');

// if ($ref->isInstantiable()) {
//     echo '可以实例化' . PHP_EOL;
// }

// // 获取类的构造函数
// $constructor = $ref->getConstructor();
// print_r($constructor); //ReflectionMethod  E对象
// //获取属性
// if ($ref->hasProperty('name')) {
//     $attr = $ref->getProperty('name');
//     print_r($attr); //ReflectionProperty  对象
// }

// // 获取属性列表
// $attributes = $ref->getProperties();
// foreach ($attributes as $row) {
//     //row 为 ReflectionProperty 的实例
//     echo $row->getName() . "\n";
// }

// // 获取方法
// if ($ref->hasMethod('attack')) {
//     $method = $ref->getMethod('attack');
//     //$method 为 ReflectionMethod 的实例
//     print_r($method);
// }

// // 获取方法列表
// $methods = $ref->getMethods();
// foreach ($methods as $row) {
//     //这的row 是 ReflectionMethod 的实例
//     echo $row->getName() . PHP_EOL;
// }


class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}

class WorkerPool implements \Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

//         $this->occupiedWorkers[] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}

// $testFun = function() {
//     return self::name;
// };

// class Djw {
//     private const name = 'djwx';

//     public function __construct($name){}
// }

// $fun = Closure::bind($testFun, null, Djw::class);
// var_dump($fun());

// function call_private_method($object, $method, $args = array()) {
//     $reflection = new ReflectionClass($object);
//     $closure = $reflection->getMethod($method)->getClosure($object);
//     return call_user_func_array($closure, $args);
// }

// class Example {
//     private $x = 1, $y = 10;

//     private function sum() {
//         print $this->x + $this->y;
//     }

// }

// // call_private_method(new Example(), 'sum');

// $a = new ArrayIterator(array('test1', 'test2', 'test3'));
// $i = new RegexIterator($a, '/^(test)(\d+)/', RegexIterator::REPLACE);
// $i->replacement = '$2:$1';

// print_r(iterator_to_array($i));


// $expected_array_got_string = 'somestring';
// var_dump(empty($expected_array_got_string['some_key']));
// var_dump(empty($expected_array_got_string[0]));
// var_dump(empty($expected_array_got_string['0']));
// var_dump(empty($expected_array_got_string[0.5]));
// var_dump(empty($expected_array_got_string['0.5']));
// var_dump(empty($expected_array_got_string['0 Mostel']));

//使用ticks需要PHP 4.3.0以上版本
// pcntl_async_signals(true);

// //信号处理函数
// function sig_handler($signo)
// {

//     switch ($signo) {
//         case SIGTERM:
//             // 处理SIGTERM信号
//             exit;
//             break;
//         case SIGHUP:
//             //处理SIGHUP信号
//             break;
//         case SIGUSR1:
//             echo "Caught SIGUSR1...\n";
//             break;
//         default:
//             // 处理所有其他信号
//     }

// }

// echo "Installing signal handler...\n";

// //安装信号处理器
// pcntl_signal(SIGTERM, "sig_handler");
// pcntl_signal(SIGHUP,  "sig_handler");
// pcntl_signal(SIGUSR1, "sig_handler");

// // 或者在PHP 4.3.0以上版本可以使用对象方法
// // pcntl_signal(SIGUSR1, array($obj, "do_something");

// echo "Generating signal SIGTERM to self...\n";

// //向当前进程发送SIGUSR1信号
// posix_kill(posix_getpid(), SIGTERM);

var_dump(swoole_cpu_num());

