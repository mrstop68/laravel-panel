<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
            'mapcode' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.229043255291!2d30.780792415574236!3d36.86093607197767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39b40cc96e85f%3A0x516024537e9cefb7!2sResclick%20Channel%20Manager!5e0!3m2!1str!2str!4v1632892485889!5m2!1str!2str',
        ]);
    }
}
