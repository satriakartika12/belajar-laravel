<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use App\Models\kelas;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class kelasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        schema::disableForeignKeyConstraints();
        kelas::truncate();
        schema::enableForeignKeyConstraints();
        $data = [
            ['nama' => '1A'],
            ['nama' => '1B'],
            ['nama' => '2A'],
            ['nama' => '2B'],
        ];
        foreach ($data as $value) {
            kelas::insert([
                'nama' => $value['nama'],
                'created_at' => carbon::now(),
                'updated_at' => carbon::now(),

            ]);
        };

    }
}
