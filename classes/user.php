<!-- CLASSE GENERICA (PADRE):
DETTAGLI UTENTE -->

<?php


class User {

    // variables
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected int $phoneNumber;
    private bool $registered = false;
    // / variables

    // construct
    function __construct(string $_firstName, string $_lastName, string $_email, int $_phoneNumber, bool $_registered)
    
    {
        $this -> name = $_firstName;
        $this -> surname = $_lastName;
        $this -> email = $_email;
        $this -> phoneNumber = $_phoneNumber;
        $this -> registered = $_registered;
       
    }
    // / construct

    // methods
    public function getUserDetails()
    {
        return $this-> name . " " . $this-> surname . " " . $this-> email . " " . $this->phoneNumber . " " . $this->registered;
    }

    function getDiscount()
    {
        if ($this->registered) 
        {
            return 20;
        }

        else {
            return 0;
        }

    }
    // / methods 

    // instances are in data.php
}


?>

