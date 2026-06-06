<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Scholarship</title>
    <link rel="stylesheet" href="{{ asset('css/scholarship-detail.css') }}">
</head>
<body>

    <nav>
        <a href="{{ route('scholarship') }}" class="nav-back">
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
            <img src="{{ asset('images/' . $scholarship->image) }}"
                 alt="{{ $scholarship->title }}">
        </div>

        <h1>{{ $scholarship->title }}</h1>

        <div class="info-section">

            <p class="info-label">Penyelenggara</p>
            <p class="info-value">
                {{ $scholarship->provider }}
            </p>

            <p class="info-label">Deadline</p>
            <p class="info-value">
                {{ \Carbon\Carbon::parse($scholarship->deadline)->format('d F Y') }}
            </p>

            <p class="info-label">Deskripsi</p>
            <p class="info-description">
                {{ $scholarship->description }}
            </p>

        </div>

        <!-- Apply Button -->
        @if($alreadyApplied)
            <button class="btn-apply" disabled>
                Already Applied
            </button>
        @else
            <a href="{{ route('application.create', $scholarship->id) }}"
            class="btn-apply">
                Apply Now
            </a>
        @endif

    </main>

    <script>
        document.querySelector('.nav-back').addEventListener('click', () => {
            if (history.length > 1) history.back();
        });
    </script>

</body>
</html>