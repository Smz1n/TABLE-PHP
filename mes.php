<?php

$mes = 10;

echo match($mes) {
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    default => 'Mes invalido',
};