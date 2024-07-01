<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty')->insert([
            [
                'faculty_th' => 'คณะมนุษยศาสตร์',
                'faculty_en' => 'Faculty of Humanities'
            ],
            [
                'faculty_th' => 'คณะศิลปศาสตร์',
                'faculty_en' => 'Faculty of Liberal Arts'
            ],
            [
                'faculty_th' => 'คณะศึกษาศาสตร์',
                'faculty_en' => 'Faculty of Education'
            ],
            [
                'faculty_th' => 'คณะวิทยาศาสตร์',
                'faculty_en' => 'Faculty of Science'
            ],
            [
                'faculty_th' => 'คณะวิศวกรรมศาสตร์',
                'faculty_en' => 'Faculty of Engineering'
            ],
            [
                'faculty_th' => 'คณะนิติศาสตร์',
                'faculty_en' => 'Faculty of Law'
            ],
            [
                'faculty_th' => 'คณะพาณิชยศาสตร์และการบัญชี',
                'faculty_en' => 'Faculty of Commerce and Accountancy'
            ],
            [
                'faculty_th' => 'คณะเกษตรศาสตร์',
                'faculty_en' => 'Faculty of Agriculture'
            ],
            [
                'faculty_th' => 'คณะสถาปัตยกรรมศาสตร์',
                'faculty_en' => 'Faculty of Architecture'
            ],
            [
                'faculty_th' => 'คณะเภสัชศาสตร์',
                'faculty_en' => 'Faculty of Pharmacy'
            ]

            ]);
        
    }
}
