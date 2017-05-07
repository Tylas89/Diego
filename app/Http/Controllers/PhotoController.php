<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PhotoRequest;
use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $photos = Photo::orderBy('id', 'DESC')->paginate(10);

        return view('photos.index', compact('photos'));
    }
    public function create()
    {
        $photos = Category::all()->pluck('name', 'id');
        return view('photos.create', compact('photos'));
    }
    public function store(PhotoRequest $request) {
        $photo = new Photo();

        $request->file('name')
            ->move(public_path('images'), $request->file('name')
                ->getClientOriginalName());

        $photo->content = $request->input('content');
        $photo->category_id = $request->input('category_id');
        $photo->name = $request->file('name')
            ->getClientOriginalName();

        $photo->save();

        return redirect()->route('photos.index');
    }
    public function edit(Photo $photo)
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('photos.edit', compact('photo','categories'));
    }
    public function update(Request $request, Photo $photo)
    {
        if($request->file('name')){
            $request->file('name')
                ->move(public_path('images'), $request->file('name')
                    ->getClientOriginalName());
            $photo->name = $request->file('name')->getClientOriginalName();
        }
        $photo->content = $request->input('content');
        $photo->category_id = $request->input('category_id');
        $photo->save();


        return redirect('photo');
    }
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect('photo');
    }
}
