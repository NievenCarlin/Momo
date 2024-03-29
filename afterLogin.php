<?php
require "config/function.php";
// require "config/security.php";
$produk = query("SELECT * FROM tbmenu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <title>MOMO</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="Website icon" type="png" href="assets/Group 6.png" />
</head>

<body>
    <script src="script.js"></script>
    <header>
        <nav>
            <div class="logodepan">
                <img src="assets/logo.png" alt="" />
            </div>

            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#order">Order</a></li>
                <li><a href="#product">Product</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <button onclick="logout()" id="nav-logout">Logout</button>
            <script>
                function logout() {
                    alert("You Want to Logout?");
                    location.href = "logout.php";
                }
            </script>

            <div class="burger">
                <span class="material-symbols-outlined"> menu </span>
            </div>
        </nav>
    </header>

    <main>
        <div class="landing" id="home">
            <h1>WELCOME TO MOMO</h1>
            <h3>OPEN FOR DELIVERY AND PICKUP</h3>
        </div>

        <div class="about" id="about">
            <h1>ABOUT</h1>
            <div class="container">
                <div class="isikonten">
                    <strong>Kenapa Harus Momo?</strong>
                    Karena Momo menyediakan ayam geprek dengan kualitas tinggi, yang
                    murah, dan juga higienis. Geprek Momo mengutamakan kenyamanan dan
                    kepuasan pelanggan.
                    <br />
                    <br />
                    Geprek Momo menyajikan masakan khas Indonesia dengan sentuhan
                    citarasa asia yang terbuat dari daging ayam yang digoreng krispi dan
                    dicampur dengan bumbu geprek yang pedas.
                    <br />
                </div>

                <div class="gambar">
                    <img src="assets/image2.png" alt="" />
                </div>
            </div>
        </div>

        <div class="order" id="order">
            <h1>WAY TO ORDER</h1>
            <br />
            <div class="order-container">
                <div>
                    <a href="https://gofood.co.id/pontianak/restaurant/ayam-geprek-momo-sungai-raya-46f3fe03-cc8c-480b-8f56-5d73a2e56037" target="_blank">
                        <img src="assets/gojek.png" alt="" />
                        <p class="judul">Gojek</p>
                    </a>
                </div>
                <div>
                    <a href="https://wa.me/+6281351555523" target="_blank">
                        <img src="assets/wa.png" alt="" />
                        <p class="judul">Whatsapp</p>
                    </a>
                </div>
                <div>
                    <a href="#maps">
                        <img src="assets/toko.png" alt="" />
                        <p class="judul">Location</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu" id="product">
            <h1>PRODUCT</h1>
            <div class="menu-container">
                <?php $i = 1; ?>
                <?php foreach ($produk as $row) : ?>
                    <div class="item">
                        <p class="menu-id"><?php echo $i; ?></p>
                        <img src="assets/img/<?php echo $row["gambar"]; ?>" width="300" alt="">
                        <h4><?php echo $row["nama"]; ?></h4>
                        <p><?php echo $row["harga"]; ?></p>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="gallery" id="gallery">
            <h1>Gallery</h1>

            <div class="isiGallery">
                <div class="kolom">
                    <img src="assets/gallery3.png" alt="gallery3" />
                    <img src="assets/gallery4.png" alt="gallery4" />
                </div>

                <div class="kolom">
                    <img src="assets/gallery5.png" alt="gallery5" />
                    <img src="assets/gallery1.png" alt="gallery1" />
                    <img src="assets/gallery6.png" alt="gallery6" />
                </div>

                <div class="kolom">
                    <img src="assets/gallery2.png" alt="gallery2" />
                    <img src="assets/gallery7.png" alt="gallery7" />
                </div>
            </div>
        </div>

        <div class="map" id="maps">
            <h1>OUR LOCATION</h1>
            <div class="maps-container">
                <div class="lokasi1">
                    <p id="cabang1">Cabang 1</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8150305734725!2d109.36445241413519!3d-0.07357729994631336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5a033e086e33%3A0xd3399c33e4132679!2sAyam%20Geprek%20Momo!5e0!3m2!1sid!2sid!4v1679211833097!5m2!1sid!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps1">
                    </iframe>
                </div>

                <div class="lokasi2">
                    <p id="cabang2">Cabang 2</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.81762766071!2d109.34139121475333!3d-0.03376199997536341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d596d4221c917%3A0xe3c747a8b3fe3feb!2sAyam%20Geprek%20Momo%20Ketapang!5e0!3m2!1sid!2sid!4v1679581998806!5m2!1sid!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps2"></iframe>
                </div>
            </div>
        </div>
    </main>

    <footer class="foot" id="contact">
        <div class="part1">
            <h2>MOMO</h2>
            <br />
            <p>Hubungi kami</p>
            <p>Tentang kami</p>
            <p>Layanan</p>
        </div>

        <div class="part2">
            <h2>Address</h2>
            <br />
            <p>Cabang 1</p>
            <br />
            <p>
                Jl.822 No.91, Sungai Raya, Kec, Sungai Raya, Kabupaten Kubu Raya,
                Kalimantan Barat
            </p>
            <p>Cabang 2</p>
            <p>
                Jl. Ketapang No.86d, Benua Melayu Darat, Kec. Pontianak Sel, Kota
                Pontianak, Kalimantan Barat 78122
            </p>
        </div>

        <div class="part3">
            <h2>Follow Us</h2>
            <br />
            <a href="https://www.instagram.com/ayamgeprekmomo/">
                <img src="assets/ig.png" alt="" />
            </a>
            <a href="https://www.facebook.com/profile.php?id=425967918230636&paipv=0&eav=AfY0U3Uewl-j6sPhZTGc2iTLnG10Sxvl7u9ibKWVKIN9dumT2e_WXBKrRdQZIq3o3sw&_rdr">
                <img src="assets/facebook.png" alt="" />
            </a>
        </div>

        <div class="part4">
            <h2>Opening Hours</h2>
            <br />
            <p>Monday - Sunday</p>
            <p>09.00 AM - 21.00 PM</p>
        </div>
    </footer>

    <script src="momo.js"></script>
</body>

</html>
