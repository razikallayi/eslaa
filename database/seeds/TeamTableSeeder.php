<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	File::deleteDirectory(public_path(App\Models\Team::IMAGE_LOCATION));
        factory(App\Models\Team::class, 14)->create();

    }
}
