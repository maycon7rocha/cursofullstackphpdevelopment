<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "Maycon",
    "company" => "IFFluminense",
    "mail" => "maycon7rocha@gmail.com"
];
$objProfile = (object) $arrProfile; // tranforma array em objeto

var_dump($arrProfile, $objProfile);

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime"),
]);