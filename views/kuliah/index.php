<?php include '../../includes/header.php'; ?>
<?php include '../../includes/sidebar.php'; ?>

<main class="wadah-konten">
    <div class="kepala-halaman">
        <h1>Data Mata Kuliah</h1>
        <p>Kelola daftar mata kuliah kurikulum Universitas Riau.</p>
    </div>

    <div class="wadah-tabel">
        <button class="tombol tombol-tambah" onclick="bukaModal('modalTambahMK')">
            <i class="fas fa-plus"></i> Tambah Mata Kuliah
        </button>

        <table class="tabel-siakad">
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>No</th>
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td>TIF102</td>
                    <td>Pemrograman Web Dasar</td>
                    <td>3</td>
                    <td>2</td>
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

<div id="modalTambahMK" class="bingkai-modal">
    <div class="konten-modal">
        <span class="tombol-tutup" onclick="tutupModal('modalTambahMK')">&times;</span>
        <h3>Tambah Mata Kuliah</h3>
        <hr class="garis-pembatas">
        
        <form action="../../api/proses_tambah_mk.php" method="POST">
            <div class="grup-input">
                <label>Kode Mata Kuliah</label>
                <input type="text" name="kode_mk" placeholder="Contoh: TIF101" required>
            </div>
            <div class="grup-input">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" placeholder="Masukkan nama mata kuliah" required>
            </div>
            <div class="grup-input">
                <label>Jumlah SKS</label>
                <select name="sks" class="pilihan-role">
                    <option value="1">1 SKS</option>
                    <option value="2">2 SKS</option>
                    <option value="3">3 SKS</option>
                    <option value="4">4 SKS</option>
                </select>
            </div>
            <div class="grup-input">
                <label>Semester</label>
                <input type="number" name="semester" min="1" max="8" placeholder="Contoh: 2" required>
            </div>
            <button type="submit" class="tombol-masuk">SIMPAN MATA KULIAH</button>
        </form>
    </div>
</div>