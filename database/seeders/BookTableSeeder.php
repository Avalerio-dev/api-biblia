<?php

namespace Database\Seeders;
use App\Models\Book;

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $book =  array(
        array('name' => 'Génesis'),
        array('name' => 'Exodo'),
        array('name' => 'Levitivo'),
        array('name' => 'Números'),        
        array('name' => 'Deuterenomio'),
        array('name' => 'Josúe'),
        array('name' => 'Jueces'),
        array('name' => 'Rut'),
        array('name' => '1 Samuel'),
        array('name' => '2 Samuel'),
        array('name' => '1 Reyes'),
        array('name' => '2 Reyes'),        
        array('name' => '1 Crónicas'),
        array('name' => '2 Crónicas'),
        array('name' => 'Esdras'),
        array('name' => 'Nehemías'),
        array('name' => 'Ester'),
        array('name' => 'Job'),
        array('name' => 'Salmos'),
        array('name' => 'Proverbios'),        
        array('name' => 'Eclesiastés'),
        array('name' => 'Cantares'),
        array('name' => 'Jeremías'),
        array('name' => 'Lamentaciones'),
        array('name' => 'Ezequiel'),
        array('name' => 'Daniel'),
        array('name' => 'Oseas'),
        array('name' => 'Joel'),        
        array('name' => 'Amós'),
        array('name' => 'Abdias'),
        array('name' => 'Jonás'),
        array('name' => 'Miqueas'),
        array('name' => 'Nahum'),
        array('name' => 'Habacuc'),        
        array('name' => 'Sofonías'),
        array('name' => 'Hageo'),
        array('name' => 'Zacarías'),
        array('name' => 'Malaquías'),
        array('name' => 'Mateo'),
        array('name' => 'Marcos'),        
        array('name' => 'Lucas'),
        array('name' => 'Juan'),
        array('name' => 'Hechos'),
        array('name' => 'Romanos'),
        array('name' => '1 Corintios'),
        array('name' => '2 Corintios'),        
        array('name' => 'Gálatas'),
        array('name' => 'Efesios'),
        array('name' => 'Filipenses'),
        array('name' => 'Colosenses'),
        array('name' => '1 Tesalonicenses'),
        array('name' => '2 Tesalonicenses'),        
        array('name' => '1 Timoteo'),
        array('name' => '2 Timoteo'),
        array('name' => 'Tito'),
        array('name' => 'Filemón'),
        array('name' => 'Hebreos'),
        array('name' => 'Santiago'),        
        array('name' => '1 Pedro'),
        array('name' => '2 Pedro'),
        array('name' => '1 Juan'),
        array('name' => '2 Juan'),
        array('name' => '3 Juan'),
        array('name' => 'Judas'),
        array('name' => 'Apocalipsis'),

    );
        Book::insert($book);
    }
}