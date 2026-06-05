<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PusatBeasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"></head>
<body>
    <header id="header">
        <div class="left-section">
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
                {{-- kalo mau naro logo disini --}}
            </div>
        </div>
       
        <nav id="desktop-nav">
            <a href="#">Home</a>
            <a href="#">Article</a>
            <a href="#workshop">Workshop</a>
            <a href="#">Scholarship</a>
            <a href="{{ route('login')}}" class="about-btn">Login</a>
            <a href="{{ route('register')}}" class="about-btn">Register</a>
        </nav>

        <div class="mobile-nav" id="mobile-nav">
            <a href="#" class="mobile-menu-item">Home</a>
            <a href="#" class="mobile-menu-item">Article</a>
            <a href="#workshop" class="mobile-menu-item">Workshop</a>
            <a href="#about" class="mobile-menu-item">About Us</a>
            <a href="{{ route('login')}}" class="mobile-menu-item">Login</a>
            <a href="{{ route('register')}}" class="mobile-menu-item">Register</a>
        </div>
    </header>

    <section id="home" class="hero">
        <img src="{{ asset('images/bg_atas1.png')}}" alt="Background decoration" class="home-bg-up">
       
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Find Your Dream Scholarship
                </h1>
                <p class="hero-description">
                    bring education to every corner of the world, empowering underprivileged communities
                    with access to learning and opportunities for a brighter future
                </p>
                <a href="#about" class="cta-btn">Know More About Us</a>
            </div>
        </div>

        <img src="{{ asset('images/bg_bawah1.png')}}" alt="Background decoration" class="home-bg-down">
    </section>

    <section id="journey">
        <img src="{{ asset('images/bg2_atas.png')}}" alt="Background decoration" class="journey-bg">

        <div class="journey-container">
            <div class="journey-content">
                <h1 class="journey-title">Start Your Dream</h1>
                <p class="journey-description">
                    Embarking on your higher education journey is an exciting step, and securing the right scholarship can turn that ambition into reality. Through a seamless and intuitive platform, we break down the barriers to financial aid, ensuring you have the resources, guidance, and timely updates needed to unlock your potential. Your academic future starts here. let's make your dreams achievable, one opportunity at a time.
                </p>
                <a href="{{route('login')}}" class="journey-btn">Start Your Journey</a>
            </div>
            
            <div class="portrait-section">
                <div class="portrait-container">
                    <img src="{{ asset('images/Teaching2.png')}}" alt="Student studying">
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <img src="{{ asset('images/bg3.png')}}" alt="Background decoration" class="about-bg">
        
        <div class="about-container">
            <div class="about-title">
                <h1>About Us</h1>
            </div>

            <div class="about-content">
                <h2>
                    We are a scholarship search and recommendation platform dedicated to helping students discover educational opportunities tailored to their profiles, needs, and academic goals. We understand that scholarship information is often scattered across various sources, difficult to verify, and time-consuming to filter manually. Therefore, we built a solution that provides structured, easily accessible, and personalized scholarship data. Through advanced matching technology, our platform offers smart search features, personalized recommendations, eligibility checkers, and deadline reminders to help users better prepare themselves. Our mission is to enhance access to education, help users find the best opportunities, and bridge the information gap in the scholarship ecosystem.
                </h2>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>