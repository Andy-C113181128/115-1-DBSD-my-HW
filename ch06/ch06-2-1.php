
<?php
// 定義函數：印出網頁標題
function printHeader()
{
    echo "<h3>SID: C1234567</h3>";
    echo "<h3>Name: Smith</h3>";
    echo "<h3>EX2</h3>";
}

// 定義函數：印出頁尾
function printFooter()
{
    echo "<h3>PHP and MySQL PageDesign</h3>";
    echo "<hr><br>";
    echo "(c) C113181128-陳柏亨. All rights reserved.";
}

// 呼叫函數：印出標題
printHeader();

// 顯示網頁內容
echo "<p>This is a simple PHP page.</p>";

// 呼叫函數：印出頁尾
printFooter();
?>
