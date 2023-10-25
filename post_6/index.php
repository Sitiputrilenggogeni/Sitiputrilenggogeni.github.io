<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem CRUD Eyelash_Beauty</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin: 30px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            background-color: #d291bb;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #581541;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Sistem CRUD Eyelash_Beauty</h1>

    <button id="tambah-data">Tambah Data</button>

    <table id="data-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data dari database akan ditampilkan di sini -->
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            // Memuat data saat halaman dimuat
            loadData();

            // Menangani klik tombol "Tambah Data"
            $('#tambah-data').click(function() {
                var nama = prompt("Masukkan nama:");
                var email = prompt("Masukkan email:");
                var password = prompt("Masukkan password:");

                if (nama && email && password) {
                    $.ajax({
                        url: 'tambah_data.php',
                        method: 'POST',
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            alert(response);
                            loadData();
                        }
                    });
                } else {
                    alert("Semua kolom harus diisi!");
                }
            });

            // Menangani klik tombol "Edit"
            $(document).on('click', '.edit-button', function() {
                var id = $(this).data('id');
                var nama = prompt("Masukkan nama baru:");
                var email = prompt("Masukkan email baru:");
                var password = prompt("Masukkan password baru:");

                if (nama && email && password) {
                    $.ajax({
                        url: 'edit_data.php',
                        method: 'POST',
                        data: {
                            id: id,
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            alert(response);
                            loadData();
                        }
                    });
                } else {
                    alert("Semua kolom harus diisi!");
                }
            });

            // Menangani klik tombol "Hapus"
            $(document).on('click', '.delete-button', function() {
                var id = $(this).data('id');
                var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");

                if (konfirmasi) {
                    $.ajax({
                        url: 'hapus_data.php',
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            alert(response);
                            loadData();
                        }
                    });
                }
            });

            // Memuat data dari server
            function loadData() {
                $.ajax({
                    url: 'load_data.php',
                    method: 'GET',
                    success: function(data) {
                        $('#data-table tbody').html(data);
                    }
                });
            }
        });
    </script>

    <!-- Menambahkan elemen untuk menampilkan informasi tanggal dan waktu -->
    <div id="tanggal-waktu"></div>

    <!-- Script JavaScript untuk menampilkan tanggal dan waktu -->
    <script>
        // Fungsi untuk memperbarui informasi tanggal dan waktu
        function updateTanggalWaktu() {
            var waktu = new Date(); // Mendapatkan objek waktu saat ini
            var hari = waktu.toLocaleDateString('id-ID', {
                weekday: 'long'
            }); // Nama hari
            var tanggal = waktu.getDate(); // Tanggal
            var bulan = waktu.toLocaleDateString('id-ID', {
                month: 'long'
            }); // Nama bulan
            var tahun = waktu.getFullYear(); // Tahun
            var jam = waktu.getHours(); // Jam
            var menit = waktu.getMinutes(); // Menit
            var detik = waktu.getSeconds(); // Detik
            var zonaWaktu = waktu.toLocaleTimeString('en-US', {
                timeZoneName: 'short'
            }); // Zona waktu

            // Menggabungkan informasi tanggal dan waktu ke dalam satu string
            var informasiTanggalWaktu = hari + ', ' + tanggal + ' ' + bulan + ' ' + tahun + ' ' + jam + ':' + menit + ':' + detik + ' ' + zonaWaktu;

            // Memasukkan informasi tanggal dan waktu ke dalam elemen dengan ID "tanggal-waktu"
            document.getElementById('tanggal-waktu').textContent = informasiTanggalWaktu;

            // Memperbarui informasi setiap detik (1000 milidetik)
            setTimeout(updateTanggalWaktu, 1000);
        }

        // Memanggil fungsi untuk pertama kali agar informasi tanggal dan waktu ditampilkan segera setelah halaman dimuat
        updateTanggalWaktu();
    </script>

    <form id="upload-form">
        <input type="file" name="file" id="file-input" required>
        <button type="submit">Upload File</button>
    </form>
    <div id="upload-status"></div>
    <script>
        $(document).ready(function() {
            // Tangani submit form upload
            $("#upload-form").submit(function(event) {
                event.preventDefault();

                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: 'upload_file.php',
                    type: 'POST',
                    data: formData,
                    async: false,
                    success: function(response) {
                        $("#upload-status").html(response);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });

                return false;
            });
        });
    </script>
    <title>Foto yang Sudah Diunggah</title>

    <body>
        <h1>Foto yang Sudah Diunggah</h1>
        <?php include 'tampilkan_foto.php'; ?> <!-- Nama file PHP yang berisi kode untuk menampilkan foto -->
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>