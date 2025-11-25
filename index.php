<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólió</title>
    <link rel="icon" type="image/x-icon" href="/Images/logo-feher.png">

    <meta name="author" content="Majoros Áron">
    <meta name="description" content="Majoros Áron portfóliója: front end fejlesztő, UI/UX Designer, tapasztalatok, elérhetőségek, járművek">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="../Navbar, Footer/Navbar.css">
    <link rel="stylesheet" href="../Homepage/Homepage.css">
    <link rel="stylesheet" href="../Navbar, Footer/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>
     <nav>
        <ul>
            <a href="index.php" class="nav-item active">Főoldal</a>
            <a href="../Aboutme/Aboutme.html" class="nav-item">Rólam</a>
            <a href="../Contact/Contact.html" class="nav-item">Kapcsolat</a>
            <a href="../Vehicles/ford.html" class="nav-item">Autó</a>
            <a href="../Vehicles/yamaha.html" class="nav-item">Motor</a>
            <a href="../Gallery/Gallery.html" class="nav-item">Galléria</a>
            <a href="../Work/Work.html" class="nav-item">Munkáim</a>
            <a href="../Links/Links.html" class="nav-item">Hasznos linkek</a>
        </ul>
    </nav>
    <div class="homepage-container animate__animated animate__fadeInDown">
        <div class="koszones"><p>Szia! Üdvözöllek a weboldalamon!</p></div>
        <div class="leiras"><p>Majoros Áron vagyok, és ez az iskolai projekt weboldalam!</p></div>
        <div class="ora">
            <div class="ido" id="live-time"></div>
            <div class="datum" id="live-date"></div>
        </div>
        <div class="buttons-container">
            <div class="rolam-button-container">
                <div class="rolam">
                    <a href="../Aboutme/Aboutme.html">Rólam</a>
                </div>
            </div>
            <div class="linkek-button-container">
                <div class="linkek">
                    <a href="../Links/Links.html">Hasznos linkek</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="div-footer">
            <span class="footer-left">&copy; 2025 Minden jog fenntartva.</span>
            <span class="footer-right">Majoros Áron</span>
        </div>
    </footer>
    <script>
        function updateClock() {
            const now = new Date();
            const pad = n => n.toString().padStart(2, '0');
            document.getElementById('live-time').textContent =
                pad(now.getHours()) + ':' + pad(now.getMinutes()) + ':' + pad(now.getSeconds());
            document.getElementById('live-date').textContent =
                now.getFullYear() + '. ' + pad(now.getMonth()+1) + '. ' + pad(now.getDate()) + '.';
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>
</html>