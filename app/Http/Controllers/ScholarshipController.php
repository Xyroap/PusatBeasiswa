<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;

class ScholarshipController extends Controller
{
    public function index()
    {
        $search = request('search');

        $scholarships = Scholarship::query()
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('provider', 'like', "%{$search}%");
            })
            ->get();

        return view('scholarship', compact('scholarships'));
    }

    public function show(Scholarship $scholarship)
    {
        $alreadyApplied = Application::where('user_id', Auth::id())
        ->where('scholarship_id', $scholarship->id)
        ->exists();

        return view(
            'scholarship-detail',
            compact('scholarship', 'alreadyApplied')
        );
    }
}