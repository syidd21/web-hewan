<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hewan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            padding: 20px;
            text-align: center;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-bottom: 5px solid #2980b9;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        main {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .animal-detail {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .animal-image {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .animal-info {
            flex: 1;
        }

        .animal-info h2 {
            margin-top: 0;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
            border-top: 5px solid #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Detail Hewan</h1>
    </header>

    <main>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Informasi hewan
            $hewan = [
                'kucing' => [
                    'nama' => 'Kucing',
                    'deskripsi' => 'Kucing adalah hewan peliharaan yang populer karena sifatnya yang mandiri dan suka bermain.',
                    'gambar' => 'kucing.jpg'
                ],
                'kelinci' => [
                    'nama' => 'Kelinci',
                    'deskripsi' => 'Kelinci dikenal karena bulunya yang lembut dan sifatnya yang ramah.',
                    'gambar' => 'kelinci.jpg'
                ],
                'burung' => [
                    'nama' => 'Burung',
                    'deskripsi' => 'Burung adalah hewan yang indah dengan kemampuan terbang dan bernyanyi.',
                    'gambar' => 'burung.jpg'
                ],
                'hamster' => [
                    'nama' => 'Hamster',
                    'deskripsi' => 'Hamster adalah hewan kecil yang lincah dan suka menggali.',
                    'gambar' => 'hamster.jpg'
                ]
            ];

            if (array_key_exists($id, $hewan)) {
                $detail = $hewan[$id];
                echo "<div class='animal-detail'>";
                echo "<img src='{$detail['gambar']}' alt='{$detail['nama']}' class='animal-image'>";
                echo "<div class='animal-info'>";
                echo "<h2>{$detail['nama']}</h2>";
                echo "<p>{$detail['deskripsi']}</p>";
                echo "</div>";
                echo "<a href='index.php' class='back-button'>Kembali</a>";
                echo "</main>";
                echo "<footer>";
                echo "<p>&copy; 2024 Informasi Hewan</p>";
                echo "</footer>";
                echo "</body>";
                echo "</html>";
            } else {
                echo "<p>Hewan tidak ditemukan.</p>";
                echo "<a href='index.php' class='back-button'>Kembali</a>";
            }
        } else {
            echo "<p>ID hewan tidak diberikan.</p>";
            echo "<a href='index.php' class='back-button'>Kembali</a>";
        }
        ?>
