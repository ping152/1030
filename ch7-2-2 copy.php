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
    $weekday = array(1 => "Mon", "Tue", "Wed", "Thu", 
                            "Fri", "Sat", "Sun");

    // 顯示陣列元素
    for ($i = 1; $i <= count($weekday); $i++) {
        echo $i . ": " . $weekday[$i]  ;
    }
    ?>
</body>
</html>
