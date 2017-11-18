<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	File::deleteDirectory(public_path(App\Models\News::IMAGE_LOCATION));
        factory(App\Models\News::class, 10)->create();

    }
}
