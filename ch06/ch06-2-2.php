<?php
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