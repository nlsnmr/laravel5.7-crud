<?php

namespace App\Http\Controllers;

use App\Project;
use App\Events\ProjectCreated;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }
    public function create()
    {
        $projects = Project::all();

        return view('projects.create', compact('projects'));
    }
    public function store()
    {
        $project = Project::create( $this->validateProject() + ['owner_id'=>auth()->id()]);
        return redirect('/projects');
    }

    public function update(Project $project)
    {
        $project->update($this->validateProject());
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
       // $this->authorize('update',$project);
        return view('projects.edit',compact('project'));
    }

    public function show(Project $project)
    {
        //abort_if($project->owner_id !== auth()->id(),403);
        return view('projects.show',compact('project'));
    }

    protected function validateProject()
    {
        return request()->validate([
            'title' => ['required','min:3'],
            'description' => ['required','min:5']

        ]);

    }
}
