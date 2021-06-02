<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Adil',
            'gender' => 'L',
            'alamat' => 'Depok',
            'no_telp' => '0897688',
            'id_kelas' => '1',
        ]);
    }
}
