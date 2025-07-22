<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
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
        
        .profile-section {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            gap: 30px;
        }
        
        .profile-pic {
            width: 250px;
            height: 250px;
            border-radius: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 100%;
        }
        
        .profile-info h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .profile-info h2 {
            color: #555;
            margin-bottom: 15px;
        }
        
        .profile-info p {
            color: #666;
            line-height: 1.8;
        }
        
        .projects-section {
            margin-top: 40px;
            padding: 30px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .project-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .project-title {
            font-size: 1.3em;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .project-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .project-links {
            display: flex;
            gap: 15px;
        }
        
        .project-link {
            padding: 10px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 0.9em;
            transition: all 0.3s ease;
            font-weight: 500;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }
        
        .project-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }
        
        .project-link.demo {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
        }
        
        .project-link.demo:hover {
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.4);
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
                    <a href="index.php" class="nav-link active">🏠 Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">👤 About Me</a>
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
        <div class="profile-section">
            <div class="profile-pic">
                <img src="gambar/a.jpg" alt="foto profil">
            </div>
            <div class="profile-info">
                <h1>Selamat Datang di Portofolio Saya</h1>
                <h2>Perkenalan Singkat</h2>
                <p>Halo! Nama saya Dika Fatah Rozzaqi saya adalah siswa kelas XI TKJ 2. Saya memiliki minat dalam bidang jaringan komputer dan pemrograman web. Portofolio ini dibuat sebagai tugas dan untuk menampilkan kemampuan saya dalam pemrograman HTML dan PHP.</p>
            </div>
        </div>

        <!-- Bagian Projects -->
        <div class="projects-section">
            <h2>Project Saya</h2>
            <p>Berikut adalah beberapa project yang telah saya kerjakan:</p>
            
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-title">Tugas HTML</div>
                    <div class="project-description">
                        Berisikan code HTML dasar yang telah saya pelajari dan implementasikan dalam berbagai project pembelajaran.
                    </div>
                    <div class="project-links">
                        <a href="tugashtml" class="project-link demo" target="_blank">🚀 Buka Project</a>
                    </div>
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
        
        // Script untuk highlight active page (PHP akan menangani ini)
        // Fungsi untuk memformat nama project
        function formatProjectName(tugashtml) {
            return tugashtml.replace(/[-_]/g, ' ')
                           .replace(/\b\w/g, l => l.toUpperCase());
        }
        
        // Fungsi untuk memuat project info dari file JSON (opsional)
        async function loadProjectInfo(projectPath) {
            try {
                const response = await fetch(`${projectPath}/info.json`);
                if (response.ok) {
                    return await response.json();
                }
            } catch (error) {
                console.log('Info file not found for project:', projectPath);
            }
            return null;
        }
        
        // Smooth scrolling untuk internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>