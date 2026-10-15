<?php
function printHeader() {
echo "<h3>SID: C113181128</h3>";
echo "<h3>NAME: 陳柏亨</h3>";
echo "<h3>EX05</h3>";
}

printHeader();
function callFunc1(Closure $closure)
{
$closure();
}

// 使用 callable 作為參數
function callFunc2(callable $callback)
{
$callback();
}

// 定義匿名函數
$hello = function () {
echo "Hello, World!<br/>";
};

// 定義一般函數
function hi()
{
echo "Hi, World!<br/>";
}

// 呼叫函數
callFunc1($hello);
callFunc2("hi");
?>