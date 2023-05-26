<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('colors')->insert([
            [
                'headerbg' => '#000000',
                'headertext' => '#ffffff',
                'footerbg' => '#000000',
                'footertext' => '#ffffff'
            ]
        ]);
    }
}
