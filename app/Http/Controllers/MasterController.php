<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Team;
use App\Models\News;

class MasterController extends Controller
{
	public function index()
	{
		return view('project.index');
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
		return view('project.modern-law');
	}

	
	public function news()
	{
		$allNews = News::all();
		return view('project.news',compact('allNews'));
	}

	
	public function newsDetails($slug)
	{
		$news = News::where('slug',$slug)->first();
		return view('project.news-details',compact('news'));
	}

	
	public function publications()
	{
		return view('project.publications');
	}

	
	public function service()
	{
		$services = Service::all();
		return view('project.service',compact('services'));
	}

	
	public function team()
	{
		$teams =Team::all();
		return view('project.team',compact('teams'));
	}

	
	public function contact()
	{
		return view('project.contact');
	}


	public function contact_mail()
	{
		return back();
	}

}
