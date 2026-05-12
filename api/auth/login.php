<?php
require_once '../../config/db.php';
setHeaders();
if (session_status() === PHP_SESSION_NONE) session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Method tidak diizinkan']);
    exit;
}

$data     = json_decode(file_get_contents('php://input'), true);
$username = trim($data['username'] ?? '');
$password = trim($data['password'] ?? '');

if (!$username || !$password) {
    echo json_encode(['status' => 'error', 'message' => 'Username dan password wajib diisi']);
    exit;
}

$db   = getDB();
$stmt = $db->prepare("
    SELECT u.*,
        CASE
            WHEN u.role = 'mahasiswa' THEN m.nama
            WHEN u.role = 'dosen'     THEN d.nama
            ELSE 'Administrator'
        END AS nama_lengkap,
        CASE
            WHEN u.role = 'mahasiswa' THEN m.foto
            WHEN u.role = 'dosen'     THEN d.foto
            ELSE NULL
        END AS foto
    FROM user u
    LEFT JOIN mhs   m ON u.role = 'mahasiswa' AND u.id_ref = m.id_mhs
    LEFT JOIN dosen d ON u.role = 'dosen'     AND u.id_ref = d.id_dosen
    WHERE u.username = ?
");
$stmt->bind_param('s', $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if (!$user || $password !== $user['password']) {
    echo json_encode(['status' => 'error', 'message' => 'Username atau password salah']);
    exit;
}

$_SESSION['id_user']  = $user['id_user'];
$_SESSION['username'] = $user['username'];
$_SESSION['role']     = $user['role'];
$_SESSION['id_ref']   = $user['id_ref'];
$_SESSION['nama']     = $user['nama_lengkap'];
$_SESSION['foto']     = $user['foto'];

echo json_encode([
    'status'  => 'success',
    'message' => 'Login berhasil',
    'data'    => [
        'role'   => $user['role'],
        'nama'   => $user['nama_lengkap'],
        'foto'   => $user['foto'],
        'id_ref' => $user['id_ref']
    ]
]);
