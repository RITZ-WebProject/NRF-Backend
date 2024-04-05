<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Career::all();
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'email' => 'required'
        ]);
        Career::create($validatedData);

        return redirect()->route('careers.index')->with('success', 'Job created successfully!');
    }

    public function show($id)
    {
        $job = Career::findOrFail($id);
        return view('jobs.show', ['job' => $job]);
    }

    public function edit($id)
    {
        $job = Career::findOrFail($id);
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'email' => 'required'
        ]);
        $job = Career::findOrFail($id);
        $job->update($validatedData);

        return redirect()->route('careers.index')->with('success', 'Job updated successfully!');
    }

    public function destroy($id)
    {
        $job = Career::findOrFail($id);
        $job->delete();

        return redirect()->route('careers.index')->with('success', 'Job deleted successfully!');
    }
}
