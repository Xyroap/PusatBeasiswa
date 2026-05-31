<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Detail Article</title>
    <link rel="stylesheet" href="{{ asset('css/article-detail.css')}}"/>
</head>
<body>
    <!-- NAV -->
    <nav>
        <a href="{{ route('dashboard') }}" class="nav-back">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </a>
        
        <div class="nav-user">
            {{-- <div class="nav-avatar">
                <!-- Replace src with real avatar URL -->
                <img src="https://i.pravatar.cc/80?img=11" alt="Evans Greg"/>
            </div> --}}
            <span class="nav-name">
                {{ Auth::user()->name }}
            </span>
        </div>
    </nav>
    
    <main class="container">
        <div class="hero-wrap">
            <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}">
        </div>
        
        <!-- Title -->
        <h1>{{ $article->title }}</h1>
        <!-- Author -->
        <div class="author-row">
            
            <div class="author-meta">
                <span class="author-name">By {{ $article->author }}</span>
                <span class="author-date">
                    Published on October 7, 2025
                </span>
            </div>
        </div>
        
        <div class="rule"></div>
        
        <!-- Body -->
        <div class="article-body">
            <p class="drop-cap">
                {{ $article->content }}
            </p>
        </div>
    </main>
    

    <script src="{{ asset('js/article-detail.js')}}"></script>
</body>
</html>