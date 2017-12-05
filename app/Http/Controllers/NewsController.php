<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Carbon\Carbon;
use App\Models\News;
use App\Helpers\Helper;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $allNews = News::orderBy('listing_order','desc')
                        ->orderBy('updated_at','desc')->get();

        return view('admin.news.manage',compact('allNews'));
    }


    public function create($id=null)
    {
        if($id != null){
            $news = News::find($id);
        }


        return view('admin.news.create',compact('news'));
    }

    public function saveImage(Request $request){
        $this->validate($request, [
            'image' => 'required',
            'location' => 'required' ,
        ]);

        $uploadImage=$request->image;
        $location = str_finish(News::IMAGE_LOCATION, '/');

        return Helper::uploadImage($uploadImage, $location);
    }


    public function store($id=null,Request $request)
    {

        if($id==null){
            $update = false;
            $imageRule = 'required';
        }else{
            $update= true;
            $news=News::find($id);
            $imageRule = '';
        }

        $rule= [
            'image'           => $imageRule,
            'url'             => 'url|nullable',
        ];

        $this->validate($request,$rule);

        $request['slug'] = str_slug($request->title);
        if($update){
            $updated = 'Updated';
            $news->update($request->all());
        } 
        else 
        {
            $updated = 'Added';
             $date=Carbon::now();
            $news=News::create($request->all());
        }

        if($news){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully '.$updated.' <b>'.$news->title.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Failed!');
        }

        return back();
    }



    public function destroy($id=null){
        if($id!=null){
            $news = News::findOrFail($id);
            $location = str_finish(News::IMAGE_LOCATION, '/');
            $filename = $news->image;
            if($filename!=null){
                if(file_exists($location.$filename)){
                    unlink($location.$filename);
                }
            }

            $isDeleted = $news->delete();
            if($isDeleted){
                session()->flash('status','alert-success');
                session()->flash('message','Successfully Removed!');
            }else{
                session()->flash('status','alert-danger');
                session()->flash('message', 'Deleting Failed!');
            }
        }
        return back();
    }


    public function sort(Request $request)
    {
        $this->validate($request, [
            'sort' => 'required|array',
            'page' => 'required'
        ]);
        $counter = News::count();
        foreach ($request->sort as $id) {
            News::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
        return;
    }


}
