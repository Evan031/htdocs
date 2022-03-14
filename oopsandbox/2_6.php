<?php

class User
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

// extends User class and allows you to use attributes
class Customer extends User
{
    private $balance;

    public function __construct($name, $age, $balance)
    {
        // grabs the parent constructor properties
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function pay($amount)
    {
        return $this->name . ' paid $' . $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}


$customer1 = new Customer('John', 33, 500);


// echo $customer1->pay(100);
echo $customer1->getBalance();
