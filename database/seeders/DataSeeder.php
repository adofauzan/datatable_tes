<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('data')->insert([
            [
                'name' => 'CHOIRUNNISA FADHILAH',
                'email' => 'CHOIRUNNISAFADHILAH@gmail.com',
            ],
            [
                'name' => 'SHAKIRA YOSSKA FREDA',
                'email' => 'SHAKIRAYOSSKAFREDA@gmail.com',
            ],
            [
                'name' => 'DINI AYU SURYAWAN',
                'email' => 'DINIAYUSURYAWAN@gmail.com',
            ],
            [
                'name' => 'NALA ALYA FARADISA',
                'email' => 'NALAALYAFARADISA@gmail.com',
            ],
            [
                'name' => 'KETUT LADY MERALIA',
                'email' => 'KETUTLADYMERALIA@gmail.com',
            ],
            [
                'name' => 'CECILIA ANGELINDA',
                'email' => 'CECILIAANGELINDA@gmail.com',
            ],
            [
                'name' => 'NOVIANTO BASUKI PUTRA',
                'email' => 'NOVIANTOBASUKIPUTRA@gmail.com',
            ],
            [
                'name' => 'IDA AYU RAJARANI CEMPAKA',
                'email' => 'IDAAYURAJARANICEMPAKA@gmail.com',
            ],
            [
                'name' => 'DELFINA TRIXIE',
                'email' => 'DELFINATRIXIE@gmail.com',
            ],
            [
                'name' => 'RISTY RIANDA',
                'email' => 'RISTYRIANDA@gmail.com',
            ],
        ]);
    }
}
