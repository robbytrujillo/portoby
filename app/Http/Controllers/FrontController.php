<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
   
    public function services() {
        return view('front.services');
    }
    
    public function booking() {
        return view('front.booking');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'     => 'required|string|max:255',
            'budget'   => 'required|integer|',
            'category' => 'required|string',
            'brief'    => 'required|string|max:65535'
        ]);

        DB::beginTransaction();

        try {
            
            $newProject = ProjectOrder::create($validated);

            DB::commit();

            return redirect()->route('front.index')->with('success', 'Project created succesfully!');
        }catch(\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Project created error!'.$e->getMessage());
            
        }
    }
}
