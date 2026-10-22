<?php
echo "<HR>";
echo "SID: C113181128<br/>";
echo "Name: 陳柏亨<br/>";
echo "EX03<br/>";
echo "<HR>";

$arr = array(
"Color" => "Black",
"name" => "Chen-Hui-An",
"Shape" => "Triangle",
100
);

$arr["type"] = "PHP";
unset($arr["type"]);

foreach ($arr as $key => $value) {
echo "$key => $value";

}
echo "<br/>";
print_r($arr);
?>














