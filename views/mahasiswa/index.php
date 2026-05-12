<?php include '../../includes/header.php'; ?>
<?php include '../../includes/sidebar.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Data Mahasiswa</h1>
        <p>Kelola data mahasiswa aktif UNRI di sini.</p>
    </div>

    <div class="wadah-tabel">
        <button class="tombol tombol-tambah" onclick="bukaModal('modalTambah')">
            <i class="fas fa-plus"></i> Tambah Mahasiswa
        </button>

        <div id="modalTambah" class="bingkai-modal">
            <div class="konten-modal">
                <span class="tombol-tutup" onclick="tutupModal('modalTambah')">&times;</span>
                <h3>Tambah Mahasiswa Baru</h3>
                <hr class="garis-pembatas">

                <form action="../../api/proses_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="grup-input">
                        <label>Nomor Induk Mahasiswa (NIM)</label>
                        <input type="text" name="nim" placeholder="Contoh: 220111xxx" required>
                    </div>
                    <div class="grup-input">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="grup-input">
                        <label>Program Studi</label>
                        <select name="prodi" class="pilihan-role">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                        </select>
                    </div>
                    <div class="grup-input">
                        <label>Foto Profil</label>
                        <input type="file" name="foto" accept="image/*">
                    </div>
                    <button type="submit" class="tombol-masuk">SIMPAN DATA</button>
                </form>
            </div>
        </div>

        <table class="tabel-siakad">
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td><img src="../../assets/images/tia.png" class="foto-tabel"></td>
                    <td>2201112345</td>
                    <td>Budi Setiawan</td>
                    <td>Teknik Informatika</td>
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
</main> </body>
</html>