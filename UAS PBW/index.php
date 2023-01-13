<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/62c817d797.js" crossorigin="anonymous"></script>
    <title>Warkop Yor</title>
</head>
<body>
  <header>
    <nav>
      <ul class="list-menu">
        <li class="dropdown-shop" onclick="hamburgerMenu()">
        <i class="fa-solid fa-bars-staggered"></i>
          <div class="dropdown-content-menu">
            <pre>            x</pre>
            <a href="#menu">Menu</a>
            <hr>
            <a href="#alamat">Alamat</a>
            <hr>
            <a href="#tentangkami">Tentang Kami</a>
            <hr>
          </div>
        </li>
      </ul>

      <div class="logo">
        <a href="index.php"><h2>Warkop <span style="color: green;">Yor</span></h2></a>
          <!-- <h2>Warkop Yor</h2> -->
      </div>
    </nav>
  </header>
    

    <section class="hero1">
        <div>
            <h1>SELAMAT DATANG DI WEBSITE WARKOP <span style="color: green;">YOR</span></h1>
            <P>Disini anda bisa memesan berbagai macam varian kopi. Tidak seperti warung kopi lain, Warkop Yor memiliki kopi dengan citarasa yang berkelas namun harga seperti kelas patas. </P>
            <a href="#menu">Lihat Menu Kami</a>
        </div>
            <img src="./images/warkopyor.jfif" alt="">
    </section>

    <section class="hero2" id="menu">
        <h1>MENU</h1>
        <div class="row1">
            <div class="column">
              <div class="card">
                <img src="./images/cappucino.jfif" alt="">
                <h2>Cappuccino</h2>
                <p>25K</p>
                <p>Hot</p>
                <button><a href="detail-product Cappuccino.php">Lihat Product</a></button>
              </div>
            </div>

            <div class="column">
                <div class="card">
                  <img src="./images/caramel.jpg" alt="">
                  <h2>Caramel Machiato</h2>
                  <p>30K</p>
                  <p>Ice/Hot</p>
                  <button><a href="detail-product Caramel Machiato.php">Lihat Product</a></button>
                </div>
            </div>

            <div class="column">
                <div class="card">
                  <img src="./images/machiato.jfif" alt="">
                  <h2>Caramel Latte</h2>
                  <p>25K</p>
                  <p>Ice/Hot</p>
                  <button><a href="detail-product Caramel Latte.php">Lihat Product</a></button>
                </div>
            </div>    
        </div>

        <div class="row1">
            <div class="column">
              <div class="card">
                <img src="./images/kopsu gula aren.jpg" alt="">
                <h2>Kopi susu Gula Aren</h2>
                <p>18K</p>
                <p>Ice/Hot</p>
                <button><a href="detail-product Kopi susu Gula Aren.php">Lihat Product</a></button>
              </div>
            </div>

            <div class="column">
                <div class="card">
                  <img src="./images/kopsu.jfif" alt="">
                  <h2>Kopi susu Original</h2>
                  <p>15K</p>
                  <p>Ice/Hot</p>
                  <button><a href="detail-product Kopi susu Original.php">Lihat Product</a></button>
                </div>
            </div>

            <div class="column">
                <div class="card">
                  <img src="./images/redvalvet.jfif" alt="">
                  <h2>Red Valvet coffee</h2>
                  <p>30K</p>
                  <p>Ice/Hot</p>
                  <button><a href="detail-product Red Valvet Coffee.php">Lihat Product</a></button>
                </div>
            </div>
                  
        </div>

        <div class="row1">
            <div class="column">
              <div class="card">
                <img src="./images/americano.jfif" alt="">
                <h2>Americano</h2>
                <p>10K/15K/20K</p>
                <p>Ice/Hot</p>
                <button><a href="detail-product Americano.php">Lihat Product</a></button>
              </div>
            </div>

            <div class="column">
                <div class="card">
                  <img src="./images/caffelatte.jpg" alt="">
                  <h2>Caffee Latte</h2>
                  <p>20K</p>
                  <p>Ice/Hot</p>
                  <button><a href="detail-product Caffee Latte.php">Lihat Product</a></button>
                </div>
            </div>

            <div class="column">
                <div class="card">
                  <img src="./images/matcha.jfif" alt="">
                  <h2>Matcha Coffee</h2>
                  <p>30K</p>
                  <p>Ice/Hot</p>
                  <button><a href="detail-product Matcha Coffee.php">Lihat Product</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="alamat" id="alamat">
        <h1>ALAMAT dan CONTACT</h1>
        <div class="hero3">
          <div class="hero3img">
            <img src="./images/maps.png" alt="">
          </div>
          <div class="hero3content">
            <h2>Temukan Kami Disini</h2>
            <p>Atau anda bisa menghubingi kami melalui link dibawah ini</p>
            <a href="https://wasap.at/xVAzmM"> CHAT KAMI</a>
          </div>
        </div>
    </section>

    <section class="tentangkami" id="tentangkami">
      <h1>Terimakasih Telah Mengunjungi Website kami</h1>
        <p>Untuk lebih detailnya, anda bisa mengunjungi social media kami. Terimakasihh...</p>
        <p>our social media</p>
        <div class="tentangkamisig">
          <img src="./images/instagram.png" alt="">
          <p>@rayhanbw_</p>

          <div class="tiktok">
            <img src="./images/tiktok.png" alt="">
            <p>@whosebudy</p>
          </div>
        </div>
    </section>

  <script src="main.js"></script>
</body>
</html>