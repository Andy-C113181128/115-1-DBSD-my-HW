
<?php
require "about_me.php";

echo "W11 Ex01<br/>";
echo "<hr>";



$file = basename($_SERVER["PHP_SELF"], ".php");
$path = realpath($file . ".php"); // 取得檔案實際路徑

echo "real path: $path <br/>";

$part = pathinfo($path); // 取得路徑資訊

echo "path: " . $part["dirname"] . "<br/>";
echo "filename: " . $part["basename"] . "<br/>";
echo "extension: " . $part["extension"] . "<hr/>";


if (file_exists($file . ".php"))
      print "檔案: $file.php 存在<br/>";
   else
      print "檔案: $file.php 不存在<br/>";
   // 複製檔案
   if (!copy($file . ".php", $file . ".bak"))
      print ("檔案: $file.php複製成bak失敗<br/>");
   else
      print "檔案: $file.php 複製成bak成功<br/>";
   rename($file . ".bak", "test.txt");  // 檔案更名
   print "檔案: $file.bak 更名成test.txt<br/>";
   $file = "test.txt";
   unlink($file);   // 刪除檔案
   print "檔案: $file 已經刪除<br/>";
   ?>

