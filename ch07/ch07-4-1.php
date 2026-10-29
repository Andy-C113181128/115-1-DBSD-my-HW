<?php
echo "<HR>";
echo "SID: C113181128<br/>";
echo "Name: 陳柏亨<br/>";
echo "W08-EX01<br/>";
echo "<HR>";
$str1 = "PHP and MySQL Web Programming";
$str2 = "PHP與MySQL網頁設計範例教本";

// 字串變數
echo "測試英文字串1：";
echo $str1 . "<br/>";

echo "測試英文字串2：";
echo $str2 . "<br/>";

// 計算字串長度
echo "English string length: " . strlen($str1) . "<br/>";
echo "Chinese string length: " . strlen($str2) . "<br/>";

echo "Lower Case: " . strtolower($str1) . "<br/>";
echo "Upper Case: " . strtoupper($str1) . "<br/>";

echo "Remove whitespace from both ends: \"" . trim($str2) . "\"<br/>";

echo "Remove whitespace from start: \"" . ltrim($str2) . "\"<br/>";

echo "Remove whitespace from end: \"" . rtrim($str2) . "\"<br/>";

echo "Remove whitespace from end: \"" . chop($str2) . "\"<br/>";