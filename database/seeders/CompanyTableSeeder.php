<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => '1',
            'company_name' => 'PEPSI'
        ]);

        DB::table('companies')->insert([
            'id' => '2',
            'company_name' => 'サントリー'
        ]);
        
        DB::table('companies')->insert([
            'id' => '3',
            'company_name' => 'コカ・コーラ'
        ]);
        
        DB::table('companies')->insert([
            'id' => '4',
            'company_name' => 'アサヒ'
        ]);

        DB::table('companies')->insert([
            'id' => '5',
            'company_name' => '伊藤園'
        ]);

        DB::table('companies')->insert([
            'id' => '6',
            'company_name' => 'その他'
        ]);

    }
}
