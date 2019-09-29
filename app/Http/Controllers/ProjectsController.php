<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{
    //

    public function index()
    {
    	$projects = Project::all();

    	return view('projects.index', compact('projects'));
    }

    public function create()
    {
    	return view('projects.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => ['required','min:3','max:100'],
            'description' => ['required','min:10','max:255']
        ]);

        Project::create($validated);

    	return redirect('/projects');
        
    }

    public function show(Project $project)
    {
    	return view('projects.show',compact('project'));   
    }

    public function edit(Project $project)
    {

    	return view('projects.edit',compact('project'));
    }

    public function update(Project $project)
    {
        $validated = request()->validate([
            'title' => ['required','min:3','max:100'],
            'description' => ['required','min:10','max:255']
        ]);

        $project->update($validated);

    	return redirect('/projects');
    }

    public function destroy(Project $project)
    {
    	$project->delete();
    	return redirect('/projects');
    }
}
