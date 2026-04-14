<h3>Soal 4: Ternary Operator - Genap atau Ganjil</h3>
<form method="POST">
    Masukkan Angka: <input type="number" name="angka_cek" required>
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['angka_cek'])) {
    $angka = $_POST['angka_cek'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "<p>Angka $angka adalah bilangan <b>$hasil</b>.</p>";
}
?>