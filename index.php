<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Hewan</title>
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

        .menu-toggle {
            display: block;
            position: absolute;
            left: 20px;
            top: 20px;
            width: 30px;
            height: 30px;
            background-color: #fff;
            border-radius: 3px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .menu-toggle span {
            display: block;
            width: 100%;
            height: 5px;
            background-color: #3498db;
        }

        nav {
            position: absolute;
            top: 70px;
            left: 20px;
            display: none;
            background-color: white;
            border: 1px solid #3498db;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        nav ul li a:hover {
            color: #2980b9;
        }

        main {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .animal-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 20px auto;
        }

        .animal-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 250px;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .animal-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        }

        .animal-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .animal-info {
            padding: 15px;
        }

        .animal-info h3 {
            margin: 0 0 10px;
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
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h1>Informasi Hewan</h1>
        <nav id="menu">
            <ul>
                <li><a href="?page=hewan">Hewan</a></li>
                <li><a href="?page=about">About Me</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'hewan':
                        include('hewan.php');
                        break;
                    case 'about':
                        include('about.php');
                        break;
                    case 'contact':
                        include('contact.php');
                        break;
                    default:
                        echo "<h2>Halaman tidak ditemukan</h2>";
                }
            } else {
                echo "<h2>Selamat Datang di Informasi Hewan</h2>";
                echo "<p>Pilih Hewan yang ingin anda pelajari lebih lanjut ! Di button di pojok kiri atas lalu pencet hewan</p>";
                ?>
                <div class="animal-grid">
                    <div class="animal-card">
                        <img src="kucing.jpg" alt="Kucing" class="animal-image">
                        <div class="animal-info">
                            <h3>Kucing</h3>
                            <p>Kucing adalah hewan peliharaan yang populer karena sifatnya yang mandiri dan suka bermain.</p>
                        </div>
                    </div>

                    <div class="animal-card">
                        <img src="kelinci.jpg" alt="Kelinci" class="animal-image">
                        <div class="animal-info">
                            <h3>Kelinci</h3>
                            <p>Kelinci dikenal karena bulunya yang lembut dan sifatnya yang ramah.</p>
                        </div>
                    </div>

                    <div class="animal-card">
                        <img src="burung.jpg" alt="Burung" class="animal-image">
                        <div class="animal-info">
                            <h3>Burung</h3>
                            <p>Burung adalah hewan yang indah dengan kemampuan terbang dan bernyanyi.</p>
                        </div>
                    </div>

                    <!-- Tambahkan lebih banyak hewan di sini -->
                </div>
                <?php
            }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Informasi Hewan</p>
    </footer>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        }
    </script>
</body>
</html>
