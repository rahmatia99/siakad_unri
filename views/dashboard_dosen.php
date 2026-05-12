<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar_dosen.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Dashboard Dosen</h1>
        <p>Selamat datang, **Dr. Heru Prasetyo** (NIDN: 19850101xxx)</p>
    </div>

    <div class="barisan-kartu">
        <a href="/siakad_uas/views/dosen/jadwal.php" style="text-decoration: none; color: inherit;">
            <div class="kartu-info biru" style="cursor: pointer;">
                <i class="fas fa-book"></i>
                <div>
                    <span class="angka">1</span>
                    <span class="label">Mata Kuliah</span>
                </div>
            </div>
        </a>

        <div class="kartu-info hijau">
            <i class="fas fa-users"></i>
            <div>
                <span class="angka">125</span>
                <span class="label">Total Mahasiswa</span>
            </div>
        </div>

        <div class="kartu-info kuning">
            <i class="fas fa-star"></i>
            <div>
                <span class="angka">3.8</span>
                <span class="label">Rating Dosen</span>
            </div>
        </div>
    </div>

    <div class="wadah-tabel" style="margin-top: 30px;">
        <h3><i class="fas fa-clock"></i> Jadwal Mengajar Hari Ini</h3>
        <table class="tabel-siakad">
            <thead>
                <tr>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Ruang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>08:00 - 10:30</td>
                    <td>Pemrograman Web Dasar</td>
                    <td>Lab TI 01</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>