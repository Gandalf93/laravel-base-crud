<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ((array) $comics as $comic) {
            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            $newComic->save();
        }
    }
}

// $table->string('title', 50);
// $table->text('description');
// $table->text('thumb');
// $table->float('price', 5, 2);
// $table->string('series', 50);
// $table->date('sale_date');
// $table->string('type',40);
