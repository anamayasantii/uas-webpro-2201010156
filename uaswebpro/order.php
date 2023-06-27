<?php
date_default_timezone_set('Asia/Makassar');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soogar Holic</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/95319c6af2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="order">
    <header>
        <div class="main-header">
            <img class="header-img" src="assets/logo.png" alt="">
            <h3 class="header-info">Soogar Holic</h3>
            <nav>
                <a href="index.html"><i class="fas fa-home icon"></i>Home</a>
                <a href="aboutus.html"><i class="fas fa-door-open"></i>About Us</a>
                <a href="order.html"><i class="fas fa-shopping-cart"></i></a>
            </nav>
          </div>
    </header>
    <main>
        <div>
            <img class="order-img" src="assets/logo.png" alt="">
            <h2 class="order-here">Order Here, Bestie!</h2>

        <form action="proses.php" autocomplete="off" method="POST">
            <div class="label">
                <div class="label-number">
                    <label for="text">Table Number</label> <br>
                        <input type="text" id="text" autocomplete="off" name="nomor">
                </div>
                <div class="label-name">
                    <label for="text">Name</label> <br>
                        <input type="text" id="text" autocomplete="off" name="nama">
                    </div>
                    <div class="textarea-container">
                        <div class="form-textarea">
                            <textarea class="textarea" type="text"
                            name="pesanan" id="message" cols="52"
                            rows="8" placeholder="ex: 1x Vanilla Ice Blended">
                        </textarea>
                        <label for="message" class="form-label">
                            Order
                        </label>
                        </div>
                    </div>
            </div>
            <br>
            <button class="owder" type="submit" name="submit" value= <?php echo date("h:i:sa"); ?>>Order</button>
        </form>
        </div>
    </main>
    <footer>
        <div class="main-footer">
            <div class="social-media">
              <i class="fab fa-instagram-square"></i>
              <i class="fab fa-twitter-square"></i>
              <i class="fab fa-facebook-square"></i>
              <i class="fas fa-envelope"></i>
            </div>
            <p class="info-center">
              Copyright &copy; 2023. Soogar Holic. All right reserved
            </p>
          </div>
    </footer>
</body>
</html>