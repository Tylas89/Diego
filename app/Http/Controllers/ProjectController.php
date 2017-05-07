<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->paginate(10);
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(ProjectRequest $request) {
        $project = new Project();

        $request->file('file')
            ->move(public_path('images'), $request->file('file')
            ->getClientOriginalName());

        $project->name = $request->input('name');
        $project->file = $request->file('file')
            ->getClientOriginalName();

        $project->save();

        return redirect()->route('project.index');
    }
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        if($request->file('file')){
            $request->file('file')
                ->move(public_path('images'), $request->file('file')
                    ->getClientOriginalName());
            $project->file = $request->file('file')->getClientOriginalName();
        }
        $project->name = $request->input('name');
        $project->save();


        return redirect('project');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('project');
    }
}
