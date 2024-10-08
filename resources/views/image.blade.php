<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri kami</title>
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
        .gallery-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 0;
            background-color: #f9f9f9;
        }
        .gallery-item {
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
            width: 300%; 
            max-width: 1200px; 
            height: 450px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            position: relative;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }
        .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .controls button {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            cursor: pointer;
            font-size: 24px;
            padding: 10px;
            margin: 0 10px;
            border-radius: 50%;
        }
        .indicator {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }
        .indicator div {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: #ddd;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .indicator .active {
            background-color: #333;
        }
        .gallery-container2 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 5px; /* Mengurangi jarak antar gambar */
            padding: 80px;
            justify-items: center;
        }
        .gallery-item2 {
            width: 100%;
            aspect-ratio: 1;
            max-width: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 0px;
        }
        .gallery-item2 img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image covers the container without distortion */
            display: block;
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
        <h2>GALERI KAMI</h2>
    </div>
</header>

<div class="gallery-container">
    <div class="gallery-item">
        <img id="galleryImage" src="https://via.placeholder.com/600x400" alt="Gallery Image"> <!-- Placeholder image -->
        <div class="controls">
            <button id="prev">&lt;</button>
            <button id="next">&gt;</button>
        </div>
        <div class="indicator" id="indicator">
            <!-- Pastikan jumlah div sesuai dengan jumlah gambar -->
            <div class="active"></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="gallery-container2">
    @foreach($galeris as $galeri)
        <div class="gallery-item2">
            <img src="{{ asset('images/'.$galeri->image) }}" alt="Gallery Image">
        </div>
    @endforeach
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
  

<script>
    
    const images = [
        'gambar16.jpg',
        'gambar14.jpg', 
        'gambar17.jpg'  
    ];
    let currentIndex = 0;

    const galleryImage = document.getElementById('galleryImage');
    const indicators = document.querySelectorAll('.indicator div');

    function showImage(index) {
        galleryImage.src = images[index];
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
        showImage(currentIndex);
    });

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
        showImage(currentIndex);
    });

    indicators.forEach((indicator, i) => {
        indicator.addEventListener('click', () => {
            currentIndex = i;
            showImage(currentIndex);
        });
    });

    showImage(currentIndex);
</script>

</body>
</html>
