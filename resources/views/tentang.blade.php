<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            overflow-y: auto;
        }
        header {
            background-image: url('Group 70.png');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 150px 0;
            position: relative;
        }
        .logo {
            font-weight: bold;
            font-size: 30px;
            position: absolute;
            top: 60px;
            left: 80px;
        }
        nav {
            position: absolute;
            top: 65px;
            right: 100px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 14px;
        }
        .header-content {
            text-align: left;
            margin-left: 0;
            position: relative;
            left: 40px;
        }
        .header-content h2 {
            font-size: 60px;
            margin-left: 35px;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            header {
                padding: 100px 0;
            }
            .logo {
                font-size: 24px;
                top: 30px;
                left: 20px;
            }
            nav {
                top: 30px;
                right: 20px;
            }
            nav a {
                font-size: 14px;
                margin: 0 10px;
            }
            .header-content h2 {
                font-size: 40px;
                margin-left: 20px;
            }
        }

        @media (max-width: 576px) {
            header {
                padding: 80px 0;
            }
            .logo {
                font-size: 20px;
                top: 20px;
                left: 15px;
            }
            nav {
                top: 20px;
                right: 15px;
            }
            nav a {
                font-size: 12px;
                margin: 0 8px;
            }
            .header-content h2 {
                font-size: 32px;
                margin-left: 15px;
            }
        }

        .content {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 50px 15px;
            background-color: #f9f9f9;
        }
        .content .text-content {
            flex: 1;
        }
        .content .text-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .content .text-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #333;
        }
        .content .image-content {
            flex: 1;
            display: flex;
            gap: 10px;
        }
        .content .image-content img {
            width: 240px;
            height: auto;
            border-radius: 10px;
        }
        .section {
            padding: 50px 15px;
            background-color: #fff;
        }
        .section-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;        
        }
        .section-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .section-content p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }
        .images {
            display: flex;
            gap: 10px;
        }
        .images img {
            width: 200px;
            height: auto;
            border-radius: 10px;
        }

        /* Custom style for gambarBaru.jpg to avoid distortion */
        .gambar-baru {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        .footer {
          background-color: black;
            color: #fff;
            padding: 40px 20px;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
        }
        .footer-column {
            flex: 1;
            margin: 10px 20px;
            min-width: 200px;
        }
        .footer-column h3 {
            margin-bottom: 20px;
            font-size: 1.3em;
        }
        .footer-column p {
            margin-bottom: 20px;
        }
        .footer-column a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 10px;
        }
        .footer-column a:hover {
            text-decoration: underline;
        }
        .footer-social {
            display: flex;
            gap: 10px;
        }
        .footer-social a img {
            width: 20px; 
            height: 20px; 
        }
        .footer-social a {
            width: 30px;
            height: 30px;
            background-color: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #fff;
            margin-right: 30px;
        }
        .footer-social a:hover {
            background-color: #555;
        }
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
        }

    </style>
</head>
<body>

<header>
    <div class="logo">TASTY FOOD</div>
    <nav>
        <a href="/">HOME</a>
        <a href="/tentang">TENTANG</a>
        <a href="/berita">BERITA</a>
        <a href="/galeri">GALERI</a>
        <a href="/kontak">KONTAK</a>
    </nav>
    <div class="header-content">
        <h2>TENTANG KAMI</h2>
    </div>
</header>

<div class="content">
    <div class="text-content">
        <h2>TASTY FOOD</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
    </div>
    <div class="image-content">
        <img src="gambar19.jpg" alt="Food Image 1"> 
        <img src="gambar20.jpg" alt="Food Image 2">
    </div>
</div>

<div class="section">

    <div class="section-content">
        <div class="images">
            <img src="gambar21.jpg" alt="Visi Image 1"> 
            <img src="gambarBaru.jpg" alt="Visi Image 2" class="gambar-baru">
        </div>
        <div class="text-content">
            <h2>VISI</h2>
            <p id="visi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi. Nulla accumsan ullamcorper purus nec venenatis.</p>
        </div>
    </div>
    <div class="section-content">
        <div class="text-content">
            <h2>MISI</h2>
            <p id="misi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi. Nulla accumsan ullamcorper purus nec venenatis.</p>
        </div>
        <div class="images">
            <img src="gambar23.jpg" alt="Misi Image"> 
        </div>
    </div>
</div>

<footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Tasty Food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="footer-social">
                    <a href="#"><img src="facbook.png" alt="Facebook"></a>
                    <a href="#"><img src="twitter.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <a href="/">Home</a>
                <a href="/tentang">Tentang</a>
                <a href="/berita">Berita</a>
                <a href="/image">Galeri</a>
                <a href="/kontak">Kontak</a>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3>
                <p>Jl. Contoh Alamat No. 123<br>Bandung, Indonesia<br>Phone: (022) 1234567<br>Email: info@tastyfood.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Tasty Food. All rights reserved.
        </div>
    </footer>

</body>
</html>
