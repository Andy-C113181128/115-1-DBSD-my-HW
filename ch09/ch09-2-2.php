<?php
require "about_me.php";

echo "W11 Ex02<br/>";
echo "<hr>";

$file = "mybooks.txt";
// 檔案名稱

$content = "PHP與MySQL網頁設計範例教本";
// 要寫入的內容

$fp = fopen($file, "w")
or exit("檔案 $file 開啟錯誤<br/>");
// 開啟檔案

if (fwrite($fp, $content)) {
echo "寫入檔案 $file 成功<br/>";
} else {
echo "寫入檔案 $file 錯誤<br/>";
}
// 寫入檔案

fclose($fp);
// 關閉檔案
?>