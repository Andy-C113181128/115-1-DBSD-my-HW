<?php
echo "<HR>";
echo "SID: C113181128<br/>";
echo "Name: 陳柏亨<br/>";
echo "EX02<br/>";
echo "<HR>";
$scores = array(22, 16, 30, 24);
$total = 0;

foreach ($scores as $element) {
echo "element: $element <br/>";
$total += $element;
}

echo "Total: " . $total;
?>