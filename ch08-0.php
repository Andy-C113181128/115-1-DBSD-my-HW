
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>船舶靠泊時間判斷</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 80px;
            background-color: #eaf6ff;
        }

        .container {
            background-color: white;
            width: 350px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
        }

        input, button {
            padding: 10px;
            margin: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #result {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>船舶靠泊時間判斷</h2>

        <label for="hours">請輸入靠泊時間（小時）：</label>
        <br>

        <input type="text" id="hours" placeholder="例如：20">

        <br>

        <button onclick="checkTime()">開始判斷</button>

        <p id="result"></p>
    </div>

    <script>
        function checkTime() {
            const input = document.getElementById("hours").value.trim();
            const result = document.getElementById("result");

            if (input === "" || !Number.isFinite(Number(input))
                || Number(input) < 0) {
                result.textContent = "請輸入有效的數字";
            } else if (Number(input) >= 20) {
                result.textContent = "長時間靠泊";
            } else {
                result.textContent = "一般靠泊";
            }
        }
    </script>
</body>
</html>
