<?php

namespace Source\Related;

class Company
{
    private $company;
    private $address; // um objeto de endereço por associação
    private $team;
    private $products;


    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    // POR ASSOCIAÇÃO
    public function boot($company, Address $address)
    {
        $this->company = $company;
        $this->address = $address;
    }
    

    // POR AGREGAÇÃO
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }


    // PRO COMPOSIÇÃO
    public function addTeamMember($job, $firstName, $lastName)
    {
        $this->team[] = new User($job, $firstName, $lastName);
    }

    /**
     * Get the value of company
     */ 
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress() : Address // informando que esta funcao tem retorno da classe endereço
    {
        return $this->address;
    }

    /**
     * Get the value of team
     */ 
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }
}