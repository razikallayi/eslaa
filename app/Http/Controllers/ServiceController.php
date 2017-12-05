<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Service;
use App\Helpers\Helper;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        $services = Service::orderBy('listing_order','desc')
        ->orderBy('updated_at','desc')->get();

        return view('admin.service.manage',compact('services'));
    }


    public function create($id=null)
    {
        if($id != null){
            $service = Service::find($id);
        }


        return view('admin.service.create',compact('service'));
    }

    public function saveImage(Request $request){
        $this->validate($request, [
            'image' => 'required',
            'location' => 'required' ,
        ]);

        $uploadImage=$request->image;
        $location = str_finish(Service::IMAGE_LOCATION, '/');

        return Helper::uploadImage($uploadImage, $location);
    }


    public function store($id=null,Request $request)
    {

        if($id==null){
            $update = false;
            $imageRule = 'required';
        }else{
            $update= true;
            $service=Service::find($id);
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
            $service->update($request->all());
        } 
        else 
        {
            $updated = 'Added';
            $service=Service::create($request->all());
        }

        if($service){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully '.$updated.' <b>'.$service->name.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Failed!');
        }

        return back();
    }



    public function destroy($id=null){
        if($id!=null){
            $service = Service::findOrFail($id);
            $location = str_finish(Service::IMAGE_LOCATION, '/');
            $filename = $service->image;
            if($filename!=null){
                if(file_exists($location.$filename)){
                    unlink($location.$filename);
                }
            }

            $isDeleted = $service->delete();
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
        $counter = Service::count();
        foreach ($request->sort as $id) {
            Service::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
        return;
    }


}
