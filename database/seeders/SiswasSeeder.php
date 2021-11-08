<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')
            ->insert([
                [
                    "nis" => "202021",
                    "nama" => "aries",
                    "jk" => "L",
                    "alamat" => "jalan Depan",
                    "tmp_lahir" => "bandung",
                    "tgl_lahir" => date_create(strtotime("2000-12-17")),
                    "telepon" => "0822456789",
                    "id_jurusan" => 1,
                ]
            ]);
    }
}
