<footer class="kaki-halaman">
        <p>&copy; 2024 SIAKAD UNRI - Dibuat dengan ❤️ untuk Tugas UAS</p>
    </footer>

    <script src="../../assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    // Script otomatis deteksi menu aktif
    document.addEventListener("DOMContentLoaded", function() {
        const currentPath = window.location.pathname;
        const menuLinks = document.querySelectorAll('.menu-navigasi ul li a');

        menuLinks.forEach(link => {
            if (currentPath.includes(link.getAttribute('href'))) {
                link.parentElement.classList.add('aktif');
            }
        });
    });
</script>
</body>
</html>