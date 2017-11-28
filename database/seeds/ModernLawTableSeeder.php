<?php

use Illuminate\Database\Seeder;

class ModernLawTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	File::deleteDirectory(public_path(App\Models\ModernLaw::IMAGE_LOCATION));
        factory(App\Models\ModernLaw::class, 10)->create();

    }
}
