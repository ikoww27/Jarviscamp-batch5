<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container my-5">
        <h3>Form Produk</h3>

        <?php
        require 'koneksi.php';

        // Proses form jika ada data yang dikirim
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nama_barang'], $_POST['harga_barang'], $_POST['text2'], $_POST['stok_barang'])) {
                $nama_barang = htmlspecialchars($_POST['nama_barang']);
                $harga_barang = htmlspecialchars($_POST['harga_barang']);
                $deskripsi = htmlspecialchars($_POST['text2']);
                $stok_barang = htmlspecialchars($_POST['stok_barang']);

                // Persiapan dan eksekusi query
                $sql = "INSERT INTO produk (nama_barang, harga_barang, deskripsi, stok_barang) VALUES (:nama_barang, :harga_barang, :deskripsi, :stok_barang)";
                $stmt = $pdo->prepare($sql);

                $stmt->execute([
                    ':nama_barang' => $nama_barang,
                    ':harga_barang' => $harga_barang,
                    ':deskripsi' => $deskripsi,
                    ':stok_barang' => $stok_barang,
                ]);

                echo '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Semua kolom harus diisi!</div>';
            }
        }
        ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_barang">Nama Barang :</label>
                <input id="nama_barang" name="nama_barang" placeholder="Nama Barang" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga :</label>
                <input id="harga_barang" name="harga_barang" placeholder="Masukkan Harga" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="text2">Deskripsi :</label>
                <input id="text2" name="text2" placeholder="Deskripsi Barang" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok_barang">Stok :</label>
                <input id="stok_barang" name="stok_barang" placeholder="Jumlah Stok" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <h3>Data Produk</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ambil dan tampilkan data dari database
                $sql = "SELECT * FROM produk";
                $stmt = $pdo->query($sql);

                while ($row = $stmt->fetch()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nama_barang'] . '</td>';
                    echo '<td>' . $row['harga_barang'] . '</td>';
                    echo '<td>' . $row['deskripsi'] . '</td>';
                    echo '<td>' . $row['stok_barang'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>