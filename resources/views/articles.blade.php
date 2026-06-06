<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PusatBeasiswa Article</title>
    <link rel="stylesheet" href="{{ asset('css/article.css')}}">
</head>
<body>
    <div class="container">
        <div class="sidebar">

            <div class="menu-section">
                <div class="menu-label">OVERVIEW</div>
                <a href= "{{ route('dashboard')}}" class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href= "{{ route('workshop')}}" class="menu-item {{ request()->routeIs('workshop') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>Workshop</span>
                </a>
                <a href= "{{ route('scholarship')}}" class="menu-item {{ request()->routeIs('scholarship') ? 'active' : '' }}">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span>Scholarship</span>
                </a>
                <a href= "{{ route('articles')}}" class="menu-item {{ request()->routeIs('articles') ? 'active' : '' }}">
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

                        <button type="submit" class="logout-btn">
                            logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-content">
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <div class="header">
                <div class="search-bar">
                    <svg class="search-icon" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <form action="{{ route('articles') }}" method="GET" class="search-bar">
                        <svg class="search-icon" width="20" height="20" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Search article..."
                        >
                    </form>
                </div>
                <div class="header-right">
                    <div class="user-profile">
                        <div class="user-avatar"></div>
                        <div class="user-name">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-banner">
                <div class="hero-content">
                    <h1 class="hero-title">Inovation in<br>Rural Education</h1>
                    <div class="hero-label">Discover how new technologies are transforming communities.</div>
                    <button class="hero-btn">
                        Read More
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="articles-grid">
                @foreach($articles as $article)
                    <div class="article-card">

                        <div class="article-image"
                            style="background-image:url('{{ asset('images/' . $article->image) }}')">
                        </div>

                        <div class="article-content">
                            <h3 class="article-title">
                                {{ $article->title }}
                            </h3>

                            <a href="{{ route('articles.show', $article->id) }}" class="read-more">
                                Read More →
                            </a>

                            <div class="author">
                                <div class="author-avatar"></div>

                                <div class="author-name">
                                    {{ $article->author }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>