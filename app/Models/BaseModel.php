<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	public function translate($key='', $locale = 'ar',$fallback=false)
	{
		$key_locale = $key."_".$locale;
		if (!array_key_exists($key_locale, $this->attributes)) {
			return $this->attributes[$key];
		}
		if($fallback && ($this->attributes[$key_locale] == "" || is_null($this->attributes[$key_locale]))){
			return $this->attributes[$key];
		};
		return $this->attributes[$key_locale];
	}
}
