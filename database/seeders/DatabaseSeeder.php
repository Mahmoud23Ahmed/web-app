<?php

namespace Database\seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\subject;
use App\Models\Departement;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() 
    {
        Departement::create([
            'name' => 'Computer science',
            'code' => 'CS'
        ]);

        Departement::create([
            'name' => 'Infprmation System',
            'code' => 'IS'
        ]);

        Departement::create([
            'name' => 'Information Technology',
            'code' => 'IT'
        ]);

    }
}
