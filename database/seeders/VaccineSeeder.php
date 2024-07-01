<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccine')->insert([
            ['vaccine' => 'ไฟเซอร์-ไบออนเทค'],
            ['vaccine' => 'โมเดิร์นา'],
            ['vaccine' => 'ซิโนแวค'],
            ['vaccine' => 'แอสตราเซเนกา'],
            ['vaccine' => 'สปุตนิก V'],
            ['vaccine' => 'ซิโนฟาร์ม'],
            ['vaccine' => 'จอห์นสันแอนด์จอห์นสัน'],
            ['vaccine' => 'โคแว็กซิน'],
            ['vaccine' => 'Bharat Biotech'],
            ['vaccine' => 'Novavax'],
        ]);
    }
}
