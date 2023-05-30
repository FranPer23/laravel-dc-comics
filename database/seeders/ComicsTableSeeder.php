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
        $data = config('comics');



        foreach ($data as $item) {
            $comic = new Comic();
            $comic->title = $item['title'];
            $comic->description = $item['description'];
            $comic->type = $item['type'];
            $comic->thumb = $item['thumb'];
            $comic->price = $item['price'];
            $comic->series = $item['series'];
            $comic->sale_date = $item['sale_date'];
            $comic->save();
        }
    }
}
