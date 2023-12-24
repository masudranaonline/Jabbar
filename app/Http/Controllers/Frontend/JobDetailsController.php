<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobDetailsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Job $job)
    {
        return view('frontend.job-details', compact('job'));
    }
}
