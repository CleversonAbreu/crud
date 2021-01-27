<?php

use App\Models\ModelBook;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'O senhor do aneis',
            'pages'=>'40',
            'price'=>'101.10',
            'id_user'=>1

        ]); 
        $book->create([
            'title'=>'O senhor do aneis',
            'pages'=>'40',
            'price'=>'101.10',
            'id_user'=>1

        ]);
        $book->create([
            'title'=>'O senhor do aneis',
            'pages'=>'40',
            'price'=>'101.10',
            'id_user'=>1

        ]);
        $book->create([
            'title'=>'O senhor do aneis',
            'pages'=>'40',
            'price'=>'101.10',
            'id_user'=>1

        ]);  //
    }
}
