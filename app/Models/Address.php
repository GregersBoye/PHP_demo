<?php

namespace app\Models;

class Address
{
    public string $address;
    public string $city;
    public int $zipCode;

    public function __construct(string $address, string $city, int $zipCode)
{
    $this->address = $address;
    $this->zipCode = $zipCode;
    $this->city = $city;
}

}
