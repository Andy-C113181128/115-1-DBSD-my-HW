
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
?>



