<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClientSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_sources')->delete();
        DB::table('client_sources')->insert([
            [
                'client_source'         => 'مباشر',
                'is_default'            =>  1          
            ],
            [
                'client_source'   => 'صديق',
                'is_default'    =>  0               
            ],
            [
                'client_source'         => 'الاوراق',
                'is_default'            =>  0       
            ],
            [
                'client_source'         => 'الادارة',
                'is_default'            =>  0       
            ]
        ]);
    }
}
