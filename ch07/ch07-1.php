
<?php
echo "<HR>";
echo "SID: C113181128<br/>";
echo "Name: 陳柏亨<br/>";
echo "<HR>";
// 顯示網頁標題
print "PHP與MySQL網頁設計<br/>";

// 定義匯率換算函數
function rateExchange($amount, $rate)
{
    return $amount * $rate;
}

// 宣告變數
$amount = 1000;
$rate = 28.1;

// 呼叫函數
$result = rateExchange($amount, $rate);

// 顯示換算結果
print "1000美金兌換新台幣=" . $result . "元<br/>";
?>
