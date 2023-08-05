<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{

    public function create(Job $job)
    {
        $this->authorize('apply', $job);
        return view('job_application.create', ['job' => $job]);
    }


    public function store(Job $job, Request $request)
    {
        $validatedData = $request->validate([
            'expacted_salary' => 'required|min:1|max:1000000',
            'cv' => 'required|file|mimes:pdf|max:2048'

        ]);

        $file = $request->file('cv');
        $path = $file->store('cvs', 'private');

        $job->jobApplication()->create([
            'user_id' => $request->user()->id,
            'expacted_salary' => $validatedData['expacted_salary'],
            'cv_path' => $path,


        ]);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job application submitted.');
    }

    public function destroy(JobApplication $myJobApplication)
    {

        $myJobApplication->delete();

        return redirect()->back()->with(
            'success',
            'Job application removed.'
        );
    }
}