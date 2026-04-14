<h3>Soal 3: Foreach - Daftar Hewan</h3>

<form method="POST">
    <p>Masukkan input nama hewan min 5 pake (,) setiap hewan:</p>
    <input type="text" name="daftar_hewan" placeholder="Contoh: Harimau, Singa, Gajah, Jerapah, Zebra" style="width: 80%; padding: 5px;" required>
    <button type="submit" name="proses_hewan">Tampilkan Hewan</button>
</form>

<hr>

<?php

if (isset($_POST['proses_hewan']) && !empty($_POST['daftar_hewan'])) {
    
    $input_user = $_POST['daftar_hewan'];
    
    $hewan_array = explode(",", $input_user);

    echo "<h4>Hasil Input User:</h4>";
    echo "<ul>";
    
    foreach ($hewan_array as $h) {
        $nama_hewan = trim($h);
        
        if ($nama_hewan !== "") {
            echo "<li>" . htmlspecialchars($nama_hewan) . "</li>";
        }
    }
    
    echo "</ul>";
    
    echo "<p>Total hewan yang dimasukkan: <b>" . count(array_filter(array_map('trim', $hewan_array))) . "</b></p>";

} else {
    echo "<p><i>Belum ada data yang dimasukkan. Silakan isi form di atas.</i></p>";
}
?>