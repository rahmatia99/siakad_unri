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

    <div class="wadah-tabel" style="margin-top: 30px; text-align: center; padding: 50px;">
        <i class="fas fa-chart-line fa-3x" style="color: #ddd; margin-bottom: 20px;"></i>
        <h2 style="color: #ccc;">Grafik Perkembangan Akan Muncul Di Sini</h2>
        <p style="color: #999;">(Menunggu data dari Backend)</p>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>