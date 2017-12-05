<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use App\Helpers\Helper;

class Publication extends Model
{

	const IMAGE_LOCATION = 'uploads/publications';
	const PDF_LOCATION = 'uploads/publications/pdf';

	protected $fillable = [
		'name',
		'slug',
		'pdf',
		'image',
		'content',
		'is_featured',
		'is_published',
		'listing_order',
		'status',

		'show_in_english',
		'show_in_arabic',
	];


	public function pdfUrl(){
		if($this->pdf == null){
			return;
		}
		$pdfName = $this->pdf;   
		return url(self::PDF_LOCATION."/".$pdfName);
	}



	public function imageUrl($imageName=null,$width=null,$height=null){
		if(is_null($imageName)){
			if(is_null($this->image)){
				return;
			}
			$imageName= $this->image;
			if(!file_exists(self::IMAGE_LOCATION."/".$imageName)) {
				return ;
			}
		}
		if($width!=null && $height !=null){
			$thumbName= $width."_".$height."_".substr($imageName,0,-4);
			$original = self::IMAGE_LOCATION."/".$imageName;
			if(file_exists($thumbName)) {
				$imageName= $thumbName;
			}else{
				if( !file_exists($original)){
					return;
				}
				$imageDetails = Helper::uploadImage($original,self::IMAGE_LOCATION,$thumbName,$width,$height);
				$imageName =  $imageDetails->getData()->filename;
			}
		}
		return url(self::IMAGE_LOCATION."/".$imageName);
	}
}
