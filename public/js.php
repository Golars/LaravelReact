<div id="test"></div>
<?php
$javaScriptCode = <<<'STR'
function FizzBuzz(correspondences) {
    this.correspondences = correspondences;
    this.accept = function (number) {
        var result = ""
        for (var divisor in this.correspondences) {
            if (number % divisor == 0) {
                result = result + this.correspondences[divisor];
            }
        }
        if (result) {
            return result;
        } else {
            return number;
        }
    }
}
var myFizzBuzz = new FizzBuzz({3 : "Fizz", 5 : "Buzz"});
myFizzBuzz.accept(15);
STR;
;

$v8 = new V8Js();
var_dump($v8->executeString($javaScriptCode));

$start = microtime(true);
$array = array();
for ($i=0; $i<50000; $i++) $array[] = $i*2;

$array2 = array();
for ($i=20000; $i<21000; $i++) $array2[] = $i*2;

foreach ($array as $val) {
    foreach ($array2 as $val2) if ($val == $val2) {}
}
echo (microtime(true)-$start)."\n"; // 8.60s


$start = microtime(true);
$v8 = new V8Js();
$JS = <<< EOT
var array = [];
for (i=0; i<50000; i++) array.push(i*2);

var array2 = [];
for (i=20000; i<21000; i++) array2.push(i*2);

for (key=0; key<array.length; key++) {
  for (key2=0; key2<array2.length; key2++) if (array[key] == array2[key2]) {}
}
print('done.');
EOT;
$v8->executeString($JS, 'basic.js');
echo ' '.(microtime(true)-$start)."\n"; // 3.49s