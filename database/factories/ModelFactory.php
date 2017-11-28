<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\Models\Service::class, function (Faker $faker) {

	$addImage =true;

	$location = 'public/'.App\Models\Service::IMAGE_LOCATION;
	if($addImage==true){
		$image = App\Helpers\Helper::uploadImage($faker->imageUrl(70,70),$location);
		$image_bg = App\Helpers\Helper::uploadImage($faker->imageUrl(600,500),$location);
		$filename = $image->getData()->filename;
		$filename_bg = $image_bg->getData()->filename;
	}
	else{
		$filename = null;
		$filename_bg = null;
	}
	$title =  $faker->sentence(3);
	$slug = str_slug($title);
	$list = $faker->sentence();
	$list = implode(",",explode(" ",$list));
	return [
		'title' => $title,
		'slug' =>str_slug($title),
		'url' =>$faker->url,
		'image' =>$filename,
		'bg_image' =>$filename_bg,
		'content' =>$faker->randomHtml(2,20),
		'list' =>$list
	];
});



$factory->define(App\Models\Team::class, function (Faker $faker) {

	$addImage =true;
	$location = 'public/'.App\Models\Team::IMAGE_LOCATION;
	if($addImage==true){
		$image = App\Helpers\Helper::uploadImage($faker->imageUrl(270,270),$location);
		$filename = $image->getData()->filename;
	}
	else{
		$filename = null;
		$filename_bg = null;
	}
	$name =  $faker->name;
	$slug = str_slug($name);

	return [
		'name' => $name,
		'slug' =>str_slug($name),
		'designation' => $faker->sentence(3),
		'image' =>$filename,
		'content' =>$faker->randomHtml(2,20),
	];
});


$factory->define(App\Models\News::class, function (Faker $faker) {
	$addImage =true;
	$location = 'public/'.App\Models\News::IMAGE_LOCATION;
	if($addImage==true){
		$image = App\Helpers\Helper::uploadImage($faker->imageUrl(500,500),$location);
		$filename = $image->getData()->filename;
	}
	else{
		$filename = null;
		$filename_bg = null;
	}
	$title =  $faker->sentence(3);
	$slug = str_slug($title);

	return [
		'title' => $title,
		'slug' =>str_slug($title),
		'image' =>$filename,
		'content' =>$faker->randomHtml(2,20),
		'date' => $faker->date,
	];
});


$factory->define(App\Models\ModernLaw::class, function (Faker $faker) {
	$addImage =true;
	$location = 'public/'.App\Models\ModernLaw::IMAGE_LOCATION;
	if($addImage==true){
		$image = App\Helpers\Helper::uploadImage($faker->imageUrl(500,500),$location);
		$filename = $image->getData()->filename;
	}
	else{
		$filename = null;
		$filename_bg = null;
	}
	$title =  $faker->sentence(3);
	$slug = str_slug($title);

	return [
		'title' => $title,
		'slug' =>str_slug($title),
		'image' =>$filename,
		'content' =>$faker->randomHtml(2,20),
		'date' => $faker->date,
	];
});

