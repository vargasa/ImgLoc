<?php

use Illuminate\Database\Seeder;

class ImageMapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(App\ImageMap::class,50)->create();
    }
}
