<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PusatBeasiswa Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">
</head>
<body>
    <div class="container">

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logout-section">
                <div class="menu-item logout-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">

            <!-- Top Header -->
            <div class="topbar">
                <div class="topbar-left">
                    <h1 class="page-title">Dashboard</h1>
                    <p class="page-subtitle">Monitor all Scholarship</p>
                </div>
                <div class="topbar-right">
                    <div class="date-badge">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="14" height="14">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span id="current-date"></span>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">

                <div class="stat-card stat-total">
                    <div class="stat-icon-wrap">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <div class="stat-body">
                        <p class="stat-label">Total Application</p>
                        <h2 class="stat-value">{{ $totalApplications }}</h2>
                    </div>
                    <div class="stat-decor"></div>
                </div>

                <div class="stat-card stat-pending">
                    <div class="stat-icon-wrap">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="stat-body">
                        <p class="stat-label">Waiting Review</p>
                        <h2 class="stat-value">{{ $pendingApplications }}</h2>
                    </div>
                    <div class="stat-decor"></div>
                </div>

                <div class="stat-card stat-approved">
                    <div class="stat-icon-wrap">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="stat-body">
                        <p class="stat-label">Approve</p>
                        <h2 class="stat-value">{{ $approvedApplications }}</h2>
                    </div>
                    <div class="stat-decor"></div>
                </div>

                <div class="stat-card stat-rejected">
                    <div class="stat-icon-wrap">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="stat-body">
                        <p class="stat-label">Reject</p>
                        <h2 class="stat-value">{{ $rejectedApplications }}</h2>
                    </div>
                    <div class="stat-decor"></div>
                </div>

            </div>

            <!-- Applications Table Section -->
            <div class="table-section">
                <div class="table-header">
                    <div>
                        <h2 class="table-title">Application List</h2>
                        <p class="table-subtitle">All Scholarship Input</p>
                    </div>
                    <div class="table-meta">
                        <span class="badge-count">{{ $totalApplications }} total</span>
                    </div>
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Scholarship</th>
                                <th>GPA</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $index => $app)
                            <tr class="table-row" style="animation-delay: {{ $index * 0.05 }}s">
                                <td class="td-num">{{ $index + 1 }}</td>
                                <td>
                                    <div class="user-cell">
                                        <div class="avatar">{{ strtoupper(substr($app->user->name, 0, 1)) }}</div>
                                        <span class="user-name">{{ $app->user->name }}</span>
                                    </div>
                                </td>
                                <td class="td-scholarship">{{ $app->scholarship->title }}</td>
                                <td>
                                    <span class="gpa-badge {{ $app->gpa >= 3.5 ? 'gpa-high' : ($app->gpa >= 3.0 ? 'gpa-mid' : 'gpa-low') }}">
                                        {{ number_format($app->gpa, 2) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="status-pill status-{{ strtolower($app->status) }}">
                                        @if($app->status === 'pending')
                                            <span class="status-dot"></span>
                                        @endif
                                        {{ ucfirst($app->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="/admin/applications/{{ $app->id }}" class="view-btn">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="14" height="14">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        Detail
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script>
        const d = new Date();
        document.getElementById('current-date').textContent = d.toLocaleDateString('id-ID', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });
    </script>
</body>
</html>