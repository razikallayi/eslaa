<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\Team;
use App\Models\Service;
use App\Models\ModernLaw;
use App\Models\Publication;

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
		$modernLaws = Modernlaw::all();
		return view('project.modern-law',compact('modernLaws'));
	}

	public function modernLawDetails($slug)
	{
		$modernLaw = ModernLaw::where('slug',$slug)->first();
		return view('project.modern-law-details',compact('modernLaw'));
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
		$publications =Publication::all();
		return view('project.publications',compact('publications'));
	}

	
	public function service()
	{
		$services = Service::all();
		return view('project.service',compact('services'));
	}

	
	public function team()
	{
		$teams = Team::all();
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
