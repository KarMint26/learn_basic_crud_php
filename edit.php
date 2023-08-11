<?php

require_once './koneksi.php';
$no = $_GET['no'];
$sql = "SELECT * FROM barang WHERE no='$no'";
$query = mysqli_query($koneksi, $sql);

?>

<?php require_once './config/head.php' ?>

<?php while($barang = mysqli_fetch_assoc($query)) { ?>

<h1>Edit Barang</h1>

<form action="./proses_edit.php" method="get">
    <input type="text" name="no" hidden value="<?= $barang['no'] ?>">
    <div class="mb-3 mt-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" value="<?= $barang['nama'] ?>">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control" name="harga" id="harga" value="<?= $barang['harga'] ?>">
    </div>
    <div class="mb-3">
      <label for="stok" class="form-label">Stok</label>
      <input type="number" class="form-control" name="stok" id="stok" value="<?= $barang['stok'] ?>">
    </div>
    <button type="submit" class="btn btn-success" style="transform: translateX(12rem)">Simpan</button>
</form>

<?php } ?>

<?php require_once './config/foot.php' ?>