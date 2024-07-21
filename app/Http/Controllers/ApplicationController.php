<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
use App\Jobs\SendApplicationNotification;
class ApplicationController extends Controller
{
    public function create()
    {
        return view('applications.create');
    }
    public function store(Request $request)
    {
        $application = new Application();
        $application->name = $request->name;
        $application->phone = $request->phone;
        $application->email = $request->email;
        // Handle the file upload
        if ($request->hasFile('cv')) {
            $filePath = $request->file('cv')->store('cvs', 'public');
            $application->cv = $filePath;
        }
        // Create a new application
        $application->save();
        $recipientEmail = $request->email;
        if($recipientEmail)
        {
            SendApplicationNotification::dispatch($application, $recipientEmail);
            // Redirect to a success page or back to the form with a success message
            return redirect()->route('applications.create')->with('success', 'Application submitted successfully!');
        }
       
    }
}
