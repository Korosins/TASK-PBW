<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .menu { margin-bottom: 20px; padding: 10px; background-color: #f0f0f0; border-radius: 5px; }
        .menu a { margin-right: 15px; text-decoration: none; color: #333; font-weight: bold; }
        .menu a:hover { color: #007bff; }
        .content { padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
    </style>
</head>
<body>

    <div class="menu">
        <h2>Menu Soal:</h2>
        <a href="?halaman=soal1">Soal 1</a>
        <a href="?halaman=soal2">Soal 2</a>
        <a href="?halaman=soal3">Soal 3</a>
        <a href="?halaman=soal4">Soal 4</a>
    </div>

    <div class="content">
        <?php
        // Menggunakan include untuk navigasi multi-halaman
        if (isset($_GET['halaman'])) {
            $halaman = $_GET['halaman'];
            
            switch ($halaman) {
                case 'soal1':
                    include 'soal1.php';
                    break;
                case 'soal2':
                    include 'soal2.php';
                    break;
                case 'soal3':
                    include 'soal3.php';
                    break;
                case 'soal4':
                    include 'soal4.php';
                    break;
                default:
                    echo "<h3>Halaman tidak ditemukan!</h3>";
                    break;
            }
        } else {
            echo "<h3>Selamat Datang!</h3>";
            echo "<p>Silakan klik menu di atas untuk melihat jawaban soal.</p>";
        }
        ?>
    </div>

</body>
</html>