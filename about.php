<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Portofolio Saya</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 0;
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .nav-logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            padding: 15px 0;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 10px;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-link {
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .nav-link:hover::before {
            left: 100%;
        }
        
        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        /* Hamburger Menu untuk Mobile */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
        }
        
        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 3px;
            transition: 0.3s;
            border-radius: 2px;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }
            
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background: rgba(102, 126, 234, 0.95);
                backdrop-filter: blur(20px);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
                padding: 20px 0;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-item {
                margin: 10px 0;
            }
            
            .nav-link {
                padding: 12px 30px;
                display: inline-block;
                margin: 0 20px;
            }
        }
        
        /* Container Styles */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #333;
            text-align: center;
            font-size: 3rem;
            margin-bottom: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .section {
            margin-bottom: 40px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .section h2 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            display: inline-block;
        }
        
        .section h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }
        
        .section ul {
            list-style: none;
            padding: 0;
        }
        
        .section li {
            background: rgba(102, 126, 234, 0.1);
            margin: 10px 0;
            padding: 15px 20px;
            border-radius: 10px;
            border-left: 4px solid #667eea;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .section li::before {
            content: '✓';
            position: absolute;
            left: -30px;
            top: 50%;
            transform: translateY(-50%);
            background: #667eea;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: left 0.3s ease;
        }
        
        .section li:hover::before {
            left: 15px;
        }
        
        .section li:hover {
            background: rgba(102, 126, 234, 0.2);
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
            padding-left: 50px;
        }
        
        /* Skills Section */
        .skills-section {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.6) 100%);
        }
        
        .skill-item {
            margin-bottom: 25px;
        }
        
        .skill-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }
        
        .skill-bar {
            width: 100%;
            height: 20px;
            background: rgba(200, 200, 200, 0.3);
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .skill {
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            transition: width 2s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 15px;
            color: white;
            font-weight: bold;
            font-size: 0.9rem;
        }
        
        .skill::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        /* Education Timeline */
        .education-section {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.6) 100%);
        }
        
        .education-section li {
            position: relative;
            padding-left: 60px;
        }
        
        .education-section li::before {
            content: '🎓';
            font-size: 20px;
            left: 20px;
            background: none;
            width: auto;
            height: auto;
        }
        
        /* Projects Section */
        .projects-section li::before {
            content: '🚀';
            font-size: 16px;
            background: none;
        }
        
        /* Interests Section */
        .interests-section li::before {
            content: '💡';
            font-size: 16px;
            background: none;
        }
        
        /* Animation untuk skill bars */
        .skill[data-width] {
            width: 0;
        }
        
        .skill.animate {
            animation: fillSkill 2s ease-in-out forwards;
        }
        
        @keyframes fillSkill {
            from { width: 0; }
            to { width: var(--target-width); }
        }
    </style>
</head>
<body>
    <!-- Navbar Navigasi yang Diperbaiki -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">Portfolio</a>
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">🏠 Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link active">👤 About Me</a>
                </li>
                <li class="nav-item">
                    <a href="siswa.php" class="nav-link">📚 Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">📞 Contact</a>
                </li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container">
        <h1>About Me</h1>
        
        <div class="section education-section">
            <h2>🎓 Latar Belakang Pendidikan</h2>
            <ul>
                <li>SDN Kampung Dalem 5 <strong>(2014-2020)</strong><br>
                    <small>Pendidikan dasar dengan fokus pada pengembangan karakter dan kemampuan akademik</small>
                </li>
                <li>SMPN 2 Kota Kediri <strong>(2020-2023)</strong><br>
                    <small>Mendalami ilmu pengetahuan umum dan mulai tertarik dengan teknologi komputer</small>
                </li>
                <li>SMKN 1 Kota Kediri - Jurusan TKJ <strong>(2023-sekarang)</strong><br>
                    <small>Fokus pada Teknik Komputer dan Jaringan, mempelajari administrasi sistem dan jaringan</small>
                </li>
            </ul>
        </div>
        
        <div class="section projects-section">
            <h2>🚀 Project yang Pernah Dikerjakan</h2>
            <ul>
                <li><strong>Sistem Absensi Arduino</strong><br>
                    <small>Membuat sistem absensi otomatis menggunakan Arduino dan sensor RFID</small>
                </li>
                <li><strong>Website Portfolio</strong><br>
                    <small>Membuat website sederhana dengan HTML dan CSS untuk menampilkan portofolio pribadi</small>
                </li>
                <li><strong>Sistem Absensi ESP32</strong><br>
                    <small>Mengembangkan sistem absensi otomatis menggunakan ESP32 dan sensor RFID menjadi bisa terhubung internet</small>
                </li>
            </ul>
        </div>
        
        <div class="section interests-section">
            <h2>💡 Minat & Passion</h2>
            <ul>
                <li><strong>Pengembangan Web</strong><br>
                    <small>Frontend dan Backend development menggunakan teknologi modern</small>
                </li>
                <li><strong>Administrasi Jaringan</strong><br>
                    <small>Konfigurasi router, switch, dan manajemen infrastruktur jaringan</small>
                </li>
                <li><strong>Keamanan Informasi</strong><br>
                    <small>Cybersecurity, ethical hacking, dan sistem keamanan jaringan</small>
                </li>
                <li><strong>Internet of Things (IoT)</strong><br>
                    <small>Pengembangan perangkat pintar dan sistem otomasi</small>
                </li>
            </ul>
        </div>
        
        <div class="section skills-section">
            <h2>🛠️ Keahlian & Kemampuan</h2>
            
            <div class="skill-item">
                <div class="skill-name">HTML & CSS</div>
                <div class="skill-bar">
                    <div class="skill" data-width="80" style="--target-width: 80%;">80%</div>
                </div>
            </div>
            
            <div class="skill-item">
                <div class="skill-name">Jaringan Komputer</div>
                <div class="skill-bar">
                    <div class="skill" data-width="85" style="--target-width: 85%;">85%</div>
                </div>
            </div>
            
            <div class="skill-item">
                <div class="skill-name">PHP Programming</div>
                <div class="skill-bar">
                    <div class="skill" data-width="60" style="--target-width: 60%;">60%</div>
                </div>
            </div>
            
            <div class="skill-item">
                <div class="skill-name">Arduino & IoT</div>
                <div class="skill-bar">
                    <div class="skill" data-width="70" style="--target-width: 70%;">70%</div>
                </div>
            </div>
            
            <div class="skill-item">
                <div class="skill-name">Network Administration</div>
                <div class="skill-bar">
                    <div class="skill" data-width="78" style="--target-width: 78%;">78%</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Script untuk mobile hamburger menu
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        // Script untuk menutup menu mobile ketika link diklik
        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        }));
        
        // Animasi skill bars saat halaman dimuat
        window.addEventListener('load', function() {
            const skillBars = document.querySelectorAll('.skill');
            
            const animateSkills = () => {
                skillBars.forEach((skill, index) => {
                    setTimeout(() => {
                        const width = skill.getAttribute('data-width');
                        skill.style.width = width + '%';
                        skill.classList.add('animate');
                    }, index * 200);
                });
            };
            
            // Intersection Observer untuk animasi saat scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateSkills();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            const skillsSection = document.querySelector('.skills-section');
            if (skillsSection) {
                observer.observe(skillsSection);
            }
        });
        
        // Smooth scrolling untuk internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Parallax effect untuk sections
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.section');
            const scrollTop = window.pageYOffset;
            
            sections.forEach((section, index) => {
                const rate = scrollTop * -0.5;
                section.style.transform = `translateY(${rate * 0.1}px)`;
            });
        });
    </script>
</body>
</html>