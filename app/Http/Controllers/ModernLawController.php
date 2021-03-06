<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\ModernLaw;
use App\Helpers\Helper;
use Carbon\Carbon;

class ModernLawController extends Controller
{

    public function index(Request $request)
    {
        $modernLaws = ModernLaw::orderBy('listing_order','desc')
        ->orderBy('updated_at','desc')->get();

        return view('admin.modern-law.manage',compact('modernLaws'));
    }


    public function create($id=null)
    {
        if($id != null){
            $modernLaw = ModernLaw::find($id);
        }


        return view('admin.modern-law.create',compact('modernLaw'));
    }

    public function saveImage(Request $request){
        $this->validate($request, [
            'image' => 'required',
            'location' => 'required' ,
        ]);

        $uploadImage=$request->image;
        $location = str_finish(ModernLaw::IMAGE_LOCATION, '/');

        return Helper::uploadImage($uploadImage, $location);
    }


    public function store($id=null,Request $request)
    {

        if($id==null){
            $update = false;
            $imageRule = 'required';
        }else{
            $update= true;
            $modernLaw=ModernLaw::find($id);
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
            $modernLaw->update($request->all());
        } 
        else 
        {
            $updated = 'Added';
            $date=Carbon::now();
            $modernLaw=ModernLaw::create($request->all());
        }

        if($modernLaw){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully '.$updated.' <b>'.$modernLaw->name.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Failed!');
        }

        return back();
    }



    public function destroy($id=null){
        if($id!=null){
            $modernLaw = ModernLaw::findOrFail($id);
            $location = str_finish(ModernLaw::IMAGE_LOCATION, '/');
            $filename = $modernLaw->image;
            if($filename!=null){
                if(file_exists($location.$filename)){
                    unlink($location.$filename);
                }
            }

            $isDeleted = $modernLaw->delete();
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
        $counter = ModernLaw::count();
        foreach ($request->sort as $id) {
            ModernLaw::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
        return;
    }


}
