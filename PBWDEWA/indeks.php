<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PBW</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .cover-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            width: 400px;
            border-top: 5px solid #007bff;
        }
        h1 {
            color: #333;
            margin-bottom: 5px;
        }
        h3 {
            color: #666;
            font-weight: normal;
            margin-bottom: 30px;
        }
        .info-table {
            width: 100%;
            margin-bottom: 30px;
            text-align: left;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .label {
            font-weight: bold;
            color: #555;
            width: 30%;
        }
        .btn-mulai {
            display: inline-block;
            padding: 12px 25px;
            background-color: blue;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-mulai:hover {
            background-color: black;
        }
    </style>
</head>
<body>

    <div class="cover-card">
        <h1>Tugas PBW</h1>
        <h3>Soal</h3>

        <table class="info-table">
            <tr>
                <td class="label">Nama</td>
                <td>: Dewa Putu Atma Dewantara</td>
            </tr>
            <tr>
                <td class="label">NPM</td>
                <td>: 2410631170134</td>
            </tr>
            <tr>
                <td class="label">Kelas</td>
                <td>: 4C</td>
            </tr>
        </table>

        <a href="menu.php" class="btn-mulai">Masuk ke Menu Soal</a>
    </div>

</body>
</html>