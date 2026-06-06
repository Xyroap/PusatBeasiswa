<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Workshop</title>
  <link rel="stylesheet" href="{{ asset('css/workshop-detail.css')}}"/>
</head>
<body>
    <!-- NAV -->
    <nav>
        <a href="{{ route('workshop') }}" class="nav-back">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </a>

        <div class="nav-user">
            <div class="nav-avatar"></div>
            <span class="nav-name">
                {{ Auth::user()->name }}
            </span>
        </div>
    </nav>

    <main class="container">
        <div class="hero-wrap">
            <img src="{{ asset('images/' . $workshop->image) }}" alt="{{ $workshop->title }}"/>
        </div>

        <h1>{{ $workshop->title }}</h1>

        <!-- Info -->
        <div class="info-section">

        <p class="info-label">Speaker</p>
        <p class="info-value">{{ $workshop->speaker }}</p>

        <p class="info-label">Date</p>
        <p class="info-value">{{ \Carbon\Carbon::parse($workshop->event_date)->format('d F Y') }}</p>

        <p class="info-label">Description</p>
        <p class="info-description">
            {{ $workshop->description }}
        </p>

        </div>

    </main>

    <script>
        document.querySelector('.nav-back').addEventListener('click', () => {
        if (history.length > 1) history.back();
        });
    </script>
</body>
</html>