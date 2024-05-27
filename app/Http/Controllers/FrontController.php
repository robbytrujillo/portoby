<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class FrontController extends Controller
{
    public function index() {
        // return view('front.index');
        $projects = Project::orderBy('id', 'desc')->take(6)->get();
        return view('front.index', [
            'projects' => $projects
        ]);
    }
    
    public function details(Project $project) {
         return view('front.details', [
            'project' => $project
        ]);
    }
   
    public function service() {
        return view('front.service');
    }
    
    public function booking() {
        return view('front.booking');
    }
}
