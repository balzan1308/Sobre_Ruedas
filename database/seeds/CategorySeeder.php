<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category= new Category();
        $category->name='Honda';
        $category->slug='Honda';
        $category->description='Motocycle';
        $category->save();

        $category= new Category();
        $category->name='Yamaha';
        $category->slug='Yamaha';
        $category->description='Motocycle';
        $category->save();

        $category= new Category();
        $category->name='Auteco';
        $category->slug='Auteco';
        $category->description='Motocycle';
        $category->save();

        $category= new Category();
        $category->name='Kawasaki';
        $category->slug='Kawasaki';
        $category->description='Motocycle';
        $category->save();

    }
}
