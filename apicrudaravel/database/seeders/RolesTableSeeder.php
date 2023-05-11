<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rol')->insert([
            ['nombre' => 'administrador'],
            ['nombre' => 'comprador']
        ]);
    }
}
