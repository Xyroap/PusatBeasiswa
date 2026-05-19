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
            </div>
           
            <div class="logo">
                <img src="" alt="Logo">
            </div>
        </div>
       
        <nav id="desktop-nav">
            <a href="login.html">Home</a>
            <a href="login.html">Artikel</a>
            <a href="#workshop">Workshop</a>
            <a href="login.html">Beasiswa</a>
            <a href="login.html" class="about-btn">Login</a>
        </nav>

        <div class="mobile-nav" id="mobile-nav">
            <a href="login.html" class="mobile-menu-item">Home</a>
            <a href="login.html" class="mobile-menu-item">Artikel</a>
            <a href="#workshop" class="mobile-menu-item">Workshop</a>
            <a href="#about" class="mobile-menu-item">About Us</a>
            <a href="login.html" class="mobile-menu-item">Login</a>
        </div>
    </header>

    <section id="home" class="hero">
        <img src="bg_atas1.png" alt="Background decoration" class="home-bg-up">
       
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Bring Education To The World
                </h1>
                <p class="hero-description">
                    bring education to every corner of the world, empowering underprivileged communities
                    with access to learning and opportunities for a brighter future
                </p>
                <a href="#about" class="cta-btn">Know More About Us</a>
            </div>
        </div>

        <img src="bg_bawah1.png" alt="Background decoration" class="home-bg-down">
    </section>

    <section id="journey">
        <img src="bg2_kiri.png" alt="Background decoration" class="journey-bg">

        <div class="journey-container">
            <div class="journey-content">
                <h1 class="journey-title">Come study with us</h1>
                <p class="journey-description">
                    Start learning today and be part of a global movement that believes education should belong to everyone, everywhere. Whether you're chasing dreams, building skills, or seeking new opportunities, this is your chance to grow, connect, and create a brighter future through learning
                </p>
                <a href="login.html" class="journey-btn">Start Your Journey</a>
            </div>
            
            <div class="portrait-section">
                <div class="portrait-container">
                    <img src="Teaching2.png" alt="Student studying">
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <img src="bg3_kiri.png" alt="Background decoration" class="about-bg-left">
        <img src="bg3_kanan.png" alt="Background decoration" class="about-bg-right">
        
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

    <script src="script.js"></script>
</body>
</html>