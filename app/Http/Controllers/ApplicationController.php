<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function create(Scholarship $scholarship)
    {
        return view('application-form', compact('scholarship'));
    }

    public function store(Request $request, Scholarship $scholarship)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gpa' => 'required|numeric|min:0|max:4',
            'major' => 'required|string|max:255',
            'education_level' => 'required|string',
            'toefl_score' => 'nullable|integer|min:0',
            'organization_experience' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $cvPath = null;

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv', 'public');
        }

        $existingApplication = Application::where('user_id', Auth::id())
        ->where('scholarship_id', $scholarship->id)
        ->first();

        if ($existingApplication) {
            return redirect()
                ->back()
                ->with('error', 'You have already applied for this scholarship.');
        }

        Application::create([
            'user_id' => Auth::id(),
            'scholarship_id' => $scholarship->id,
            'gpa' => $validated['gpa'],
            'major' => $validated['major'],
            'education_level' => $validated['education_level'],
            'toefl_score' => $validated['toefl_score'] ?? null,
            'organization_experience' => $validated['organization_experience'] ?? null,
            'cv' => $cvPath,
            'status' => 'Pending',
        ]);

        return redirect()
            ->route('application.success')
            ->with('success', 'Application submitted successfully!');
    }

    public function index()
    {
        $applications = Application::with('scholarship')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('my-applications', compact('applications'));
    }

    public function show(Application $application)
    {
        if ($application->user_id !== Auth::id()) {
            abort(403);
        }

        return view('application-detail', compact('application'));
    }
}