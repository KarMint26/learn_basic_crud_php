<?php
require_once 'koneksi.php';

$sql = "SELECT * FROM barang";
$query = mysqli_query($koneksi, $sql);
?>

<?php require_once './config/head.php' ?>
<h1>Data Barang</h1>
<table class="table table-hover table-bordered table-md w-50 text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php while($barang = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td scope="row"><?= $barang['no'] ?></td>
            <td><?= $barang['nama'] ?></td>
            <td><?= $barang['harga'] ?></td>
            <td><?= $barang['stok'] ?></td>
            <td>
                <a class="me-3 btn btn-warning" href="edit.php?no=<?= $barang['no'] ?>">Edit</a>
                <a class="btn btn-danger" href="hapus.php?no=<?= $barang['no'] ?>">Hapus</a>
            </td>
        </tr>
    <?php } ?>
  </tbody>
</table>

<a href="tambah.php" class="btn btn-primary" style="transform: translateX(18.8rem)">Tambah</a>
<?php require_once './config/foot.php' ?>