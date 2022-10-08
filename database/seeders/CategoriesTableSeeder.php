<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories =  array(
        array('name' => 'Pentateuco'),
        array('name' => 'Libros Históricos'),
        array('name' => 'Libros sapienciales'),
        array('name' => 'Profetas mayores'),        
        array('name' => 'Profetas menores'),
        array('name' => 'Evangelio'),
        array('name' => 'Hechos de los Apóstoles'),
        array('name' => 'Epístolas'),
        array('name' => 'Apocalipsis'),
    );
        Category::insert($categories);
    }
}