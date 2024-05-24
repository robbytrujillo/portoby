<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class FrontController extends Controller
{
    public function index() {
        // return view('front.index');
        $projects = Project::orderBy('id', 'desc')->get();
        return view('front.index', [
            'projects' => $projects
        ]);
    }
    
    public function details() {
        return view('front.details');
    }
   
    public function booking() {
        return view('front.booking');
    }
}
