<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([  
            'name'=>'Ipad',
            "price"=>"120000",
            "description"=>"A ipaf with 4gb ram/32 storage/8mp Front camera/64 Back camera",
            "category"=>"ipad",
            "gallery"=>"https://in-exstatic-vivofs.vivo.com/gdHFRinHEMrj3yPG/1650440283152/f3a503ac50d6ab45b27bf96f926b18c8.png",
            
        ]);
    }
}
