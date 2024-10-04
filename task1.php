<link rel="stylesheet" href="assets/style/style.css">
<div class="section">

    <?php
    ?>
    <h3>
        Изначальный массив
    </h3>
    <?
    $students = ["Иванов", "Петров", "Сидоров", "Смирнов", "Кузнецов", "Попов"];
    // print_r($students);
    foreach ($students as $student) {
        echo $student . ", ";
    }

    ?>
    <br>
    <br>
    <?php

    $count = count($students);
    echo "<span><h3>Количество студентов:</h3> $count</span>";

    ?>
    <br>
    <?php

    if (in_array("Сидоров", $students)) {
        echo "Фамилия 'Сидоров' есть в списке.";
    } else {
        echo "Фамилия 'Сидоров' отсутствует в списке.";
    }
    ?>
    <br>
    <br>
    <?php

    $expelled = array_pop($students);
    echo "<span><h3>Удаленная фамилия:</h3> $expelled</span>";
    ?>
    <br>
    <?php
    ?>
    <h3>
        Конечный массив
    </h3>
    <?
    // print_r($students);
    foreach ($students as $student) {
        echo $student . ", ";
    }
    ?>
</div>