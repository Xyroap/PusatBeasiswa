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
            <a href="#">Artikel</a>
            <a href="#workshop">Workshop</a>
            <a href="#">Beasiswa</a>
            <a href="{{ route('login')}}" class="about-btn">Login</a>
            <a href="{{ route('register')}}" class="about-btn">Register</a>
        </nav>

        <div class="mobile-nav" id="mobile-nav">
            <a href="#" class="mobile-menu-item">Home</a>
            <a href="#" class="mobile-menu-item">Artikel</a>
            <a href="#workshop" class="mobile-menu-item">Workshop</a>
            <a href="#about" class="mobile-menu-item">About Us</a>
            <a href="{{ route('login')}}" class="mobile-menu-item">Login</a>
            <a href="{{ route('register')}}" class="mobile-menu-item">Register</a>
        </div>
    </header>

    <section id="home" class="hero">
        <img src="{{ asset('bg_atas1.png')}}" alt="Background decoration" class="home-bg-up">
       
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Temukan Beasiswa Impianmu
                </h1>
                <p class="hero-description">
                    bring education to every corner of the world, empowering underprivileged communities
                    with access to learning and opportunities for a brighter future
                </p>
                <a href="#about" class="cta-btn">Know More About Us</a>
            </div>
        </div>

        <img src="{{ asset('bg_bawah1.png')}}" alt="Background decoration" class="home-bg-down">
    </section>

    <section id="journey">
        <img src="{{ asset('bg2_atas.png')}}" alt="Background decoration" class="journey-bg">

        <div class="journey-container">
            <div class="journey-content">
                <h1 class="journey-title">Come study with us</h1>
                <p class="journey-description">
                    Start learning today and be part of a global movement that believes education should belong to everyone, everywhere. Whether you're chasing dreams, building skills, or seeking new opportunities, this is your chance to grow, connect, and create a brighter future through learning
                </p>
                <a href="#" class="journey-btn">Start Your Journey</a>
            </div>
            
            <div class="portrait-section">
                <div class="portrait-container">
                    <img src="{{ asset('Teaching2.png')}}" alt="Student studying">
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <img src="{{ asset('bg3.png')}}" alt="Background decoration" class="about-bg">
        
        <div class="about-container">
            <div class="about-title">
                <h1>About Us</h1>
            </div>

            <div class="about-content">
                <h2>
                    Kami adalah platform pencarian dan rekomendasi beasiswa berbasis AI yang hadir untuk membantu siswa dan mahasiswa menemukan peluang pendidikan yang sesuai dengan profil, kebutuhan, dan tujuan akademik mereka.
                    
                    Kami memahami bahwa informasi beasiswa sering kali tersebar di berbagai sumber, sulit diverifikasi, dan memerlukan waktu lama untuk disaring secara manual. Karena itu, kami membangun solusi yang menyediakan informasi beasiswa yang terstruktur, mudah diakses, dan dipersonalisasi.
                    
                    Dengan teknologi Artificial Intelligence, platform kami menawarkan fitur pencarian pintar, rekomendasi beasiswa personal, pengecekan kelayakan (eligibility checker), serta pengingat deadline agar pengguna dapat mempersiapkan diri dengan lebih baik.
                    
                    Misi kami adalah meningkatkan akses pendidikan, membantu pengguna menemukan peluang terbaik, dan mengurangi kesenjangan informasi dalam dunia beasiswa.
                </h2>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>