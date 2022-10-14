<?php

use App\Comic;
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
        $comics = config('comics');

        foreach($comics as $comic){
            $c = new Comic();
            $c->title = $comic['title'];
            $c->description = $comic['description'];
            $c->thumb = $comic['thumb'];
            $c->price = $comic['price'];
            $c->series = $comic['series'];
            $c->sale_date = $comic['sale_date'];
            $c->type = $comic['type'];
            $c->save();
        }
    }
}
