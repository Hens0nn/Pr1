<link rel="stylesheet" href="assets/style/style.css">
<div class="section">

    <?php
    $arr = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];

    asort($arr);

    foreach ($arr as $arr => $surname) {
        echo "<span><h3>$arr</h3> - $surname</span>";
    ?>
        <br>
    <?
    }
    ?>
</div>