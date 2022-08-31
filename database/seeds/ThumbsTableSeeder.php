<?php

use Illuminate\Database\Seeder;
use App\Thumb;

class ThumbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thumbs = config('comics');

        foreach($thumbs as $thumb) {
            $new_thumbs = new Thumb();

            $new_thumbs -> title = $thumb['title'];
            $new_thumbs -> description = $thumb['description'];
            $new_thumbs -> thumb = $thumb['thumb'];
            $new_thumbs -> price = $thumb['price'];
            $new_thumbs -> series = $thumb['series'];
            $new_thumbs -> sale_date = $thumb['sale_date'];
            $new_thumbs -> type = $thumb['type'];
            
            $new_thumbs -> save();
        }
    }
}
