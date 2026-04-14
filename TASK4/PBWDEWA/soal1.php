<h3>Soal 1: Switch Case - Jenis Kendaraan</h3>
<form method="POST">
    Masukkan Jumlah Roda: <input type="number" name="roda" required>
    <button type="submit">Cek Kendaraan</button>
</form>

<?php
if (isset($_POST['roda'])) {
    $jumlah_roda = $_POST['roda'];
    echo "<p>Hasil untuk <b>$jumlah_roda</b> roda: ";
    
    switch ($jumlah_roda) {
        case 2: echo "Sepeda Motor"; break;
        case 3: echo "Becak"; break;
        case 4: echo "Mobil"; break;
        case 6: echo "Truk/Bus"; break;
        default: echo "Jenis kendaraan tidak dikenal"; break;
    }
    echo "</p>";
}
?>