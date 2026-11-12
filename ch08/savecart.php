<?php
session_start(); // 啟用交談期

if (isset($_SESSION["ID"])) {
    $id = $_SESSION["ID"]; // 取得Session變數
    $name = $_SESSION["Name"];
    $price = $_SESSION["Price"];
    $quantity = $_SESSION["Quantity"];

    // 儲存商品資料至 Cookie 陣列（保存 3600 秒 = 1 小時）
    setcookie($id . "[ID]", $id, time() + 3600);
    setcookie($id . "[Name]", $name, time() + 3600);
    setcookie($id . "[Price]", $price, time() + 3600);
    setcookie($id . "[Quantity]", $quantity, time() + 3600);
}

header("Location: shoppingcart.php"); // 轉址
