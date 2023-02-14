<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClientCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_categories')->delete();
        DB::table('client_categories')->insert([
            [
                'client_category'   => 'Passager',
                'is_default'    =>  1
            ],
            [
                'client_category'   => 'Facebook',
                'is_default'    =>  0
            ],
            [
                'client_category'   => 'Instagram',
                'is_default'    =>  0
            ],
            [
                'client_category'   => 'Google',
                'is_default'    =>  0
            ],            [
                'client_category'   => 'TikTok',
                'is_default'    =>  0
            ],
            [
                'client_category'   => 'Site Web',
                'is_default'    =>  0
            ],
            [
                'client_category'   => 'Publicité',
                'is_default'    =>  0
            ],
            [
                'client_category'   => 'Autres',
                'is_default'    =>  0
            ]
        ]);
        activity()->log('Log from seeder');
    }
}
