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
            <a href="index.php">Home</a>
            <hr>
          </div>
        </li>
      </ul>

      <div class="logo">
      <h2>Warkop <span style="color: green;">Yor</span></h2>
      </div>
    </nav>
  </header>

    <section class="detail">
        <div class="detailproduct">
          <div class="detailproductimg">
            <img src="./images/americano.jfif" alt="">
          </div>
          <div class="hero3content">
            <h2>Americano (10K/15K/20K)</h2>
            <p>Americano tersedia dengan berbagai macam pilihan biji kopi. Di harga 10K kami menggunakan biji kopi Lampung, lalu di harga 15K kami menggunakan biji kopi Toraja, dan di harga 20K kami menggunakan biji kopi luak.</p>
            <a href="#"> Pesan Sekarang</a>
          </div>
        </div>
    </section>

    <section class="comment">
        <div class="bottom">
            <h1>Ulasan</h1>
            <form action="" method="POST">
                <input type="text" placeholder="Nama Anda" name="name">
                <textarea name="pesan" id="" cols="30" rows="10" style="resize: none;" placeholder="Ulasan Anda Tentang Menu ini"></textarea>
                <input type="submit" value="kirim" name="submit"> 
            </form>
        </div>
    </section>
    <h1>Comments : </h1>
    <?php
                if(isset($_POST['submit'])){
                    if(isset($_POST['name'])){
                        $name = $_POST['name'];
                        echo "<p>Nama : $name</p>";
                    }else{
                        $name  = "";
                    }

                    if(isset($_POST['pesan'])){
                        $pesan = $_POST['pesan'];
                        echo "<p>Pesan : $pesan</p>";
                    }else{
                        $name  = "";
                    }
                }
                ?>
    <script src="main.js"></script>
</body>
</html>