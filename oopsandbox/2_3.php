<?php

// Define a class
class User
{
    // Properties (attributes or variables)
    public $name;

    // Methods (functions)

    // below is an access modifier it can be public, private or protected
    public function sayHello()
    {
        return $this->name . ' says Hello';
    }
}


// Instantiate a user object from the user class
$user1 = new User();

$user1->name = 'Warren';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<br>';
// Create new user
$user2 = new User();
$user2->name = 'Evan';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();


