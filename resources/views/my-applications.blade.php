<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Applications</title>
    <link rel="stylesheet" href="{{ asset('css/my-applications.css')}}">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="menu-section">
                <div class="menu-label">OVERVIEW</div>
                <a href="{{ route('dashboard')}}" class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('workshop')}}" class="menu-item {{ request()->routeIs('workshop') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>Workshop</span>
                </a>
                <a href="{{ route('scholarship')}}" class="menu-item {{ request()->routeIs('scholarship') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span>Scholarship</span>
                </a>
                <a href="{{ route('articles')}}" class="menu-item {{ request()->routeIs('articles') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Article</span>
                </a>
                <a href="{{ route('applications.index') }}" class="menu-item {{ request()->routeIs('applications.index') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                    <span>My Applications</span>
                </a>
            </div>

            <div class="logout-section">
                <div class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-btn">logout</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="applications-wrapper">

                <div class="applications-header">
                    <div>
                        <h1 class="applications-title">My Applications</h1>
                        <p class="applications-subtitle">Track the status of your scholarship applications</p>
                    </div>
                    <a href="{{ route('scholarship') }}" class="btn-apply-more">+ Apply More</a>
                </div>

                @if($applications->isEmpty())
                    <div class="empty-state">
                        <svg width="56" height="56" fill="none" stroke="#9ca3af" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <p>No applications yet. Start applying for scholarships!</p>
                        <a href="{{ route('scholarship') }}" class="btn-apply-more">Browse Scholarships</a>
                    </div>
                @else
                    <div class="table-wrap">
                        <table class="applications-table">
                            <thead>
                                <tr>
                                    <th>Scholarship</th>
                                    <th>GPA</th>
                                    <th>Status</th>
                                    <th>Applied At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $application)
                                    <tr onclick="window.location='{{ route('applications.show', $application->id) }}'"style="cursor:pointer;">
                                        <td>
                                            <div class="scholarship-name">{{ $application->scholarship->title }}</div>
                                        </td>
                                        <td>
                                            <span class="gpa-badge">{{ $application->gpa }}</span>
                                        </td>
                                        <td>
                                            @php
                                                $status = strtolower($application->status);
                                            @endphp
                                            <span class="status-badge status-{{ $status }}">
                                                {{ ucfirst($application->status) }}
                                            </span>
                                        </td>
                                        <td class="date-cell">{{ $application->created_at->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
    </div>
</body>
</html>