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
