<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pages = Page::orderBy('id', 'DESC')->paginate(10);
        return view('pages.index', compact('pages'));
    }
    public function create()
    {
        return view('pages.create');
    }

    public function store(PageRequest $request)
    {
        Page::create($request->all());
        return redirect(route('pages.index'));
    }
    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->all());
        return redirect('page');
    }
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect('page');
    }
}
