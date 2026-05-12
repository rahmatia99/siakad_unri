<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIAKAD - Universitas Riau</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="halaman-login">

    <div class="wadah-login">
        <div class="kepala-login">
            <h2>SIAKAD UNRI</h2>
            <p>Sistem Informasi Akademik</p>
        </div>
        
        <hr class="garis-pembatas">

        <form action="api/auth.php" method="POST">
            
            <div class="grup-input">
                <label>Nomor Induk (NIM/NIDN)</label>
                <input type="text" name="username" placeholder="Masukkan username..." required>
            </div>
            
            <div class="grup-input">
                <label>Kata Sandi</label>
                <input type="password" name="password" placeholder="Masukkan password..." required>
            </div>

            <div class="grup-input">
                <label>Masuk Sebagai</label>
                <select name="role" class="pilihan-role">
                    <option value="admin">Admin</option>
                    <option value="dosen">Dosen</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>

            <button type="submit" class="tombol-masuk">MASUK SEKARANG</button>
        </form>
        
        <div class="tautan-bawah">
            <p>Lupa password? Hubungi Admin IT</p>
            <p>Belum punya akun? <a href="register.php">Daftar Akun</a></p>
        </div>
    </div>

</body>
</html>