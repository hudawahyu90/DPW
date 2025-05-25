<?php
session_start();
require_once 'config/database.php';

// Get active games
$db->query('SELECT * FROM games WHERE status = "active" ORDER BY name');
$games = $db->resultset();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Game</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1 class="fade-in">Daftar Game</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="riwayat.php">Riwayat</a>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                <a href="admin/index.php">Admin Panel</a>
            <?php endif; ?>
        </nav>
    </header>

    <div class="loading-container">Loading</div>

    <main>
        <div class="game">
            <h1>TOP UP GAME</h1>
            <ul class="game-list">
                <?php foreach ($games as $game): ?>
                <li>
                    <div class="card">
                        <a href="form-topup.php?game_id=<?php echo $game['id']; ?>">
                            <img src="<?php echo $game['image']; ?>" alt="<?php echo $game['name']; ?>">
                        </a>
                        <p><?php echo $game['name']; ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="container">
            <section class="features">
                <div class="feature-row">
                    <?php 
                    $count = 0;
                    foreach ($games as $game): 
                        if ($count % 2 == 0 && $count > 0): ?>
                </div>
                <div class="feature-row">
                        <?php endif; ?>
                    <div class="feature">
                        <div class="feature-icon-ml">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Mobile Legends Bang Bang</h3>
                            <p>Game MOBA (Multiplayer Online Battle Arena) yang populer di Indonesia
                                dan di seluruh dunia. Game ini dikembangkan dan diterbitkan oleh Moonton, 
                                dan menawarkan pengalaman bermain 5v5 secara real-time dengan berbagai hero dan strategi.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon-PUBG">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="feature-content">
                            <h3>PUBG Mobile</h3>
                            <p>Game battle royale online multipemain di mana hingga 100 pemain bertempur dalam pertandingan "last man standing". 
                                Pemain terjun payung ke sebuah pulau dan harus mencari senjata, perlengkapan, 
                                dan kendaraan untuk bertahan hidup sambil berusaha menjadi yang terakhir hidup.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-row">
                    <div class="feature">
                        <div class="feature-icon-ff">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Free Fire</h3>
                            <p>Game battle royale seru dan penuh aksi, di mana 50 pemain bertarung di satu pulau hingga hanya satu yang bertahan. 
                                Dengan durasi permainan yang singkat dan gameplay yang intens, 
                                Free Fire jadi pilihan favorit para gamer mobile. Cari senjata, taklukkan musuh, dan jadilah pemenang!.</p>
                        </div>
                    </div>
                    
                    <div class="feature">
                        <div class="feature-icon-genshin">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Genshin Impact</h3>
                            <p>Game aksi role-playing (RPG) dunia terbuka yang dikembangkan oleh HoYoverse (sebelumnya dikenal sebagai miHoYo). 
                                Dalam game ini, pemain mengendalikan karakter yang dapat dipertukarkan dalam sebuah tim, 
                                dan mereka bertualang di dunia Teyvat yang luas dan penuh dengan misteri.</p>
                        </div>
                    </div>
                </div>

                    <?php 
                    $count++;
                    endforeach; ?>                    </div>

                </div>
            </section>
        </div>
    </main>
    
    <footer>&copy; 2025 Top Up Game. All rights reserved.</footer>
    <script src="script.js"></script>
</body>
</html>