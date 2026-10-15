<?php
function printHeader() {
echo "<h3>SID: C113181128</h3>";
echo "<h3>NAME: 陳柏亨</h3>";
echo "<h3>EX03</h3>";
}

printHeader();
function volume($length, $width = 10, $height = 15)
{
print $length . "x" . $width . "x" . $height . "= ";
return $length * $width * $height;
}

$l = 10;
$w = 20;
$h = 30;

// 指定長、寬、高
print "盒子體積：";
print volume($l, $w, $h) . "<br/>";

// 指定長、寬，使用預設高度
print "盒子體積：";
print volume($l, $w) . "<br/>";

// 只指定長，使用預設寬度與高度
print "盒子體積：";
print volume($l) . "<hr/>";
?>