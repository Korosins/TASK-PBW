<h3>Soal 2: For Loop - Bilangan Genap</h3>
<form method="POST">
    input number: 
    <input type="number" name="batas" placeholder="Contoh: 100" required>
    <button type="submit">Proses</button>
</form>

<?php
if (isset($_POST['batas'])) {
    $limit = $_POST['batas'];
    $jumlah_genap = 0;

    echo "<p>Deret bilangan genap:</p>";
    echo "<div style='word-wrap: break-word; background: #f9f9f9; padding: 10px; border: 1px solid #ccc;'>";
    
    for ($i = 0; $i <= $limit; $i += 2) {
        echo $i . " ";
        $jumlah_genap++;
    }
    
    echo "</div>";
    echo "<p>Total ada <b>$jumlah_genap</b> bilangan genap ditemukan antara 0 sampai $limit.</p>";
}
?>