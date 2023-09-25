<?php

$salary = (float)$_POST['salary'];
$bonus = !empty($_POST['bonus']) ? (float)$_POST['bonus'] : 0;
$months = (int)$_POST['months'];
$grati = $salary + $bonus;
$sixth_grati = $grati > 0 ? ($grati / 6) : 0;
$worked_months = $months / 12;

$rc = $grati + $sixth_grati;

$cts = $rc * $worked_months;

echo json_encode(['grati' => number_format($grati, 2, '.', ','), 'bonus' => $bonus, 'sixthg' => number_format($sixth_grati, 2, '.', ','), 'cts' => number_format($cts, 2, '.', ',')]);