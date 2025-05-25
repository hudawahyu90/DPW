<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ulasan & Rating</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
      <h1 class="fade-in">Top Up Game</h1>
      <nav><a href="index.html">Beranda</a>
        <a href="daftar-game.html">Daftar Game
        <a href="riwayat.html">Riwayat</a>
    </nav>
    </header>
  <div class="kolom">
    <h1>Ulasan & Rating</h1>

    <form id="review-form" class="review-form" onsubmit="return false;">
      <label>Berikan Rating:</label>
      <div class="rating-stars" id="rating-stars">
        <span class="star" data-value="1">&#9733;</span>
        <span class="star" data-value="2">&#9733;</span>
        <span class="star" data-value="3">&#9733;</span>
        <span class="star" data-value="4">&#9733;</span>
        <span class="star" data-value="5">&#9733;</span>
      </div>

      <label for="review-text">Ulasan Anda:</label>
      <textarea id="review-text" placeholder="Tulis ulasan Anda..." required></textarea>

      <button type="submit">Kirim Ulasan</button>
    </form>

    <section id="reviews-list" class="reviews-list">
      <h2>Ulasan Pengguna</h2>

      <!-- Ulasan contoh -->
      <div class="review-item">
        <div class="stars">★★★★★</div>
        <p class="review-text">Game ini sangat seru dan grafisnya keren!</p>
      </div>
      <div class="review-item">
        <div class="stars">★★★☆☆</div>
        <p class="review-text">Seru, tapi ada sedikit lag kadang-kadang.</p>
      </div>
    </section>
  </div>

  <script src="script.js"></script>
  <footer>&copy; 2025 Top Up Game. All rights reserved.</footer>
</body>
</html>
