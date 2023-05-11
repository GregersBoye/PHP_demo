<?php
namespace App;
use App\Models\User;
require __DIR__ . '/../vendor/autoload.php';

$user = new User('Gregers', 40, ['address' => 'Toldbod plads 1', 'city' => 'Aalborg', 'zipCode' => 9000]);
echo sprintf('Hej %s, <br> Nu er du: %s, næste år er du %s<br>', $user->name, $user->age, $user->ageInAYear());
echo "<pre>".json_encode($user)."</pre>";

