<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job = Job::with('employer')->latest()->simplePaginate(10);
        return view('jobs.index',[
            'jobs' => $job
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        return redirect('jobs/' . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('jobs');
    }
}
