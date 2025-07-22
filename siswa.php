<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Portofolio Saya</title>
    <style>
    * { 
            margin: 0;
            padding: 0;
            box-sizing: border-box;
    }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
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
            background: linear-gradient(45deg,rgb(255, 255, 255), #4ecdc4);
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

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .page-title {
            text-align: center;
            color: #333;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            font-weight: 300;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            border-bottom: 2px solid #667eea;
            padding-bottom: 0.5rem;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 500;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0.25rem;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-danger {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
        }

        .btn-warning {
            background: linear-gradient(135deg, #feca57 0%, #ff9ff3 100%);
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
            margin-top: 1rem;
            -webkit-overflow-scrolling: touch;
        }

        table {
            width: 100%;
            min-width: 800px;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: clamp(0.5rem, 1.5vw, 1rem);
            text-align: left;
            border-bottom: 1px solid #eee;
            font-size: clamp(0.8rem, 1.2vw, 1rem);
            word-wrap: break-word;
        }

        th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: 500;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        tr:hover {
            background-color: #f8f9ff;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            min-width: 150px;
        }

        /* Success/Error Messages */
        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }


        /* Small Tablet / Large Phone */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .container {
                padding: 0 0.5rem;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions .btn {
                width: 100%;
                margin: 0.25rem 0;
            }

            table {
                min-width: 600px;
                font-size: 0.8rem;
            }

            th, td {
                padding: 0.5rem 0.25rem;
            }

            .action-buttons .btn {
                padding: 0.3rem 0.5rem;
                font-size: 0.7rem;
            }
        }

        /* Mobile */
        @media (max-width: 480px) {
            .container {
                margin: 0.5rem auto;
                padding: 0 0.25rem;
            }

            .card {
                border-radius: 15px;
                margin-bottom: 1rem;
            }

            table {
                min-width: 500px;
                font-size: 0.75rem;
            }

            th, td {
                padding: 0.4rem 0.2rem;
            }

            .btn {
                padding: 0.6rem 1rem;
                font-size: 0.8rem;
            }

            .action-buttons {
                min-width: 120px;
            }

            .action-buttons .btn {
                padding: 0.25rem 0.4rem;
                font-size: 0.65rem;
                margin: 0.05rem;
            }

            /* Stack form elements on very small screens */
            .form-group input,
            .form-group select {
                padding: 0.6rem;
            }
        }

        /* Very Small Mobile */
        @media (max-width: 320px) {
            .page-title {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }

            table {
                min-width: 400px;
                font-size: 0.7rem;
            }

            th, td {
                padding: 0.3rem 0.15rem;
            }

            .action-buttons .btn {
                padding: 0.2rem 0.3rem;
                font-size: 0.6rem;
            }
        }

        /* Landscape Phone */
        @media (max-height: 500px) and (orientation: landscape) {
            .container {
                margin: 0.5rem auto;
            }

            .card {
                padding: 1rem;
            }
        }

        /* Print Styles */
        @media print {
            .btn,
            .hamburger {
                display: none !important;
            }

            body {
                background: white !important;
                color: black !important;
            }

            .card {
                background: white !important;
                box-shadow: none !important;
                border: 1px solid #ccc !important;
            }

            table {
                box-shadow: none !important;
            }

            .action-buttons {
                display: none !important;
            }
        }

        /* Accessibility Improvements */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* High Contrast Mode */
        @media (prefers-contrast: high) {
            body {
                background: #000;
                color: #fff;
            }

            .card {
                background: #222;
                border: 2px solid #fff;
            }

            .btn {
                border: 2px solid #fff;
            }

            table {
                border: 2px solid #fff;
            }

            th, td {
                border: 1px solid #fff;
            }
        }

        /* Loading state for better UX */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #667eea;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Focus states for accessibility */
        .btn:focus,
        input:focus,
        select:focus {
            outline: 3px solid #667eea;
            outline-offset: 2px;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
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
                    <a href="siswa.php" class="nav-link active">📚 Data Siswa</a>
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

    <div class="container">
        <div class="card">
            <h1 class="page-title">Sistem Manajemen Data Siswa</h1>
        
        <?php
        // Konfigurasi koneksi database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = $_SESSION['username'] ?? "db_dika"; // Nama database sesuai dengan nama siswa
        
        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
        
        // Membuat tabel jika belum ada
        $sql = "CREATE TABLE IF NOT EXISTS tb_dika (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nisn VARCHAR(30) NOT NULL,
            nama VARCHAR(50) NOT NULL,
            no_absen INT(3) NOT NULL,
            jurusan VARCHAR(50) NOT NULL,
            kelas VARCHAR(10) NOT NULL,
            gender ENUM('Laki-laki', 'Perempuan') NOT NULL,
            alamat TEXT NOT NULL
        )";
        
        if ($conn->query($sql) === FALSE) {
            echo "Error creating table: " . $conn->error;
        }
        
        // Proses hapus data
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = "DELETE FROM tb_dika WHERE id=$id";
            
            if ($conn->query($sql) === TRUE) {
                echo "<div style='padding: 10px; background-color: #dff0d8; color: solid #667eea; margin-bottom: 15px;'>
                        Data siswa berhasil dihapus
                      </div>";
            } else {
                echo "<div style='padding: 10px; background-color: #f2dede; color: #a94442; margin-bottom: 15px;'>
                        Error: " . $sql . "<br>" . $conn->error . "
                      </div>";
            }
        }

        // Proses tampil detail data
if (isset($_GET['detail'])) {
    $id = $_GET['detail'];
    $sql = "SELECT * FROM tb_dika WHERE id=$id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div style='padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; margin-bottom: 20px; border-radius: 5px;'>
                <h3 style='color: #333; margin-bottom: 15px;'>Detail Data Siswa</h3>
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr>
                        <td style='padding: 8px; font-weight: bold;'>NISN:</td>
                        <td style='padding: 8px;'>" . $row['nisn'] . "</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px; font-weight: bold;'>Nama:</td>
                        <td style='padding: 8px;'>" . $row['nama'] . "</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px; font-weight: bold; width: 150px;'>No Absen:</td>
                        <td style='padding: 8px;'>" . $row['no_absen'] . "</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px; font-weight: bold;'>Kelas:</td>
                        <td style='padding: 8px;'>" . $row['kelas'] . "</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px; font-weight: bold;'>Gender:</td>
                        <td style='padding: 8px;'>" . $row['gender'] . "</td>
                    </tr>
                    <tr>
                        <td style='padding: 8px; font-weight: bold;'>Alamat:</td>
                        <td style='padding: 8px;'>" . $row['alamat'] . "</td>
                    </tr>
                </table>
                <div style='margin-top: 15px;'>
                    <a href='?' style='background-color: #667eea; color: white; padding: 8px 15px; text-decoration: none; border-radius: 3px;'>Kembali ke Daftar</a>
                </div>
              </div>";
    } else {
        echo "<div style='padding: 10px; background-color: #f2dede; color: #a94442; margin-bottom: 15px; border-radius: 3px;'>
                Data siswa tidak ditemukan
              </div>";
    }
}
        
        
        // Proses tambah/edit data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $no_absen = $_POST['no_absen'];
            $jurusan = $_POST['jurusan'];
            $kelas = $_POST['kelas'];
            $gender = $_POST['gender'];
            $alamat = $_POST['alamat'];
            
            if (isset($_POST['id'])) {
                // Update data
                $id = $_POST['id'];
                $sql = "UPDATE tb_dika SET 
                        nisn='$nisn', 
                        nama='$nama', 
                        no_absen=$no_absen, 
                        jurusan='$jurusan', 
                        kelas='$kelas', 
                        gender='$gender', 
                        alamat='$alamat' 
                        WHERE id=$id";
                
                if ($conn->query($sql) === TRUE) {
                    echo "<div style='padding: 10px; background-color: #dff0d8; color: #3c763d; margin-bottom: 15px;'>
                            Data siswa berhasil diperbarui
                          </div>";
                } else {
                    echo "<div style='padding: 10px; background-color: #f2dede; color: #a94442; margin-bottom: 15px;'>
                            Error: " . $sql . "<br>" . $conn->error . "
                          </div>";
                }
            } else {
                // Tambah data baru
                $sql = "INSERT INTO tb_dika (nisn, nama, no_absen, jurusan, kelas, gender, alamat) 
                        VALUES ('$nisn', '$nama', $no_absen, '$jurusan', '$kelas', '$gender', '$alamat')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "<div style='padding: 10px; background-color: #dff0d8; color: #3c763d; margin-bottom: 15px;'>
                            Data siswa berhasil ditambahkan
                          </div>";
                } else {
                    echo "<div style='padding: 10px; background-color: #f2dede; color: #a94442; margin-bottom: 15px;'>
                            Error: " . $sql . "<br>" . $conn->error . "
                          </div>";
                }
            }
        }
        
        // Tampilkan form edit jika diminta
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $sql = "SELECT * FROM tb_dika WHERE id=$id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <h2>Edit Data Siswa</h2>
                <form method="post" action="siswa.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="text" id="nisn" name="nisn" value="<?php echo $row['nisn']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="no_absen">No Absen:</label>
                        <input type="number" id="no_absen" name="no_absen" value="<?php echo $row['no_absen']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="kelas">Kelas:</label>
                        <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="Laki-laki" <?php echo ($row['gender'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php echo ($row['gender'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-edit">Update Data</button>
                        <a href="siswa.php" class="btn" style="background-color: #607d8b;">Batal</a>
                    </div>
                </form>
                <?php
            } else {
                echo "Data tidak ditemukan";
            }
        } 
        // Tampilkan form tambah jika diminta
        else if (isset($_GET['add'])) {
            ?>
            <h2>Tambah Data Siswa</h2>
            <form method="post" action="siswa.php">
                <div class="form-group">
                    <label for="nisn">NISN:</label>
                    <input type="text" id="nisn" name="nisn" required>
                </div>
                
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                
                <div class="form-group">
                    <label for="no_absen">No Absen:</label>
                    <input type="number" id="no_absen" name="no_absen" required>
                </div>
                
                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <input type="text" id="jurusan" name="jurusan" value="TKJ" required>
                </div>
                
                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" id="kelas" name="kelas" value="XI TKJ 2" required>
                </div>
                
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-add">Simpan Data</button>
                    <a href="siswa.php" class="btn" style="background-color: #607d8b;">Batal</a>
                </div>
            </form>
            <?php
        } 
        // Tampilkan tabel data
        else {
            ?>
            <a href="siswa.php?add=1" class="btn btn-add" style="margin-bottom: 15px;">Tambah Data Siswa</a>
            
            <table>
                <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>No Absen</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                
                <?php
                // Menampilkan data dari database
                $sql = "SELECT * FROM tb_dika";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["nisn"] . "</td>
                                <td>" . $row["nama"] . "</td>
                                <td>" . $row["no_absen"] . "</td>
                                <td>" . $row["jurusan"] . "</td>
                                <td>" . $row["kelas"] . "</td>
                                <td>" . $row["gender"] . "</td>
                                <td>" . $row["alamat"] . "</td>
                                <td class='action-buttons'>
                                    <a href='siswa.php?edit=" . $row["id"] . "' class='btn btn-edit'>Edit</a>
                                    <a href='siswa.php?delete=" . $row["id"] . "' class='btn btn-delete' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                                    <a href='siswa.php?detail=" . $row["id"] . "' class='btn btn-detail'>detail</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' style='text-align: center;'>Belum ada data siswa</td></tr>";
                }
                ?>
            </table>
            <?php
        }
        
        $conn->close();
        ?>
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