<?php

namespace Database\Seeders;

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
       $this->call([
        Faculty::class,
        Program::class,
        Student::class,
        VaccineRecord::class,
        Vaccine::class,
       ]);
    }
}
