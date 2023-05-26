<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('pages')->insert([
            [
                'title' => 'Başlık 1',
                'slug' => 'baslik-1',
                'content' => 'lorem Ipsum 1',
                'status' => '1'
            ],
            [
                'title' => 'Başlık 2',
                'slug' => 'baslik-2',
                'content' => 'lorem Ipsum 2',
                'status' => '1'
            ],
            [
                'title' => 'Başlık 3',
                'slug' => 'baslik-3',
                'content' => 'lorem Ipsum 3',
                'status' => '1'
            ],
            [
                'title' => 'Başlık 4',
                'slug' => 'baslik-4',
                'content' => 'lorem Ipsum 4',
                'status' => '1'
            ]
        ]);
    }
}
