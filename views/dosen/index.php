<?php include '../../includes/header.php'; ?>
<?php include '../../includes/sidebar.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Data Dosen</h1>
        <p>Manajemen data tenaga pengajar Universitas Riau.</p>
    </div>

    <div class="wadah-tabel">
        <button class="tombol tombol-tambah" onclick="bukaModal('modalTambahDosen')">
            <i class="fas fa-plus"></i> Tambah Dosen
        </button>

        <table class="tabel-siakad">
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Bidang Keahlian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td><img src="../../assets/images/dosen.png" class="foto-tabel"></td>
                    <td>198501012010</td>
                    <td>Dr. Ir. Eiser Reins, M.T.</td>
                    <td>Kecerdasan Buatan</td>
                    <td>
                        <a href="#" class="tombol-edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="tombol-hapus"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <button class="tombol tombol-hapus-masal">
            <i class="fas fa-trash-alt"></i> Hapus Terpilih
        </button>
    </div>

    <?php include '../../includes/footer.php'; ?>
</main>

<div id="modalTambahDosen" class="bingkai-modal">
    <div class="konten-modal">
        <span class="tombol-tutup" onclick="tutupModal('modalTambahDosen')">&times;</span>
        <h3>Tambah Dosen Baru</h3>
        <hr class="garis-pembatas">
        
        <form action="../../api/proses_tambah_dosen.php" method="POST" enctype="multipart/form-data">
            <div class="grup-input">
                <label>NIDN (Nomor Induk Dosen Nasional)</label>
                <input type="text" name="nidn" placeholder="Contoh: 1985xxxx" required>
            </div>
            <div class="grup-input">
                <label>Nama Lengkap & Gelar</label>
                <input type="text" name="nama_dosen" placeholder="Masukkan nama dan gelar" required>
            </div>
            <div class="grup-input">
                <label>Bidang Keahlian</label>
                <input type="text" name="keahlian" placeholder="Contoh: Data Science / Web Dev" required>
            </div>
            <div class="grup-input">
                <label>Foto Formal</label>
                <input type="file" name="foto_dosen" accept="image/*">
            </div>
            <button type="submit" class="tombol-masuk">SIMPAN DATA DOSEN</button>
        </form>
    </div>
</div>