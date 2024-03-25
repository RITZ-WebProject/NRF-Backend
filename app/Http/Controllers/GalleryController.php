<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index',compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {

        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        	'photo' => ['required', 'mimetypes:image/jpg,image/png,image/svg,image/jpeg'],
        ]);

        $gallery_photo = time().'.'.$request->photo->getClientOriginalName();
        $destinationPath = 'public/galleries/';
        $request->photo->storeAs($destinationPath, $gallery_photo);


        $gallery = Gallery::create([
            'name' => $request->name,
            'photo_url' => $gallery_photo,
          ]);

        return redirect('galleries/')->with("info", 'New Gallery is Added');
    }

    public function view($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.view',compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit',compact('gallery'));
    }

    public function update(Request $request)
    {
        $gallery = Gallery::find($request->id);
        $photo_path = $gallery->photo_url;
        if($request->photo)
        {
            Storage::delete('public/galleries/'.$gallery->photo_url);

            $gallery_photo = time().'.'.$request->photo->getClientOriginalName();
            $destinationPath = 'public/galleries/';
            $request->photo->storeAs($destinationPath, $gallery_photo);
            $photo_path = $gallery_photo;
        }


        $gallery->update([
            'name'  => $request->name,
            'photo_url' => $photo_path,
        ]);

        return redirect('galleries/')->with("info", 'Existing Gallery is updated');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        Storage::delete('public/galleries/'.$gallery->photo_url);
        $gallery->delete();
        return redirect('galleries/')->with("info", 'Existing Gallery is deleted');
    }
}
