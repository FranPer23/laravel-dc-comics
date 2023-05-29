<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comic');



        foreach ($comics_array as $comic_item) {
            $comic = new Comic();
            $comic->title = $comic_item['titolo'];
            $comic->description = $comic_item['descrizione'];
            $comic->type = $comic_item['tipo'];
            $comic->thumb = $comic_item['prezzo'];
            $comic->price = $comic_item['serie'];
            $comic->sale_date = $comic_item['data di vendita'];
            $comic->save();
        }
    }
}
