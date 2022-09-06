<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR", "d/m/Y h:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1986-03-19");
$dateStatic = DateTime::createFromFormat("d/m/Y", "10/03/2020");

vardump([
    $dateNow,
    $dateBirth,
    $dateStatic
]);

vardump([
    $dateNow->format(DATE_BR),
]);
/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M"); //periodo 10anos,2meses,tempo 10meses

vardump($dateInterval);

$dateTime = new DateTime("now");
// $dateTime->add($dateInterval); //adicionar soma data
$dateTime->sub($dateInterval); //subtrai data


vardump($dateTime);

$birth = new DateTime(date("Y")."-03-19");
$birth = new DateTime("2023-03-19");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);

vardump([$birth, $diff]);

if($diff->invert) 
echo "<p>Seu aniversário foi a {$diff->days} dias.</p>";
else
echo "<p>Faltam {$diff->days} dias para seu aniversário!</p>";


$dateResources = new DateTime("now");
vardump([
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
    $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_BR),
]);

/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$end = new DateTime("2023-09-06");
$interval = new DateInterval("P1M"); // periodo de 1 mes

$period = new DatePeriod($start, $interval, $end);

vardump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR),
    $period,
]);

echo "<h1>Sua Assinatura:</h1>";
foreach ($period as $recurrences) {
    echo "<p>Próximo vencimento {$recurrences->format(DATE_BR)}</p>";
}
