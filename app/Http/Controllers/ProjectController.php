<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('page.project', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $prev = Project::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $next = Project::where('id', '>', $id)->orderBy('id')->first();

        return view('page.project-detail', compact('project', 'prev', 'next'));
    }
}