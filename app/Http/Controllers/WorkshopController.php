<?php

namespace App\Http\Controllers;

use App\Models\Workshop;

class WorkshopController extends Controller
{
    public function index()
    {
        $search = request('search');

        $workshops = Workshop::query()
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('speaker', 'like', "%{$search}%");
            })
            ->get();

        return view('workshop', compact('workshops'));
    }

    public function show(Workshop $workshop)
    {
        return view('workshop-detail', compact('workshop'));
    }
}