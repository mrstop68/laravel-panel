<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorparateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('corparates')->insert([
            'title' => '',
            'content' => ''
        ]);
    }
}
