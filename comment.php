<?php
$conn = mysqli_connect("localhost", "root", "", "projectusm");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Database terkoneksi!";
}
?>

<?php
// Pastikan file ini terhubung dengan koneksi database yang telah dibuat pada langkah 2.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $submit = $_POST["submit"];

    // Lakukan validasi data di sini jika diperlukan.

    // Query untuk menyimpan data ke database.
    $query = "INSERT INTO komentar (nama, email, comment, submit) VALUES ('$nama', '$email', '$comment', '$date')";

    if (mysqli_query($conn, $query)) {
        echo "Komentar berhasil dikirim!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi setelah selesai.
    mysqli_close($conn);
}
?>

