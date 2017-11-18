<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Team;

class TeamController extends Controller
{

    public function index(Request $request)
    {
        $teams = Team::orderBy('listing_order','desc')
        ->orderBy('updated_at','desc')->get();

        return view('admin.team.manage',compact('teams'));
    }


    public function create($id=null)
    {
        if($id != null){
            $team = Team::find($id);
        }


        return view('admin.team.create',compact('team'));
    }

    public function saveImage(Request $request){
        $this->validate($request, [
            'image' => 'required',
            'location' => 'required' ,
        ]);

        $uploadImage=$request->image;
        $location = str_finish(Team::IMAGE_LOCATION, '/');

        return Helper::uploadImage($uploadImage, $location);
    }


    public function store($id=null,Request $request)
    {

        if($id==null){
            $update = false;
            $imageRule = 'required';
        }else{
            $update= true;
            $team=Team::find($id);
            $imageRule = '';
        }

        $rule= [
            'image'           => $imageRule,
            'url'             => 'url|nullable',
        ];

        $this->validate($request,$rule);

        $request['slug'] = str_slug($request->name);
        if($update){
            $updated = 'Updated';
            $team->update($request->all());
        } 
        else 
        {
            $updated = 'Added';
            $team=Team::create($request->all());
        }

        if($team){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully '.$updated.' <b>'.$team->name.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Failed!');
        }

        return back();
    }



    public function destroy($id=null){
        if($id!=null){
            $team = Team::findOrFail($id);
            $location = str_finish(Team::IMAGE_LOCATION, '/');
            $filename = $team->image;
            if($filename!=null){
                if(file_exists($location.$filename)){
                    unlink($location.$filename);
                }
            }

            $isDeleted = $team->delete();
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
        $counter = Team::count();
        foreach ($request->sort as $id) {
            Team::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
        return;
    }


}
