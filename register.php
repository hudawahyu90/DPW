<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Top Up Game - Beranda</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <h1 class="fade-in">Top Up Game</h1>
      <nav></nav>
      
    </header>
<div class="container">
        <div class="form-container">
            <!-- <div class="left-container">
                <div class="left-inner-container">
                    <h1>Welcome Back</h1>
                    <p>To keep connected with us please login with your personal information</p>
                    <div class="illustration">
                        <img src="https://placeholder.svg?height=200&width=200" alt="Login Illustration">
                    </div>
                </div>
            </div> -->
            <div class="right-container">
                <div class="right-inner-container">
                    <h2>Register account</h2>
                    
                    <!-- <div class="social-login">
                        <button class="social-btn google">
                            <i class="fab fa-google"></i>
                            <span>Google</span>
                        </button>
                        <button class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </button>
                        <button class="social-btn twitter">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </button>
                    </div> -->
                    
                    <!-- <div class="divider">
                        <span>or</span>
                    </div>
                     -->
                    <form action="akundibuat.html" method="get">
                        <div class="input-group">
                            <div class="input-field">
                                <input type="text" name="nama" id="nama" required>
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="input-field">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email Address</label>
                                <i class="fas fa-envelope"></i>
                            </div>
                            
                            <div class="input-field">
                                <input type="password" id="password" name="password" required>
                                <label for="password">Password</label>
                                <i class="fas fa-lock"></i>
                                <i class="fas fa-eye-slash toggle-password"></i>
                            </div>
                            <div class="input-field">
                                <input type="password" name="ulangi" id="ulangi" required>
                                <label for="ulangi">Ulang Password</label>
                                <i class="fas fa-lock"></i>
                                <i class="fas fa-eye-slash toggle-password"></i>
                            </div>
                            
                            
                        </div>
                        
                        <button type="submit" class="login-btn">
                            <span>Register</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>

                    </form>
                    
                    <div class="register-link">
                        <p>Do have an account? <a href="index.php">Login Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>&copy; 2025 Top Up Game. All rights reserved.</footer>

    <script src="script.js"></script>
  </body>
</html>
