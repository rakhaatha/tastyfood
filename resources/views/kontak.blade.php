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
            font-size: 16px;
        }
        .header-content {
            text-align: left;
            margin: 0 20px;
            position: relative;
        }
        .header-content h2 {
            font-size: 60px;
            margin-left: 35px;
        }
        .content {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 50px 15px;
            background-color: #f9f9f9;
        }
        .contact-container {
            width: 80%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .contact-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .contact-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .form-group {
            flex: 1 1 45%;
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        .form-group textarea {
            flex: 1 1 100%;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        .submit-button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: black;
            color: white;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .submit-button:hover {
            background-color: #333;
        }
        .contact-info {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .contact-item {
            flex: 1;
            margin: 10px;
        }
        .contact-item h4 {
            margin-top: 10px;
            margin-bottom: 5px;
            color: #333;
        }
        .contact-item p {
            color: #555;
        }
        .icon-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .map-container {
            width: 100%;
            height: 400px;
            margin-top: 30px;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* CSS for Footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 50px 0;
            text-align: center;
            font-size: 14px;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin: 20px;
        }

        .footer-column h3 {
            margin-bottom: 20px;
            font-size: 18px;
            text-transform: uppercase;
            color: #ffffff;
        }

        .footer-column p,
        .footer-column a {
            color: #cccccc;
            margin-bottom: 10px;
            text-decoration: none;
            display: block;
        }

        .footer-column a:hover {
            color: #ffffff;
        }

        .footer-social {
            margin-top: 20px;
        }

        .footer-social a {
            margin: 0 10px;
            display: inline-block;
        }

        .footer-social img {
            width: 30px;
            height: 30px;
        }

        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #555;
            padding-top: 20px;
            color: #cccccc;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            header {
                padding: 100px 0;
            }
            .header-content h2 {
                font-size: 40px;
            }
            nav {
                top: 40px;
                right: 40px;
            }
            .logo {
                top: 40px;
                left: 40px;
                font-size: 24px;
            }
            nav a {
                font-size: 14px;
                margin: 0 10px;
            }
        }

        @media (max-width: 576px) {
            header {
                padding: 80px 0;
            }
            .header-content h2 {
                font-size: 32px;
            }
            nav {
                top: 20px;
                right: 20px;
            }
            .logo {
                top: 20px;
                left: 20px;
                font-size: 20px;
            }
            nav a {
                font-size: 12px;
                margin: 0 5px;
            }
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
        <h2>KONTAK KAMI</h2>
    </div>
</header>

<div class="contact-container">
    <h2>KONTAK KAMI</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <input type="text" placeholder="Subject" name="subject" required>
            <input type="text" placeholder="Name" name="name" required>
            <input type="email" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <textarea placeholder="Message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="submit-button">KIRIM</button>
    </form>
    <div class="contact-info">
        <div class="contact-item">
            <img src="email.png" alt="Email Icon" class="icon-image">
            <h4>EMAIL</h4>
            <p>tastyfood@gmail.com</p>
        </div>
        <div class="contact-item">
            <img src="telephone.png" alt="Phone Icon" class="icon-image">
            <h4>PHONE</h4>
            <p>+62 812 3456 7890</p>
        </div>
        <div class="contact-item">
            <img src="lokasi.png" alt="Location Icon" class="icon-image">
            <h4>LOCATION</h4>
            <p>Kota Bandung, Jawa Barat</p>
        </div>
    </div>
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63352.39428224966!2d107.57968116405146!3d-6.903444409755485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64b0ec7b2b7%3A0xb416338b327a8b67!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1664567891234!5m2!1sen!2sus"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<div class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>TENTANG KAMI</h3>
            <p>Info tentang restoran kami dan kisah kami.</p>
        </div>
        <div class="footer-column">
            <h3>MENU</h3>
            <a href="#">Makanan</a>
            <a href="#">Minuman</a>
            <a href="#">Camilan</a>
        </div>
        <div class="footer-column">
            <h3>KONTAK</h3>
            <p>Email: tastyfood@gmail.com</p>
            <p>Phone: +62 812 3456 7890</p>
        </div>
    </div>
    <div class="footer-social">
        <a href="#"><img src="facbook.png" alt="Facebook"></a>
        <a href="#"><img src="twitter.png" alt="Instagram"></a>
    <div class="footer-bottom">
        <p>&copy; 2024 TASTY FOOD. All Rights Reserved.</p>
    </div>
</div>

</body>
</html>
