<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Publication;
use App\Helpers\Helper;

class PublicationController extends Controller
{

    public function index(Request $request)
    {
        $publications = Publication::orderBy('listing_order','desc')
        ->orderBy('updated_at','desc')->get();

        return view('admin.publication.manage',compact('publications'));
    }


    public function create($id=null)
    {
        if($id != null){
            $publication = Publication::find($id);
        }


        return view('admin.publication.create',compact('publication'));
    }

    public function saveImage(Request $request){
        $this->validate($request, [
            'image' => 'required',
            'location' => 'required' ,
        ]);

        $uploadImage=$request->image;
        $location = str_finish(Publication::IMAGE_LOCATION, '/');

        return Helper::uploadImage($uploadImage, $location);
    }


    public function store($id=null,Request $request)
    {

        if($id==null){
            $update = false;
             $fileRule = 'required';
        }else{
            $update= true;
            $publication=Publication::find($id);
        }

        $rule= [
            'pdfs'           =>  $fileRule,
            'pdfs.*'         =>  'mimes:pdf',
        ];

        $this->validate($request,$rule);
        $publication =null;
        // $request['slug'] = str_slug($request->name);
        if($update){
            $updated = 'Updated';
            // $publication->update($request->all());
        } 
        else 
        {
            $updated = 'Added';
            foreach($request->pdfs as $pdf){
                $filename = str_random(15).time().".pdf";
                $pdf->move(Publication::PDF_LOCATION, $filename);
                $request['pdf'] = $filename;

                $publication=Publication::create($request->all());
            }
        }

        if($publication){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully '.$updated.' <b>'.$publication->name.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Failed!');
        }

        return back();
    }



    public function destroy($id=null){
        if($id!=null){
            $publication = Publication::findOrFail($id);
            $location = str_finish(Publication::IMAGE_LOCATION, '/');
            $filename = $publication->image;
            if($filename!=null){
                if(file_exists($location.$filename)){
                    unlink($location.$filename);
                }
            }

            $isDeleted = $publication->delete();
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
        $counter = Publication::count();
        foreach ($request->sort as $id) {
            Publication::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
        return;
    }


}
