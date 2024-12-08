<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceSeeder extends Seeder{
    public function run():void{
        DB::table('services')->insert([
            'name'=>'Lawn Mowing',
            'description'=>'Enjoy our lawn mowing.',
            'price'=>250
        ]);
        DB::table('services')->insert([
            'name'=>'Landscaping',
            'description'=>'Enjoy our landscaping.',
            'price'=>225
        ]);
        DB::table('services')->insert([
            'name'=>'BBQ & Sheds',
            'description'=>'Enjoy our BBQ & sheds.',
            'price'=>300
        ]);
        DB::table('services')->insert([
            'name'=>'Spa & pools',
            'description'=>'Enjoy our spa & pools.',
            'price'=>100
        ]);
        DB::table('services')->insert([
            'name'=>'Planting',
            'description'=>'Enjoy our planting.',
            'price'=>59.99
        ]);
    }
}
