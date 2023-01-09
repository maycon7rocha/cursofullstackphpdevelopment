<?php

namespace Source\Related;

class User
{
    private $job;
    private $firstName;
    private $lastName;

    public function __construct($job, $firstName, $lastName)
    {
        $this->job = $job;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * Get the value of job
     */ 
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }
}
