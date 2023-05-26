<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Setting tablosuna verileri yazma
        DB::table('settings')->insert(
            [
                [
                    'description' => 'Başlık',
                    'key' => 'Title',
                    'value' => 'Web panel',
                    'type' => 'text',
                    'must' => 0,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => 'Açıklama',
                    'key' => 'Description',
                    'value' => 'hazır web site paneli',
                    'type' => 'text',
                    'must' => 1,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => 'Logo ',
                    'key' => 'Logo',
                    'value' => 'logo.png',
                    'type' => 'file',
                    'must' => 2,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => 'icon',
                    'key' => 'icon',
                    'value' => 'icon.ico',
                    'type' => 'file',
                    'must' => 3,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => '',
                    'key' => 'Adres',
                    'value' => 'Açık Adres',
                    'type' => 'text',
                    'must' => 4,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => '',
                    'key' => 'Phone1',
                    'value' => 'phone1',
                    'type' => 'text',
                    'must' => 5,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => '',
                    'key' => 'Phone2',
                    'value' => 'phone2',
                    'type' => 'text',
                    'must' => 6,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => '',
                    'key' => 'Mail',
                    'value' => 'mail',
                    'type' => 'text',
                    'must' => 7,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => '',
                    'key' => 'PhoneText',
                    'value' => 'Ptext',
                    'type' => 'text',
                    'must' => 8,
                    'delete' => '0',
                    'status' => '1'
                ],
                [
                    'description' => '',
                    'key' => 'Copyright',
                    'value' => 'copyright',
                    'type' => 'text',
                    'must' => 9,
                    'delete' => '0',
                    'status' => '1'
                ]
            ]
        );
    }
}
