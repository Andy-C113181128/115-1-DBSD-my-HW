<?php
echo "<HR>";
echo "SID: C113181128<br/>";
echo "Name: 陳柏亨<br/>";
echo "EX10<br/>";
echo "<HR>";
// ... 剩餘程式碼
session_start(); // 啟動 Session
// 判斷 Session 變數是否存在
if (!isset($_SESSION["page_counter"])) {
    $_SESSION["page_counter"] = 1;
} else {
    $_SESSION["page_counter"]++;
}

// 取得目前瀏覽次數
$value = $_SESSION["page_counter"];
echo "使用者Session ID: " . session_id() . "<br/>";
echo "進入網頁次數: $value<br/>";

// 當瀏覽次數大於或等於 5
if ($value >= 5) {
   unset($_SESSION["page_counter"]);
   if (!isset($_SESSION["page_counter"])) {
      echo "Session變數page_counter不存在!<br/>";
      session_destroy();
      echo "關閉交談期<br/>";
    }
}
