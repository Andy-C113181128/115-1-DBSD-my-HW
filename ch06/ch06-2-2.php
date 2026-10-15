<?php
function printHeader() {
echo "<h3>SID: C113181128</h3>";
echo "<h3>NAME: 陳柏亨</h3>";
echo "<h3>EX02</h3>";
}

printHeader();
// 定義匯率換算函數
function rateExchange($amount, $rate)
{
$result = $amount * $rate;
return $result;
}

// 呼叫函數
$rate = rateExchange(1000, 32.5);

// 顯示結果
echo "Money: " . $rate;
?>