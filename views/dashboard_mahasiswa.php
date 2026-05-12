<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar_mahasiswa.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Dashboard Mahasiswa</h1>
        <p>Halo, <strong>Budi Setiadi</strong> (NIM: 220101xxx)</p>
    </div>

    <div class="barisan-kartu">
        <div class="kartu-info biru">
            <i class="fas fa-chart-line"></i>
            <div>
                <span class="angka">3.75</span>
                <span class="label">IPK Kumulatif</span>
            </div>
        </div>

        <div class="kartu-info hijau">
            <i class="fas fa-list-ol"></i>
            <div>
                <span class="angka">84</span>
                <span class="label">SKS Tempuh</span>
            </div>
        </div>

        <div class="kartu-info kuning">
            <i class="fas fa-user-check"></i>
            <div>
                <span class="angka">Aktif</span>
                <span class="label">Status</span>
            </div>
        </div>
    </div>

    <div class="wadah-tabel" style="margin-top: 30px;">
        <h3><i class="fas fa-calendar-day"></i> Jadwal Kuliah Hari Ini</h3>
        <table class="tabel-siakad">
            <thead>
                <tr>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                    <th>Ruang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>08:00 - 10:30</td>
                    <td>Pemrograman Web Dasar</td>
                    <td>Dr. Heru Prasetyo</td>
                    <td>Lab TI 01</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>