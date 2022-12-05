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
        array('name' => 'Génesis', 'ab' => 'Gn','category' => 1, 'chapters' => 50),
        array('name' => 'Exodo', 'ab' => 'Ex','category' => 1, 'chapters' => 40),
        array('name' => 'Levítico', 'ab' => 'Lv','category' => 1, 'chapters' => 27),
        array('name' => 'Números', 'ab' => 'Nm','category' => 1, 'chapters' => 36),        
        array('name' => 'Deuterenomio', 'ab' => 'Dt','category' => 1, 'chapters' => 34),
        array('name' => 'Josúe', 'ab' => 'Jos','category' => 2, 'chapters' => 24),
        array('name' => 'Jueces', 'ab' => 'Jue','category' => 2, 'chapters' => 21),
        array('name' => 'Rut', 'ab' => 'Rut','category' => 2, 'chapters' => 4),
        array('name' => '1 Samuel', 'ab' => '1 Sam','category' => 2, 'chapters' => 31),
        array('name' => '2 Samuel', 'ab' => '2 Sam','category' => 2, 'chapters' => 24),
        array('name' => '1 Reyes', 'ab' => '1 Re','category' => 2, 'chapters' => 22),
        array('name' => '2 Reyes', 'ab' => '2 Re','category' => 2, 'chapters' => 25),        
        array('name' => '1 Crónicas', 'ab' => '1 Cr','category' => 2, 'chapters' => 29),
        array('name' => '2 Crónicas', 'ab' => '2 Cr','category' => 2, 'chapters' => 36),
        array('name' => 'Esdras', 'ab' => 'Esd','category' => 2, 'chapters' => 10),
        array('name' => 'Nehemías', 'ab' => 'Ne','category' => 2, 'chapters' => 13),
        array('name' => 'Ester', 'ab' => 'Est','category' => 2, 'chapters' => 10),
        array('name' => 'Job', 'ab' => 'Job','category' => 3, 'chapters' => 42),
        array('name' => 'Salmos', 'ab' => 'Sl','category' => 3, 'chapters' => 150),
        array('name' => 'Proverbios', 'ab' => 'Pr','category' => 3, 'chapters' => 31),        
        array('name' => 'Eclesiastés', 'ab' => 'Qo','category' => 3, 'chapters' => 12),
        array('name' => 'Cantares', 'ab' => 'Ct','category' => 3, 'chapters' => 8),
        array('name' => 'Isaías', 'ab' => 'Is','category' => 4, 'chapters' => 66),
        array('name' => 'Jeremías', 'ab' => 'Jr','category' => 4, 'chapters' => 52),
        array('name' => 'Lamentaciones', 'ab' => 'Lm','category' => 4, 'chapters' => 5),
        array('name' => 'Ezequiel', 'ab' => 'Ez','category' => 4, 'chapters' => 48),
        array('name' => 'Daniel', 'ab' => 'Dn','category' => 4, 'chapters' => 12),
        array('name' => 'Oseas', 'ab' => 'Os','category' => 5, 'chapters' => 14),
        array('name' => 'Joel', 'ab' => 'Jl','category' => 5, 'chapters' => 3),        
        array('name' => 'Amós', 'ab' => 'Am','category' => 5, 'chapters' => 9),
        array('name' => 'Abdias', 'ab' => 'Ab','category' => 5, 'chapters' => 1),
        array('name' => 'Jonás', 'ab' => 'Jon','category' => 5, 'chapters' => 4),
        array('name' => 'Miqueas', 'ab' => 'Mi','category' => 5, 'chapters' => 7),
        array('name' => 'Nahum', 'ab' => 'Na','category' => 5, 'chapters' => 3),
        array('name' => 'Habacuc', 'ab' => 'Ha','category' => 5, 'chapters' => 3),        
        array('name' => 'Sofonías', 'ab' => 'So','category' => 5, 'chapters' => 3),
        array('name' => 'Hageo', 'ab' => 'Ag','category' => 5, 'chapters' => 2),
        array('name' => 'Zacarías', 'ab' => 'Za','category' => 5, 'chapters' => 14),
        array('name' => 'Malaquías', 'ab' => 'Ml','category' => 5, 'chapters' => 4),
        array('name' => 'Mateo', 'ab' => 'Mt','category' => 6, 'chapters' => 28),
        array('name' => 'Marcos', 'ab' => 'Mc','category' => 6, 'chapters' => 16),        
        array('name' => 'Lucas', 'ab' => 'Lc','category' => 6, 'chapters' => 24),
        array('name' => 'Juan', 'ab' => 'Jn','category' => 6, 'chapters' => 21),
        array('name' => 'Hechos de los Apóstoles', 'ab' => 'He','category' => 7, 'chapters' => 28),
        array('name' => 'Romanos', 'ab' => 'Ro','category' => 8, 'chapters' => 16),
        array('name' => '1 Corintios', 'ab' => '1 Cor','category' => 8, 'chapters' => 16),
        array('name' => '2 Corintios', 'ab' => '2 Cor','category' => 8, 'chapters' => 13),        
        array('name' => 'Gálatas', 'ab' => 'Ga','category' => 8, 'chapters' => 6),
        array('name' => 'Efesios', 'ab' => 'Ef','category' => 8, 'chapters' => 6),
        array('name' => 'Filipenses', 'ab' => 'Flp','category' => 8, 'chapters' => 4),
        array('name' => 'Colosenses', 'ab' => 'Col','category' => 8, 'chapters' => 4),
        array('name' => '1 Tesalonicenses', 'ab' => '1 Te','category' => 8, 'chapters' => 5),
        array('name' => '2 Tesalonicenses', 'ab' => '2 Te','category' => 8, 'chapters' => 3),        
        array('name' => '1 Timoteo', 'ab' => '1 Tim','category' => 8, 'chapters' => 6),
        array('name' => '2 Timoteo', 'ab' => '2 Tim','category' => 8, 'chapters' => 4),
        array('name' => 'Tito', 'ab' => 'Tit','category' => 8, 'chapters' => 3),
        array('name' => 'Filemón', 'ab' => 'Flm','category' => 8, 'chapters' => 1),
        array('name' => 'Hebreos', 'ab' => 'Heb','category' => 8, 'chapters' => 13),
        array('name' => 'Santiago', 'ab' => 'Sant','category' => 8, 'chapters' => 5),        
        array('name' => '1 Pedro', 'ab' => '1 Pe','category' => 8, 'chapters' => 5),
        array('name' => '2 Pedro', 'ab' => '2 Pe','category' => 8, 'chapters' => 3),
        array('name' => '1 Juan', 'ab' => '1 Jn','category' => 8, 'chapters' => 5),
        array('name' => '2 Juan', 'ab' => '2 Jn','category' => 8, 'chapters' => 1),
        array('name' => '3 Juan', 'ab' => '3 Jn','category' => 8, 'chapters' => 1),
        array('name' => 'Judas', 'ab' => 'Jds','category' => 8, 'chapters' => 1),
        array('name' => 'Apocalipsis', 'ab' => 'Ap','category' => 9, 'chapters' => 22),

    );
        Book::insert($book);
    }
}