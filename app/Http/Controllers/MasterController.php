<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\Team;
use App\Models\Service;
use App\Models\ModernLaw;
use App\Models\Publication;
use App\Mail\ContactMail;
use Image;
use File;
use Hash;
use Mail;

class MasterController extends Controller
{
	public function index()
	{
		$allNews = News::orderBy('updated_at','desc')->get();
		$publications =Publication::orderBy('updated_at','desc')->get();
		$services = Service::orderBy('updated_at','desc')->get();
		$modernLaws = Modernlaw::orderBy('updated_at','desc')->get();
		return view('project.index',compact('allNews','publications','services','modernLaws'));
	}
	
	public function about()
	{
		return view('project.about');
	}

	
	public function career()
	{
		return view('project.career');
	}

	
	public function clients()
	{
		return view('project.clients');
	}

	
	public function modernLaw()
	{
		$modernLaws = Modernlaw::orderBy('updated_at','desc')->get();
		return view('project.modern-law',compact('modernLaws'));
	}

	public function modernLawDetails($slug)
	{
		$modernLaw = ModernLaw::where('slug',$slug)->first();
		return view('project.modern-law-details',compact('modernLaw'));
	}


	
	public function news()
	{
		$allNews = News::orderBy('updated_at','desc')->get();
		return view('project.news',compact('allNews'));
	}

	
	public function newsDetails($slug)
	{
		if(is_numeric($slug)){
			$news = News::findOrFail($slug);
		}else{
			$news = News::where('slug',$slug)->firstOrFail();
		}
		return view('project.news-details',compact('news'));
	}

	
	public function publications()
	{
		$publications =Publication::orderBy('updated_at','desc')->get();
		return view('project.publications',compact('publications'));
	}

	
	public function service()
	{
		$services = Service::orderBy('updated_at','desc')->get();
		return view('project.service',compact('services'));
	}

	
	public function team()
	{
		$teams = Team::orderBy('updated_at','desc')->get();
		return view('project.team',compact('teams'));
	}

	
	public function contact()
	{

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
		$captchaUrl=$location."/".$filename;

		return view('project.contact',compact('captchaUrl','crypt'));
	}

	public function contactMail(Request $request)
	{

		if(!Hash::check($request->captcha, $request->_crypt)){
			Session::flash('status','alert-danger');
			Session::flash('message','Invalid Sum!');
			return;
		}

		Mail::to(ContactMail::getDestinationEmails())->send(new ContactMail($request));
		
		if( count(Mail::failures()) > 0 ) {
			Session::flash('status','alert-danger');
			Session::flash('message','Sorry!An error occured!'.Mail::failures()[0]);
		} else {
			Session::flash('status','alert-success');
			Session::flash('message','Thank You! We will contact you soon!');
		}
		return back();
	}

}
