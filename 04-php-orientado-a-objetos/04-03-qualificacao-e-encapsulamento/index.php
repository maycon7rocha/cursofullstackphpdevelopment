<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/classes/App/Template.php";
require __DIR__."/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

vardump([
    $appTemplate,
    $webTemplate,
]);


//  ou pode usar com USE
use App\Template;
use Source\Qualifield\User;
use Web\Template as WebTemplate;

$appUserTemplate = new Template();
$webUserTemplate = new WebTemplate();

vardump([
    $appUserTemplate,
    $webUserTemplate,
]);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);


require __DIR__."/source/Qualifield/User.php";

$user = new User();

// $user->firstName = "Maycon"; // nao pode mais setar pq a propriedade esta como privada
// $user->lastName = "Rocha";

// $user->setFirstName("Maycon"); // set privados nao pode setar
// $user->setLastName("Rocha");

vardump($user);

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$maycon = $user->setUser(
    "Maycon",
    "Rocha",
    "maycon@gmail.com",
);

if(!$maycon){
    echo "<p class='trigger error'>{$user->getError()}</p>";
}


vardump($user);