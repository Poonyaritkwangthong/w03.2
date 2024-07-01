<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program')->insert([
            [
                'program_th' => 'หลักสูตรแพทยศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Medicine (B.Med.)',
                'grad_year' => 2024,
                'prg_fac_id' => 1, // คณะแพทยศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรพยาบาลศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Nursing (B.N.)',
                'grad_year' => 2024,
                'prg_fac_id' => 2, // คณะพยาบาลศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรทันตแพทยศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Dental Surgery (B.D.S.)',
                'grad_year' => 2024,
                'prg_fac_id' => 3, // คณะทันตแพทยศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรเภสัชศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Pharmacy (B.Pharm.)',
                'grad_year' => 2024,
                'prg_fac_id' => 4, // คณะเภสัชศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรวิศวกรรมศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Engineering (B.Eng.)',
                'grad_year' => 2024,
                'prg_fac_id' => 5, // คณะวิศวกรรมศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรนิติศาสตร์บัณฑิต',
                'program_en' => 'Bachelor of Laws (LL.B.)',
                'grad_year' => 2024,
                'prg_fac_id' => 6, // คณะนิติศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรบริหารธุรกิจบัณฑิต',
                'program_en' => 'Bachelor of Business Administration (B.B.A.)',
                'grad_year' => 2024,
                'prg_fac_id' => 7, // คณะพาณิชยศาสตร์และการบัญชี
            ],
            [
                'program_th' => 'หลักสูตรเกษตรศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Science in Agriculture (B.Sc.Ag.)',
                'grad_year' => 2024,
                'prg_fac_id' => 8, // คณะเกษตรศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรสถาปัตยกรรมศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Architecture (B.Arch.)',
                'grad_year' => 2024,
                'prg_fac_id' => 9, // คณะสถาปัตยกรรมศาสตร์
            ],
            [
                'program_th' => 'หลักสูตรศิลปกรรมศาสตรบัณฑิต',
                'program_en' => 'Bachelor of Fine Arts (B.F.A.)',
                'grad_year' => 2024,
                'prg_fac_id' => 10, // คณะศิลปกรรมศาสตร์
            ],
        ]);
    }
}
