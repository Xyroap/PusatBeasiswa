<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminApplicationController extends Controller
{
    public function dashboard()
    {
        $totalApplications = Application::count();

        $pendingApplications = Application::where(
            'status',
            'Pending'
        )->count();

        $approvedApplications = Application::where(
            'status',
            'Approved'
        )->count();

        $rejectedApplications = Application::where(
            'status',
            'Rejected'
        )->count();

        return view(
            'admin.dashboard',
            compact(
                'totalApplications',
                'pendingApplications',
                'approvedApplications',
                'rejectedApplications'
            )
        );
    }

    public function index()
    {
        $applications = Application::with('user', 'scholarship')
            ->latest()
            ->get();

        $totalApplications = Application::count();

        $pendingApplications = Application::where(
            'status',
            'Pending'
        )->count();

        $approvedApplications = Application::where(
            'status',
            'Approved'
        )->count();

        $rejectedApplications = Application::where(
            'status',
            'Rejected'
        )->count();

        return view(
            'admin.applications.index',
            compact(
                'applications',
                'totalApplications',
                'pendingApplications',
                'approvedApplications',
                'rejectedApplications'
            )
        );
    }

    public function show($id)
    {
        $application = Application::with('user', 'scholarship')
            ->findOrFail($id);

        return view('admin.applications.show', compact('application'));
    }

    public function updateStatus(Request $request, Application $application)
    {
        $request->validate([
            'status' => 'required|in:Approved,Rejected'
        ]);

        $application->update([
            'status' => $request->status
        ]);

        return back()->with(
            'success',
            'Application status updated successfully.'
        );
    }
}