<?php
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














