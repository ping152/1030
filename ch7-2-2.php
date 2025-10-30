<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ch7-2-2 範例</title>
</head>
<body>
    <h1>SID: C112181110<br>
    NAME: 凌賜桐</h1>

    <?php
    // 建立關聯式陣列
    $arr = array(
        "color" => "紅色",
        "name"  => "凌賜桐",
        "shape" => "Circle"
    );

    // 顯示陣列內容（第一次）
    foreach ($arr as $key => $value) {
        echo "$key => $value<br>";
    }

    echo "<hr>";

    // 修改陣列內容
    $arr["color"] = "紅色";
    $arr["name"]  = "凌賜桐";
    $arr["shape"] = "Circle";

    // 嘗試刪除不存在的元素
    unset($arr["type"]);

    // 使用 print_r() 印出整個陣列內容
    print_r($arr);
    echo "<br>";
    ?>
</body>
</html>

