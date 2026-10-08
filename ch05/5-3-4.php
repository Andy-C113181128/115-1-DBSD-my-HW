#Name: 陳柏亨 <BR>
#SID:C113181128<BR>
#EX04
<HR>

<?php
$total = 0;

for ($i = 0; $i <= 15; $i++) {
if ($i % 2 == 1)
continue;

echo "|" . $i;
$total += $i;
}

echo "<HR>";
echo "總和：" . $total;
?>