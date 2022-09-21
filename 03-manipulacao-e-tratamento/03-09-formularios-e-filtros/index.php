<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new stdClass();
$form->name = "Um Nome";
$form->mail = "um@email.com";

vardump($_REQUEST);

$form->method = "get";
$form->method = "post";
include __DIR__ . "/form.php";


/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

vardump($_POST);

$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT); //interessante


vardump([
    $post,
    $postArray
]);

//IMPORTANTE
if($postArray){
    if(in_array("", $postArray)){
        echo "<p class='trigger warning'>Preencha todos os campos!</p>";
    }elseif(!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)){
        echo "<p class='trigger warning'>E-mail não é válido!</p>";
    }else{
        $saveStrip = array_map("strip_tags", $postArray); // pode passar uma funcao no callback
        $save = array_map("trim", $saveStrip);
        vardump($save);
        
        echo "<p class='trigger accept'>Cadastro com sucesso!</p>";
    }
}

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

$form->method = "get";
include __DIR__ . "/form.php";

vardump($_GET);
$get = filter_input(INPUT_GET, "mail", FILTER_DEFAULT);
$getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);

vardump([$get, $getArray]);
/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

vardump([
    filter_list(), //lista todos os filtros existentes
]);


$filterForm = [
    "name" => FILTER_SANITIZE_STRIPPED,
    "mail" => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterForm);
vardump($getForm);