<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;

class MyJobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = auth()->user()->jobApplication()->with(['job' => fn ($query) => $query->withCount('jobApplication')->withAvg('jobApplication', 'expacted_salary'), 'job.employer'])->latest()->get();
        return view('my_job_application.index', ['applications' => $applications]);
    }


    /**
     * Show the form for creating a new resource.
     */

    public function destroy(JobApplication $myJobApplication)
    {

        $myJobApplication->delete();

        return redirect()->back()->with(
            'success',
            'Job application removed.'
        );
    }
}
