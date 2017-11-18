<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	File::deleteDirectory(public_path(App\Models\Service::IMAGE_LOCATION));
        factory(App\Models\Service::class, 14)->create();

    }
}
