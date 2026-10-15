
<?php
// 定義函數：計算盒子的體積，設定預設參數
function volume($length, $width = 10, $height = 15)
{
    print $length . "x" . $width . "x" . $height . "= ";
    return $length * $width * $height;
}

// 設定長、寬、高
$l = 10;
$w = 20;
$h = 30;

// 方法一：指定長、寬、高
print "盒子體積：";
print volume($l, $w, $h) . "<br/>";

// 方法二：指定長、寬，使用預設高度
print "盒子體積：";
print volume($l, $w) . "<br/>";

// 方法三：只指定長，使用預設寬度與高度
print "盒子體積：";
print volume($l) . "<hr/>";

// 方法四：使用變數函數呼叫
$func = "volume";

print "盒子體積：";
print $func($l, $w, $h) . "<br/>";

print "盒子體積：";
print $func($l, $w) . "<br/>";

print "盒子體積：";
print $func($l) . "<hr/>";
?>
