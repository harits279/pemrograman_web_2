<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body class="container">
    <div class="row">
        <div class="col-8">
            <h2>Belanja Online</h2>
            <hr>
            <form method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TELEVISI">
                            <label for="produk_0" class="custom-control-label">TELEVISI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="AC">
                            <label for="produk_1" class="custom-control-label">AC</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="KULKAS">
                            <label for="produk_2" class="custom-control-label">KULKAS</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">TELEVISI: 3.000.000</li>
                <li class="list-group-item">AC: 4.000.000</li>
                <li class="list-group-item">KULKAS: 5.600.000</li>
                <li class="list-group-item active">Harga Dapat Berubah setiap Saat</li>
            </ul>
        </div>
</body>

</html>

<?php
$price = [
    'TELEVISI' =>3000000,
    'AC' => 4000000,
    'KULKAS' => 5600000
];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    echo "Nama Customer: $nama <br>";
    echo "Produk: $produk <br>";
    echo "Jumlah Pembelian: $jumlah <br>";
    echo "Harga: " . number_format($price[$produk] * $jumlah);
}
?>