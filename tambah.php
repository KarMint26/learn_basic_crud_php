<?php require_once './config/head.php' ?>

<h1>Tambah Barang</h1>

<form action="./proses_tambah.php" method="get">
    <div class="mb-3 mt-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" placeholder="pulpen">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control" name="harga" id="harga" placeholder="1500">
    </div>
    <div class="mb-3">
      <label for="stok" class="form-label">Stok</label>
      <input type="number" class="form-control" name="stok" id="stok" placeholder="15">
    </div>
    <button type="submit" class="btn btn-success" style="transform: translateX(12rem)">Simpan</button>
</form>

<?php require_once './config/foot.php' ?>