<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=20000; $i++){
            $customers = new Customer;
    
            $customers->name = $faker->name;
            $customers->email = $faker->email;
            $customers->address = $faker->address;
            $customers->dob = $faker->date;
            $customers->mobile = $faker->phoneNumber;
    
            $customers->save();
        }
    }
}
