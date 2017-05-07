<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Photo;
use App\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function omnie()
    {
        $about = Page::whereIn('id', array(4))->get();
        return view('front.omnie',compact('about'));
    }

    public function glowna()
    {
        return view('front.glowna');
    }
    public function kontakt()
    {
        $contact = Page::whereIn('id', array(3))->get();
        return view('front.kontakt', compact('contact'));
    }
    public function projekt()
    {
        $gallery = Project::all();
        return view('front.projekt', compact('gallery'));
    }

    public function photo()
    {
        $cate = Category::all();
        $photo = Photo::all();
        return view('front.photo', compact('photo', 'cate'));
    }

    public function byCategory(Category $category)
    {
        $cate = Category::all();
        $images = Photo::where('category_id', $category->id)->paginate();
        return view('front.show_photo', compact('category', 'images', 'cate'));
    }
}
