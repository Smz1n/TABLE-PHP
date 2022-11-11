<select name="" id="">
    <?php
    for ($dia = 1; $dia <= 31; $dia++) {
        echo "<option>{$dia} Dia</option>";
    }
    ?>
</select>

<select name="" id="">
    <?php
    $meses = [
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro'
];
    for ($mes = 1; $mes <= 12; $mes++) {
        echo "<option>{$meses[$mes]}</option>";
    }
    ?>
</select>

<select name="" id="">
    <?php
    for ($ano = 2022; $ano >= 1900; $ano--) {
        echo "<option>{$ano}</option>";
    }
    ?>
</select>