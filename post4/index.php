<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" id="theme-style">
    <title>Eyelash.Beauty</title>
    <style>
        /* Reset CSS */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Styling Header */
header {
    background-color: #f0afd6;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

header h1 {
    font-size: 36px;
}

/* Styling Navbar */
nav {
    background-color: #a87292;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

nav ul {
    list-style: none;
}

nav li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

/* Styling Main Content */
main {
    margin: 20px;
    color: #c72084;
}

/* Styling Produk */
.produk {
    text-align: center;
}

.produk h2 {
    font-size: 24px;
}

.produk-item {
    display: inline-block;
    margin: 20px;
    text-align: center;
}

.produk-item img {
    width: 200px;
    height: 200px;
    border: 1px solid #e791b5;
    border-radius: 10px;
}

.produk-item h3 {
    font-size: 18px;
    margin-top: 10px;
}

.produk-item p {
    font-size: 16px;
    color: #cbc791;
    margin-top: 5px;
}

button {
    background-color: #e2d8d8;
    color: #695858;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    margin-top: 10px;
}

/* Styling Kontak */
.kontak {
    background-color: #f6cdeb;
    padding: 20px;
    text-align: center;
}

.kontak h2 {
    font-size: 24px;
}

/* Styling Footer */
footer {
    background-color: #f0afd6;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

/* Tema Light Mode */
body.light-mode {
    background-color: #ffffff;
    color: #333333;
}

/* Tema Dark Mode */
body.dark-mode {
    background-color: #333333;
    color: #ffffff;
}

/* Styling Form */
.form-container {
    background-color: #f6cdeb;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    max-width: 400px;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #e791b5;
    border-radius: 5px;
}

button {
    background-color: #e2d8d8;
    color: #695858;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
}

#hasil-pendaftaran {
    margin-top: 20px;
    font-weight: bold;
    color: #c72084;
}

    </style>
</head>

<body>
    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Process form data as needed
        // For example, store it in a database or send it via email
    }
    ?>

    <header>
        <h1>Eyelash.Beauty</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#" onclick="loadAboutEyelash()">Tentang Saya</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#" onclick="loadContact()">Kontak</a></li>
        </ul>
    </nav>

    <main>
        <section class="beranda">
                <h2>Selamat Datang di Eyelash.Beauty</h2>
        </section>
        

        <section class="tentang" id="tentang-saya">
        </section>

        <section class="produk">
            <h2>Type Eyelash</h2>
            <div class="produk-item">
                <img src="type classic.jpeg" alt="Classic">
                <h3>Eyelash Type Classic</h3>
                <p>Harga: 100.000</p>
                <button>Booking Now</button>
            </div>
            <div class="produk-item">
                <img src="type volume.jpeg" alt="Volume">
                <h3>Eyelash Type Volume</h3>
                <p>Harga: 150.000</p>
                <button>Booking Now</button>
            </div>
        </section>
        

        <section class="kontak" id="kontak">
        </section>
    </main>

        <button id="theme-toggle">Ganti Mode</button>
    </main>

    <main>
        <section class="form-container">
            <h2>Formulir Pendaftaran</h2>
            <form id="registration-form">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda" required>
                </div>
                <button type="submit">Daftar</button>
            </form>
            <div id="hasil-pendaftaran"></div>
        </section>
    </main>    

    <footer> 
        <p>&copy; 2022 Eyelash.Beauty </p>
    </footer>

    <script>
        function loadAboutEyelash() {
            const tentangEyelashSection = document.querySelector(".tentang");
            tentangEyelashSection.innerHTML = `
                <h2>Tentang Saya</h2>
                <p>  Nama saya Siti Putri Lenggo Geni, dengan NIM 2209106120, dari Informatika C angkatan 22. Saya lahir dan bertempat tinggal di Samarinda. Saya lulusan SMAN 5 Samarinda. Berikut ini type eyelash yang tersedia pada toko saya:</p>
                <ul>
                    <li><a href="#eyelash-model-1">Eyelash Model Classic</a></li>
                    <li><a href="#eyelash-model-2">Eyelash Model Volume</a></li>
                    <!-- Tambahkan lebih banyak jenis eyelash dengan tautan ke bagian yang sesuai -->
                </ul>
            `;
        }

        function loadContact() {
            const kontakSection = document.querySelector(".kontak");
            kontakSection.innerHTML = `
                <h2>Kontak</h2>
                <p>Untuk booking dan ingin bertanya mengenai lash, dapat menghubungi kontak dibawah ini :</p>
                <ul>
                    <li>Email: <a href="mailto:lenggo.geni0305@gmail.com">lenggo.geni0305@gmail.com</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/eyelash.beauty">eyelash.beauty</a></li>
                    <li>Facebook: <a href="https://www.facebook.com/eyelash.beauty">eyelash.beauty</a></li>
                    <!-- Tambahkan tautan sosial media atau informasi kontak lainnya di sini -->
                </ul>
            `;
        }
    </script>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Eyelash.Beauty</p>
    </footer>

    <script>
        const body = document.body;
const themeToggle = document.getElementById("theme-toggle");

// Menangani perubahan tema saat tombol diklik
themeToggle.addEventListener("click", () => {
    const isDarkMode = body.classList.contains("dark-mode");

    // Menggunakan window.confirm() untuk menampilkan pop-up box
    const userConfirmed = window.confirm(
        `Apakah Anda yakin ingin ${isDarkMode ? "menonaktifkan" : "mengaktifkan"} Dark Mode?`
    );

    if (userConfirmed) {
        body.classList.toggle("dark-mode");
        localStorage.setItem("dark-mode", !isDarkMode);

        // Manipulasi DOM: Mengubah font dan padding saat dalam mode gelap
        if (!isDarkMode) {
            body.style.fontFamily = "Helvetica, sans-serif";
            body.style.padding = "20px";
        } else {
            body.style.fontFamily = "Times New Roman, sans-serif";
            body.style.padding = "10px";
        }
    }
});

// Menangani peristiwa ketika pengguna mencoba mengubah ke Light Mode
window.addEventListener("beforeunload", (event) => {
    const isDarkMode = body.classList.contains("dark-mode");
    if (isDarkMode) {
        const userConfirmed = window.confirm(
            "Anda masih dalam Dark Mode. Apakah Anda yakin ingin beralih ke Light Mode?"
        );
        if (!userConfirmed) {
            event.preventDefault();
        }
    }
});

// Cek apakah pengguna memiliki preferensi dark mode sebelumnya
const savedDarkMode = localStorage.getItem("dark-mode");

if (savedDarkMode === "true") {
    body.classList.add("light-mode");
    body.style.fontFamily = "Times New Roman, sans-serif";
    body.style.padding = "10px";
}

const registrationForm = document.getElementById("registration-form");
const hasilPendaftaran = document.getElementById("hasil-pendaftaran");

registrationForm.addEventListener("submit", function(event) {
    event.preventDefault();

    const nama = document.getElementById("nama").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Menampilkan hasil inputan
    hasilPendaftaran.textContent = `Terima kasih, ${nama}! Anda telah terdaftar dengan email ${email}.`;
    
    // Reset formulir
    registrationForm.reset();
});

    </script>
</body>

</html>
