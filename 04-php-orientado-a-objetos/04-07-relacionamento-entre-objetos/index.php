<?php

use Source\Related\Address;
use Source\Related\Company;
use Source\Related\Product;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new Company();
$company->bootCompany(
    "Upside",
    "Nome da rua"
);

vardump($company);

$address = new Address(
    "vereador said tanus jose",
    3399,
    "sala 24"
);

$company->boot(
    "upSide",
    $address
);

vardump($company);

echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}</p>";
echo $company->getAddress()->getStreet();

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$fsphp = new Product("Full Stack PHP", 1997);
$laradev = new Product("Laravel Developer", 997);

vardump([$fsphp, $laradev]);

$company->addProduct($fsphp);
$company->addProduct($laradev);

vardump($company);


foreach ($company->getProducts() as $product) {
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("TIC", "Maycon", "Rocha");
$company->addTeamMember("TIC", "Hudson", "Pinto");
$company->addTeamMember("Biblioteca", "Ewerlane", "Tavares");

vardump($company);
/* 
* @var User $member
 */
foreach ($company->getTeam() as $member) {
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}









