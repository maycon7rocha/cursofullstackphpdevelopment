<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);


$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge",
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

array_unshift($index, "", "Pearl Jam"); // adiciona valores no inicio
$assoc += ["band_4" => "Pearl Jam", "band_5" => ""];

$index = array_filter($index); // remove valores em branco

asort($index); //ordena pelo valor a-z

ksort($index); //ordena pelo index

var_dump(
    $index,
    $assoc
);


/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index); //inverte a ordem 

var_dump(
    $index,
    $assoc
);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump([
    array_keys($assoc),
    array_values($assoc),
]);

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

// populando um template html
$profile = [
    "name" => "Maycon",
    "company" => "IFFluminense",
    "mail" => "maycon7rocha@gmail.com"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}} name</p>
        <p>
            <a href="mailto:{{mail}}" title="Enviar name e-mail para {{name}}">Enviar E-mail</a>
        </p>
    </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{". implode("}}&{{", array_keys($profile))."}}";

var_dump($replaces);

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);