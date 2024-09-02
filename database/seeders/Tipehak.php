<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipehak extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipehak = [
            [
                'id'=>1,
                'nama'=>'Hak Milik',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id'=>3,
                'nama'=>'Hak Guna Bangunan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id'=>4,
                'nama'=>'Hak Pakai',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        foreach($tipehak as $a)
            DB::table('tipehak')->insert($a);
    }
}
