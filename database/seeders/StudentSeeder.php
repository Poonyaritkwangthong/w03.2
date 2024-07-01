<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            [
                'std_id' => 1,
                'fname' => 'สมชาย',
                'lname' => 'นามสกุล',
                'std_prg_id' => 1, // โปรแกรมหลักสูตรแพทยศาสตรบัณฑิต
            ],
            [
                'std_id' => 2,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 2, // โปรแกรมหลักสูตรพยาบาลศาสตรบัณฑิต
            ],
            [
                'std_id' => 3,
                'fname' => 'ทันตแพทย์',
                'lname' => 'นามสกุล',
                'std_prg_id' => 3, // โปรแกรมหลักสูตรทันตแพทยศาสตรบัณฑิต
            ],
            [
                'std_id' => 4,
                'fname' => 'เภสัชกร',
                'lname' => 'นามสกุล',
                'std_prg_id' => 4, // โปรแกรมหลักสูตรเภสัชศาสตรบัณฑิต
            ],
            [
                'std_id' => 5,
                'fname' => 'วิศวกร',
                'lname' => 'นามสกุล',
                'std_prg_id' => 5, // โปรแกรมหลักสูตรวิศวกรรมศาสตรบัณฑิต
            ],
            [
                'std_id' => 6,
                'fname' => 'ทนายความ',
                'lname' => 'นามสกุล',
                'std_prg_id' => 6, // โปรแกรมหลักสูตรนิติศาสตร์บัณฑิต
            ],
            [
                'std_id' => 7,
                'fname' => 'นักบริหาร',
                'lname' => 'นามสกุล',
                'std_prg_id' => 7, // โปรแกรมหลักสูตรบริหารธุรกิจบัณฑิต
            ],
            [
                'sid_id' => 8,
                'fname' => 'เกษตรกร',
                'lname' => 'นามสกุล',
                'std_prg_id' => 8, // โปรแกรมหลักสูตรเกษตรศาสตรบัณฑิต
            ],
            [
                'std_id' => 9,
                'fname' => 'สถาปนิก',
                'lname' => 'นามสกุล',
                'std_prg_id' => 9, // โปรแกรมหลักสูตรสถาปัตยกรรมศาสตรบัณฑิต
            ],
            [
                'std_id' => 10,
                'fname' => 'ศิลปิน',
                'lname' => 'นามสกุล',
                'std_prg_id' => 10, // โปรแกรมหลักสูตรศิลปกรรมศาสตรบัณฑิต
            ],
        ]);
    }
}
