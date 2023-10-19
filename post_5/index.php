<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem CRUD Eyelash_Beauty</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
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
        $(document).ready(function(){
            // Memuat data saat halaman dimuat
            loadData();

            // Menangani klik tombol "Tambah Data"
            $('#tambah-data').click(function(){
                var nama = prompt("Masukkan nama:");
                var email = prompt("Masukkan email:");
                var password = prompt("Masukkan password:");

                if (nama && email && password) {
                    $.ajax({
                        url: 'tambah_data.php',
                        method: 'POST',
                        data: {nama: nama, email: email, password: password},
                        success: function(response){
                            alert(response);
                            loadData();
                        }
                    });
                } else {
                    alert("Semua kolom harus diisi!");
                }
            });

            // Menangani klik tombol "Edit"
            $(document).on('click', '.edit-button', function(){
                var id = $(this).data('id');
                var nama = prompt("Masukkan nama baru:");
                var email = prompt("Masukkan email baru:");
                var password = prompt("Masukkan password baru:");

                if (nama && email && password) {
                    $.ajax({
                        url: 'edit_data.php',
                        method: 'POST',
                        data: {id: id, nama: nama, email: email, password: password},
                        success: function(response){
                            alert(response);
                            loadData();
                        }
                    });
                } else {
                    alert("Semua kolom harus diisi!");
                }
            });

            // Menangani klik tombol "Hapus"
            $(document).on('click', '.delete-button', function(){
                var id = $(this).data('id');
                var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");
                
                if (konfirmasi) {
                    $.ajax({
                        url: 'hapus_data.php',
                        method: 'POST',
                        data: {id: id},
                        success: function(response){
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
                    success: function(data){
                        $('#data-table tbody').html(data);
                    }
                });
            }
        });
    </script>
</body>

</html>
