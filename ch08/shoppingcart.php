<?php
function each(&$array)
{
    $res = array();
    $key = key($array);
    if ($key !== null) {
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    } else {
        $res = false;
    }
    return $res;
}

?>

<table border="0">
    <tr bgcolor="#CC99FF">
        <td>功能</td>
        <td>編號</td>
        <td>名稱</td>
        <td>價格</td>
        <td>數量</td>
    </tr>

<?php
$flag = false;
$total = 0;
while (list($arr, $item) = each($_COOKIE)) {
    if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) {
        if ($flag) {
            $color = "#CC99FF";
            $flag = false;
        } else {
            $color = "#FFFFCC";
            $flag = true;
        }

        echo "<tr bgcolor='" . $color . "'>";
        echo "<td><a href='delete.php?Id=" . $arr . "'>";
        echo "刪除</a></td>";

        $price = 0;
        $quantity = 0;

        foreach ($item as $name => $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
            if ($name == "Price") {
                $price = (int)$value;
            }
            if ($name == "Quantity") {
                $quantity = (int)$value;
            }
        }

        echo "</tr>"; // 補上列結束標籤
        $total += $price * $quantity; // 累加小計至總金額
    }
}

if ($total != 0) { // 顯示總金額
    echo "<tr bgcolor='yellow'><td colspan='5' align='right'>";
    echo "總金額 = NT$" . $total . "元</td></tr>";
}
?>
</table>

<hr><br>
| <a href="catalog.php">Catalog</a> |
<a href="shoppingcart.php">Mini Cart</a>