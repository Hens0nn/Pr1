<link rel="stylesheet" href="assets/style/style.css">
<div class="section">

    <?php
    // Создаем многомерный массив student
    $student = [
        "имя" => "Даниил",
        "фамилия" => "Анисимов",
        "группа" => "427-WEB",
        "хобби" => ["Программирование", "ПК-игры", "Фильмы и сериалы"],
        "соцсети" => [
            "ВК" => "Slacyx",
            "telegram" => "SlacyX"
        ]
    ];

    // Выводим массив на экран
    echo "<span><h3>Имя:</h3>" . $student["имя"] . "</span>";
    ?>
    <br>
    <?
    echo "<span><h3>Фамилия:</h3>: " . $student["фамилия"] . "</span>";
    ?>
    <br>
    <?
    echo "<span><h3>Группа:</h3>: " . $student["группа"] . "</span>";
    ?>
    <br>
    <?
    echo "<span><h3>Хобби:</h3>: " . implode(", ", $student["хобби"]) . "</span>";
    ?>
    <br>
    <?
    echo "<span><h3>Соцсети:</h3>";
    foreach ($student["соцсети"] as $platform => $username) {
        echo "<span><h3>$platform:</h3> $username</span>";
    ?>
        <br>
    <?
    }
    ?>
    </span>
</div>
