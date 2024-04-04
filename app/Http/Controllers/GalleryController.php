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
        $path = $request->file('photo')->store('images', 's3');
        $url = Storage::disk('s3')->url($path);
        $gallery = Gallery::create([
            'name' => $request->name,
            'photo_url' => $url,
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
public function update(Request $request, $id)
{
   $gallery = Gallery::find($request->id);
    $gallery->name = $request->name;
    
    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('images', 's3');
        $url = Storage::disk('s3')->url($path);
        $gallery->photo_url = $url;
    }
    
    $gallery->save();
    return redirect('galleries/')->with("info", 'Existing Gallery is updated');
}
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->photo_url) {
        $path = parse_url($gallery->photo_url, PHP_URL_PATH);
        $path = ltrim($path, '/');
        Storage::disk('s3')->delete($path);
    }
        $gallery->delete();
        return redirect('galleries/')->with("info", 'Existing Gallery is deleted');
    }
}