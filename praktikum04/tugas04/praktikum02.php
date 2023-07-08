<?php
require_once 'header.php';
require_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 style="text-align:center;">Belanja Online</h1>
                <hr>
                <div style="display: flex; margin-left: 10px; margin-top:25px">
                    <div class="container">
                        <form method="POST" action="praktikum02.php">
                            <div class="form-group row">
                                <label for="customer" class="col-4 col-form-label">Customer</label>
                                <div class="col-8">
                                    <input id="customer" name="customer" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Pilih Produk</label>
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="Produk" id="Produk_0" type="radio" class="custom-control-input" value="tv" required="required">
                                        <label for="Produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="Produk" id="Produk_1" type="radio" class="custom-control-input" value="kulkas" required="required">
                                        <label for="Produk_1" class="custom-control-label">Kulkas</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="Produk" id="Produk_2" type="radio" class="custom-control-input" value="mesin" required="required">
                                        <label for="Produk_2" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                <div class="col-8">
                                    <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="card" style="border: 2px solid #064b86">
                            <h5 class="card-header" style="background-color: #337ab7; color:white;">
                                Daftar Harga
                            </h5>
                            <div class="card-body">
                                <p class="card-text">
                                    TV : 4.200.000
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Kulkas : 3.100.000
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Mesin Cuci : 3.800.000
                                </p>
                            </div>
                            <div class="card-footer" style="background-color: #337ab7; color:white; ">
                                Harga Dapat Berubah Sewaktu-waktu
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="blue"><br>
                <div class="row">
                    <br>
                    <div class="col-md-15" style="border:1px solid black">
                        <?php
                        // tangkap hasil inputan
                        $proses = $_POST["proses"];
                        $nama_cs = $_POST["customer"];
                        $pilih_produk = $_POST["Produk"];
                        $jumlah_produk = $_POST["jumlah"];
                        // echo $nama_cs;
                        // echo $pilih_produk;
                        // echo $jumlah produk;

                        // buat logic produk
                        $pilihan_produk;
                        if ($pilih_produk == "tv") {
                            $pilihan_produk = "TV";
                        } elseif ($pilih_produk == "kulkas") {
                            $pilihan_produk = "Kulkas";
                        } elseif ($pilih_produk == "mesin") {
                            $pilihan_produk = "Mesin Cuci";
                        } else {
                            $pilihan_produk = "Tidak Ada";
                        }

                        // buat total belanja 
                        $total_belanja;
                        if ($pilihan_produk == "TV") {
                            $total_belanja = 4200000 * $jumlah_produk;
                        } elseif ($pilihan_produk == "Kulkas") {
                            $total_belanja = 3100000 * $jumlah_produk;
                        } elseif ($pilihan_produk == "Mesin") {
                            $total_belanja = 3100000 * $jumlah_produk;
                        } else {
                            $total_belanja = "-";
                        }
                        ?>

                        <h5><u>STRUK BELANJA</u></h5>
                        <?= "Nama Customer : " . $nama_cs; ?>
                        <br>
                        <?= "Pilihan Produk : " . $pilihan_produk; ?>
                        <br>
                        <?= "Jumlah : " . $jumlah_produk; ?>
                        <br>
                        <?= "Total : Rp. " . number_format($total_belanja, 0, ".", "."); ?>
                    </div>
                </div>
            </div>
        </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->

<?php
require_once 'footer.php';
?>