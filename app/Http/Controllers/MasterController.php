<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\Team;
use App\Models\Service;
use App\Models\ModernLaw;
use App\Models\Publication;
use App\Mail\ContactMail;
use App\Mail\CareerMail;
use Session;
use Helper;
use Mail;
use Hash;

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
	
	public function career()
	{
		$captcha = Helper::generateCaptcha();
		return view('project.career',compact('captcha'));
	}

	
	public function contact()
	{
		$captcha = Helper::generateCaptcha();
		return view('project.contact',compact('captcha'));
	}

	public function contactMail(Request $request)
	{

		if(!Hash::check($request->captcha, $request->_crypt)){
			Session::flash('status','alert-danger');
			Session::flash('message','Invalid Sum!');
			return back();
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

	public function careerMail(Request $request)
	{

		if(!Hash::check($request->captcha, $request->_crypt)){
			Session::flash('status','alert-danger');
			Session::flash('message','Invalid Sum!');
			return back();
		}

		Mail::to(CareerMail::getDestinationEmails())->send(new CareerMail($request));
		
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
