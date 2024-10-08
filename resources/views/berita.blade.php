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
        .main-content {
            padding: 50px 15px;
            background-color: #f9f9f9;
        }
        .main-article {
            display: flex;
            align-items: center;
            gap: 20px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .main-article img {
            width: 240px;
            height: auto;
            border-radius: 10px;
        }
        .main-article-content {
            flex: 1;
        }
        .main-article-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .main-article-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #333;
        }
       
        .more-news {
            padding: 30px 0;
            background-color: white;
            text-align: center;
        }

        .more-news h2 {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: left;
            padding-left: 20px;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 20px;
            padding: 0 20px;
            max-width: 1200px;
            margin: 0 auto; 
        }

        .news-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            width: 100%; 
            height: 350px; 
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-card-content {
            padding: 15px;
            text-align: left;
        }

        .news-card-content h3 {
            font-size: 16px;
            margin-bottom: 6px;
        }

        .news-card-content p {
            font-size: 12px;
            color: #555;
            margin-bottom: 10px;
        }

        .news-card-content .read-more {
            font-size: 12px;
            color: #FFC107;
            text-decoration: none;
            font-weight: bold;
        }

        .news-card-content .read-more:hover {
            text-decoration: underline;
            color: #FFA000;
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
        <a href="/image">GALERI</a>
        <a href="/kontak">KONTAK</a>
    </nav>
    <div class="header-content">
        <h2>BERITA KAMI</h2>
    </div>
</header>
<div class="main-content">
    <div class="main-article">
        <img src="gambar24.jpg" alt="Salad">
        <div class="main-article-content">
            <h2>APA SAJA MAKANAN KHAS NUSANTARA?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
            <a href="#" class="btn-read-more">BACA SELENGKAPNYA</a>
        </div>
    </div>
    <section class="more-news">
    <h2>Berita Lainnya</h2>
    <div class="news-grid">
    @foreach($news as $new)
    <div class="news-card">
        <img src="{{ asset('news-images/' . $new->image) }}" alt="{{ $new->title }}">
        <div class="news-card-content">
            <h3>{{ $new->title }}</h3>
            <p>{{ Str::limit($new->content, 100) }}</p>
            <a href="{{ route('berita.show', $new->id) }}" class="read-more">Baca Selengkapnya</a>
        </div>
    </div>
@endforeach
    </div>
</section>
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
                <h3>Useful Links</h3>
                <a href="#">Blog</a>
                <a href="#">Hewan</a>
                <a href="#">Galeri</a>
                <a href="#">Testimonial</a>
            </div>
            <div class="footer-column">
                <h3>Privacy</h3>
                <a href="#">Karir</a>
                <a href="#">Tentang Kami</a>
                <a href="#">Kontak Kami</a>
                <a href="#">Servis</a>
            </div>
            <div class="footer-column">
                <h3>Contact Info</h3>
                <p><a href="mailto:tastyfood@gmail.com">tastyfood@gmail.com</a></p>
                <p><a href="tel:+6281234567890">+62 812 3456 7890</a></p>
                <p>Kota Bandung, Jawa Barat</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright ©2023 All rights reserved</p>
        </div>
    </footer>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>