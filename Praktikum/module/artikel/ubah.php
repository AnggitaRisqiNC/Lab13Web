<?php
error_reporting(E_ALL);
require_once '../../class/database.php';
include_once '../../class/form.php';

$db = new Database("localhost", "root", "", "latihan1");

if (isset($_POST['submit'])) {
    $id = $db->escapeString($_POST['id']);
    $nama = $db->escapeString($_POST['nama']);
    $kategori = $db->escapeString($_POST['kategori']);

    $sql = "UPDATE data_barang SET nama='{$nama}', kategori='{$kategori}' WHERE id_barang='{$id}'";

    $result = $db->query($sql);

    if (!$result) {
        die('Error: ' . $db->getError());
    } else {
        header('location: index.php');
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM data_barang WHERE id_barang = '{$id}'";
$result = $db->query($sql);
if (!$result) {
    die('Error: Data tidak tersedia');
}
$data = mysqli_fetch_array($result);

$db->closeConnection();
?>

<?php require('../../template/header.php'); ?>

<!-- Navbar -->
<nav>
    <a href="index.php">Home</a>
    <a href="tambah.php">Tambah Barang</a>
    <a href="contact.php">Contact</a>
</nav>

<!-- Content -->
<div class="content">
    <h1>Ubah Barang</h1>
    <div class="main">
        <form method="post" action="ubah.php" enctype="multipart/form-data">
        <div class="input">
            <label>Nama Barang</label>
            <input type="text" name="nama" value="<?php echo $data['nama'];?>" />
        </div>
        <div class="input">
            <label>Kategori</label>
            <select name="kategori">
                <?php
                    $options = [
                        'Komputer' => 'Komputer',
                        'Elektronik' => 'Elektronik',
                        'Hand Phone' => 'Hand Phone'
                    ];
                    echo form::generateUbah($data['kategori'], $options);
                ?>
            </select>
        </div>
        <div class="input">
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" />
        </div>
        <div class="input">
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" />
        </div>
        <div class="input">
            <label>Stok</label>
            <input type="text" name="stok" value="<?php echo $data['stok']; ?>" />
        </div>
        <div class="input">
            <label>File Gambar</label>
            <input type="file" name="file_gambar" />
        </div>
        <div class="submit">
            <input type="hidden" name="id" value="<?php echo $data['id_barang'];?>" />
            <input type="submit" name="submit" value="Simpan" />
        </div>
        </form> 
    </div>
</div>

<?php require('../../template/footer.php'); ?>