<?php

use Illuminate\Database\Seeder;

class VariedadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('variedads')->insert(['name' => 'Sativa']);
      DB::table('variedads')->insert(['name' => 'indica']);
      DB::table('variedads')->insert(['name' => 'Rudelaris']);
    }
}
