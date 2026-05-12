<?php include '../../includes/header.php'; ?>
<?php include '../../includes/sidebar_dosen.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Jadwal Mengajar</h1>
        <p>Tahun Akademik 2023/2024 - Semester Genap</p>
    </div>

    <div class="wadah-tabel">
        <table class="tabel-siakad">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Ruang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>08:00 - 10:30</td>
                    <td>Pemrograman Web Dasar</td>
                    <td>TI-A</td>
                    <td>Lab Komputer 1</td>
                    <td>
                        <a href="input_nilai.php?mk=web_dasar" class="tombol-aksi">
                            <i class="fas fa-edit"></i> Input Nilai
                        </a>
                    </td>
                </tr>
            
            </tbody>
        </table>
    </div>

    <?php include '../../includes/footer.php'; ?>
</main>