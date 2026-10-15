

<?php
// 定義函數：印出網頁標題
function printHeader()
{
    echo "<h3>SID: C113181128</h3>";
    echo "<h3>Name: 陳柏亨</h3>";
    echo "<h3>EX04</h3>";
}

// 呼叫函數：印出標題
printHeader();

// 宣告變數
$test = 15;

// 顯示變數的資料型態和值
var_dump($test);

// 換行
echo "<br>";

// 刪除變數
unset($test);

// 再次顯示變數
var_dump($test);
?>


