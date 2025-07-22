<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portofolio Saya</title>
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
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
        
        h1 {
            grid-column: 1 / -1;
            color: white;
            text-align: center;
            font-size: 3rem;
            margin-bottom: 30px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        
        /* Contact Info Section */
        .contact-info-section {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .contact-info-section h2 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
        }
        
        .contact-item {
            margin-bottom: 25px;
            padding: 20px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 15px;
            border-left: 4px solid #667eea;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .contact-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .contact-item:hover::before {
            left: 100%;
        }
        
        .contact-item:hover {
            background: rgba(102, 126, 234, 0.2);
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }
        
        .contact-item i {
            font-size: 1.5rem;
            margin-right: 15px;
            display: inline-block;
            width: 40px;
            text-align: center;
        }
        
        .contact-item .contact-label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        
        .contact-item .contact-value {
            color: #666;
            font-size: 1.1rem;
        }
        
        /* Form Section */
        .form-section {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .form-section h2 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            font-size: 1.1rem;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(102, 126, 234, 0.2);
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(5px);
            box-sizing: border-box;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: rgba(255, 255, 255, 1);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .submit-btn {
            width: 100%;
            padding: 15px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .submit-btn:hover::before {
            left: 100%;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        }
        
        .submit-btn:active {
            transform: translateY(-1px);
        }
        
        /* Social Media Section */
        .social-media {
            margin-top: 30px;
            text-align: center;
        }
        
        .social-media h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.3rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .social-link {
            display: inline-block;
            padding: 12px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: 500;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }
        
        .social-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }
        
        /* Success Message */
        .success-message {
            display: none;
            padding: 15px;
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
        
        .success-message.show {
            display: block;
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
                    <a href="about.php" class="nav-link">👤 About Me</a>
                </li>
                <li class="nav-item">
                    <a href="siswa.php" class="nav-link">📚 Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link active">📞 Contact</a>
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
        <h1>📞 Contact Me</h1>
        
        <!-- Contact Information Section -->
        <div class="contact-info-section">
            <h2>💬 Informasi Kontak</h2>
            
            <div class="contact-item">
                <i>📧</i>
                <div class="contact-label">Email Address</div>
                <div class="contact-value">dikafatahrozzaqi@gmail.com</div>
            </div>
            
            <div class="contact-item">
                <i>📱</i>
                <div class="contact-label">Phone Number</div>
                <div class="contact-value">+62 819-1483-0714</div>
            </div>
            
            <div class="contact-item">
                <i>🏠</i>
                <div class="contact-label">Address</div>
                <div class="contact-value">Jl. Bandar Ngalim GG.III<br>Kota Kediri, Jawa Timur</div>
            </div>
            
            <div class="contact-item">
                <i>📍</i>
                <div class="contact-label">School</div>
                <div class="contact-value">SMKN 1 Kota Kediri<br>Jurusan TKJ</div>
            </div>
            
            <div class="social-media">
                <h3>🌐 Follow Me</h3>
                <div class="social-links">
                    <a href="https://instagram.com/esmilokotak" class="social-link" target="_blank">
                        📷 Instagram
                    </a>
                    <a href="mailto:dikafatahrozzaqi@gmail.com" class="social-link">
                        ✉️ Email
                    </a>
                    <a href="https://wa.me/6281914830714" class="social-link" target="_blank">
                        💬 WhatsApp
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Contact Form Section -->
        <div class="form-section">
            <h2>📝 Kirim Pesan</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="nama">👤 Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap Anda">
                </div>
                
                <div class="form-group">
                    <label for="email">📧 Email</label>
                    <input type="email" id="email" name="email" required placeholder="contoh@email.com">
                </div>
                
                <div class="form-group">
                    <label for="subject">📋 Subject</label>
                    <input type="text" id="subject" name="subject" required placeholder="Topik pesan Anda">
                </div>
                
                <div class="form-group">
                    <label for="pesan">💬 Pesan</label>
                    <textarea id="pesan" name="pesan" required placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    🚀 Kirim Pesan
                </button>
                
                <div class="success-message" id="successMessage">
                    ✅ Pesan berhasil dikirim! Terima kasih telah menghubungi saya.
                </div>
            </form>
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
        
        // Handle form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            const submitBtn = document.querySelector('.submit-btn');
            const successMessage = document.getElementById('successMessage');
            
            // Change button text while "sending"
            submitBtn.innerHTML = '⏳ Mengirim...';
            submitBtn.disabled = true;
            
            // Simulate sending delay
            setTimeout(() => {
                // Reset form
                this.reset();
                
                // Show success message
                successMessage.classList.add('show');
                
                // Reset button
                submitBtn.innerHTML = '🚀 Kirim Pesan';
                submitBtn.disabled = false;
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 5000);
                
            }, 2000);
        });
        
        // Form validation feedback
        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.validity.valid) {
                    this.style.borderColor = '#4CAF50';
                } else if (this.value !== '') {
                    this.style.borderColor = '#f44336';
                }
            });
            
            input.addEventListener('input', function() {
                if (this.validity.valid) {
                    this.style.borderColor = '#667eea';
                }
            });
        });
        
        // Auto-resize textarea
        const textarea = document.getElementById('pesan');
        textarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.max(this.scrollHeight, 120) + 'px';
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
        
        // Contact items animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${Array.from(entry.target.parentNode.children).indexOf(entry.target) * 0.1}s`;
                    entry.target.style.animation = 'slideIn 0.6s ease-out forwards';
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.contact-item').forEach(item => {
            observer.observe(item);
        });
    </script>
</body>
</html>