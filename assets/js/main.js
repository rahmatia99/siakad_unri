// Fungsi membuka modal
function bukaModal(idModal) {
    document.getElementById(idModal).style.display = "flex";
}

// Fungsi menutup modal
function tutupModal(idModal) {
    document.getElementById(idModal).style.display = "none";
}

// Menutup modal otomatis kalau user klik di luar kotak putih
window.onclick = function(event) {
    if (event.target.className === 'bingkai-modal') {
        event.target.style.display = "none";
    }
}