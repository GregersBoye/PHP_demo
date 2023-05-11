<?php
namespace App\Models;

class User
{
    public string $name;
    public int $age;

    public Address $address;
    public function __construct(string $name, int $age, array $address)
 {
     $this->name = $name;
     $this->age = $age;

     $this->address = new Address(
         $address['address'],
         $address['city'],
         $address['zipCode']
     );
 }

    public function ageInAYear()
    {
        return $this->age +1;
 }
}
