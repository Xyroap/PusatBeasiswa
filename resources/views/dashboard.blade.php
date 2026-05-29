<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduspark Dashboard</title>
    <link rel="stylesheet" href=" {{ asset('css/dashboard.css')}}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">

            <div class="menu-section">
                <div class="menu-label">OVERVIEW</div>
                <a href= "{{ route('dashboard')}}" class="menu-item active">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href= "community.html" class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                    <span>Community</span>
                </a>
                <a href= "workshop.html" class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>Workshop</span>
                </a>
                <a href= "scholarship.html" class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span>Scholarship</span>
                </a>
                <a href= "article.html" class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Article</span>
                </a>
                <a href= "donation.html" class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Donation</span>
                </a>
                <a href= "volunteer.html" class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span>Volunteer</span>
                </a>
            </div>

            <div class="logout-section">
                <div class="menu-item">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="logout-btn">
                            logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="header">
                <div class="search-bar">
                    <svg class="search-icon" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input type="text" placeholder="Search your course....">
                </div>
                <div class="header-right">
                    <button class="bookmark-btn">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                        </svg>
                    </button>
                    <div class="user-profile">
                        <div class="user-avatar"></div>
                        <div class="user-name">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="donation-cards">
                    <div class="donation-card">
                        <div class="donation-label">Total Donation</div>
                        <div class="donation-amount">Rp. 52,000.00</div>
                        <div class="donation-change up">+ 45 % than last month</div>
                    </div>
                    <div class="donation-card">
                        <div class="donation-label">Donation Today</div>
                        <div class="donation-amount">AED 1000.00</div>
                        <div class="donation-change down">- 25 % than yesterday</div>
                    </div>
                </div>

                <div class="hero-banner">
                    <div class="hero-content">
                        <div class="hero-label">ONLINE WORKSHOP</div>
                        <h1 class="hero-title">Sharpen Your Skills with<br>Professional Online Workshop</h1>
                        <button class="hero-btn">
                            Join now
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <h2 class="section-title">Continue Reading</h2>
                <div class="dashboards-grid">
                    <div class="dashboard-card">
                        <div class="dashboard-image" style="background-image: url('{{ asset('images/image6.png')}}');">
                            <div class="bookmark-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="dashboard-content">
                            <h3 class="dashboard-title">Struggling to Learn with Limited Facilities</h3>
                            <div class="read-more">
                                Read More →
                            </div>
                            <div class="author">
                                <div class="author-avatar" style="background: linear-gradient(135deg, #06b6d4, #3b82f6);"></div>
                                <div class="author-name">Michael Anderson</div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="dashboard-image" style="background-image: url('{{ asset('images/image2_PhotoGrid.png')}}');">
                            <div class="bookmark-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="dashboard-content">
                            <h3 class="dashboard-title">Hopeful Minds in a Bare Classroom</h3>
                            <div class="read-more">
                                Read More →
                            </div>
                            <div class="author">
                                <div class="author-avatar" style="background: linear-gradient(135deg, #f59e0b, #ef4444);"></div>
                                <div class="author-name">Sofia Martinez</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js')}}"></script>
</body>
</html>