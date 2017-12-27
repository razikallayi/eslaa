<?php

namespace App\Helpers;


use Image;
use File;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class Helper {

    public static function uploadImage($uploadImage,$location,$filename=null,$width=null,$height=null){
        if($location==null || $uploadImage==null){
            return;
        }
        $location = rtrim($location, '/');
        if (!strpos($filename, '.png')) {

            if($filename==null){
                $filename=str_random(15).time().".png";
            }
            else{
                $filename = $filename.".png";
            }
        }

        ini_set('memory_limit', '-1');
        ini_set('gd.jpeg_ignore_warning', '1');
        ini_set('upload_max_filesize', '2000M');
        ini_set('post_max_size', '2000M');
        ini_set('max_execution_time',36000);


        $image = Image::make($uploadImage,'png');


        if($width!=null){
// prevent possible upsizing
            $image->resize($width, null, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        if($height!=null){
// prevent possible upsizing
            $image->resize(null, $height, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

// prevent possible upsizing
        $image->resize(1920, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        if(!File::exists($location)) {
            File::makeDirectory($location,0755, true);
        }
        $image->save($location."/".$filename);

        return response()->json([
            'filename' => $filename,
            'no_extension_filename' => rtrim($filename,'.png'),
            'location' => str_finish($location, '/'),
            'src'      => url($location."/".$filename),
            'status' => 'success',
            'message' => 'Image succesfully uploaded',
        ]);
    }




    public static function generateCaptcha(){
// create a new empty image resource with red background
        $image = Image::canvas(120, 40);
        $number1=rand(1,60);
        $number2=rand(1,99);
        $crypt = bcrypt($number1+$number2);
        $image->text($number1." + ".$number2." = ", 0, 20,function($font) {

            $font->file('font/tahoma.ttf');
            $font->size(25);
            $font->color('#ccc');
// $font->align('center');
            $font->valign('center');
// $font->angle(95);
// dd($font);
        });

        $location = 'captcha';
        $filename= str_random(5).time().str_random(5).'.png';
        if(!File::exists($location)) {
            File::makeDirectory($location,0755, true);
        }
        $image->save($location."/".$filename);
        $captchaUrl=url($location."/".$filename);
        return ['imageUrl' =>$captchaUrl,'crypt'=>$crypt];
    }

}
