<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Obicno Pranje',
                'description'=>'Obicno pranje robe raznih materijala'
            ],[
                'id'=>2,
                'name'=>'Hemijsko Pranje',
                'description'=>'Hemijsko pranje odjevnih predmeta delikatnog materijala'
            ],[
                'id'=>3,
                'name'=>'Peglanje',
                'description'=>'Peglanje robe'
            ]
        ]);

        DB::table('products')->insert([
            'name'=>'Product 1',
            'description'=>'Peglanje odijela i haljina',
            'price'=>19.99,
            'category_id'=>3
        ]);

        $p1=new Product();
        $p1->name = 'Product 2';
        $p1->description='Rucno peglanje carsava';
        $p1->price=1.0;
        $p1->category_id=3;
        $p1->save();

        $p1=new Product();
        $p1->name = 'Product 3';
        $p1->description='Rucno peglanje posteljina';
        $p1->price=2.0;
        $p1->category_id=3;
        $p1->save();

        $p1=new Product();
        $p1->name = 'Product 4';
        $p1->description='Pranje vesa';
        $p1->price=0.50;
        $p1->category_id=1;
        $p1->save();

        $p1=new Product();
        $p1->name = 'Product 5';
        $p1->description='Pranje robe na 1kg';
        $p1->price=3.0;
        $p1->category_id=1;
        $p1->save();

        $p1=new Product();
        $p1->name = 'Product 6';
        $p1->description='Ciscenje odijela';
        $p1->price=3.50;
        $p1->category_id=2;
        $p1->save();

        $p1=new Product();
        $p1->name = 'Product 7';
        $p1->description='Ciscenje vjencanica';
        $p1->price=4.50;
        $p1->category_id=2;
        $p1->save();
    }
}
