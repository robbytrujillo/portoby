<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string|in:Website Development, App Development, Machine Learning',
            'cover'    => 'required|image|mimes:png|max:2048',
            'about'     => 'required|string|max:65535',
        ]);

        DB::beginTransaction();

        try {

        }catch(\Exception $e) {
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
