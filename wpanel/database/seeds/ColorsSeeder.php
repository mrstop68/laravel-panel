<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsSeeder extends Seeder
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
                'title' => 'headerbg',
                'color' => '#000'
            ],
            [
                'title' => 'headertext',
                'color' => '#fff'
            ],
            [
                'title' => 'footerbg',
                'color' => '#000'
            ],
            [
                'title' => 'footertext',
                'color' => '#fff'
            ]

        ]);
    }
}
