<?php include '../../includes/header.php'; ?>
<?php include '../../includes/sidebar_dosen.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Input Nilai Akhir</h1>
        <p>Pilih Mata Kuliah: **Pemrograman Web Dasar (Kelas A)**</p>
    </div>

    <div class="wadah-tabel">
        <table class="tabel-siakad">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th width="100">Tugas (20%)</th>
                    <th width="100">UTS (30%)</th>
                    <th width="100">UAS (50%)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2201112345</td>
                    <td>Budi Setiawan</td>
                    <td><input type="number" class="input-tabel" value="85"></td>
                    <td><input type="number" class="input-tabel" value="80"></td>
                    <td><input type="number" class="input-tabel" value="90"></td>
                    <td>
                        <button class="tombol tombol-tambah" style="background:#27ae60;">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include '../../includes/footer.php'; ?>
</main>