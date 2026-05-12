<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Dashboard Utama</h1>
        <p>Halo Admin, berikut adalah ringkasan data akademik hari ini.</p>
    </div>

    <div class="barisan-kartu">
        
        <div class="kartu-info biru">
            <i class="fas fa-user-graduate"></i>
            <div>
                <span class="angka">1,240</span>
                <span class="label">Total Mahasiswa</span>
            </div>
        </div>

        <div class="kartu-info hijau">
            <i class="fas fa-user-tie"></i>
            <div>
                <span class="angka">85</span>
                <span class="label">Dosen Aktif</span>
            </div>
        </div>

        <div class="kartu-info kuning">
            <i class="fas fa-book"></i>
            <div>
                <span class="angka">42</span>
                <span class="label">Mata Kuliah</span>
            </div>
        </div>

    </div>

    <div class="grid-tabel">
        
        <div class="wadah-tabel">
            <div class="judul-tabel">
                <h3><i class="fas fa-user-graduate"></i> Mahasiswa Terbaru</h3>
                <a href="mahasiswa/index.php" class="lihat-semua">Lihat Semua</a>
            </div>
            <table class="tabel-siakad">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>220101001</td>
                        <td>Budi Setiadi</td>
                        <td>Informatika</td>
                    </tr>
                    <tr>
                        <td>220101002</td>
                        <td>Ani Wijaya</td>
                        <td>Sistem Informasi</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="wadah-tabel">
            <div class="judul-tabel">
                <h3><i class="fas fa-user-tie"></i> Dosen Aktif</h3>
                <a href="dosen/index.php" class="lihat-semua">Lihat Semua</a>
            </div>
            <table class="tabel-siakad">
                <thead>
                    <tr>
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>19850101xxx</td>
                        <td>Dr. Heru Prasetyo</td>
                    </tr>
                    <tr>
                        <td>19900202xxx</td>
                        <td>Siska Amelia, M.T</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="wadah-tabel full-width">
            <div class="judul-tabel">
                <h3><i class="fas fa-book"></i> Daftar Mata Kuliah</h3>
                <a href="matakuliah/index.php" class="lihat-semua">Lihat Semua</a>
            </div>
            <table class="tabel-siakad">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>INF101</td>
                        <td>Pemrograman Web Dasar</td>
                        <td>3</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>