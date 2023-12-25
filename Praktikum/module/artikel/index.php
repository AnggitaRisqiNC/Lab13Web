<?php
include('../../class/database.php');
include("../../class/form.php");

$config = include("../../class/config.php");

$db = new Database($config['host'], $config['username'], $config['password'], $config['latihan1']);

$q = "";
$sql = 'SELECT * FROM data_barang';

if (isset($_GET['q'])) {
    $q = $_GET['q'];

    $sql .= " WHERE nama LIKE '%{$q}%'";
}

$title = 'Data Barang';
$result = $db->query($sql);
if ($result) {
    if ($result->num_rows > 0) {
        // Tampilkan data
        while ($row = $result->fetch_assoc()) {
            // Tampilkan data dalam format tabel atau sejenisnya
            echo "<tr>";
            echo "<td>" . $row['gambar'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['kategori'] . "</td>";
            echo "<td>" . $row['harga_beli'] . "</td>";
            echo "<td>" . $row['harga_jual'] . "</td>";
            echo "<td>" . $row['stok'] . "</td>";
            echo "</tr>";
        }
    }
}

?>

<?php require('../../template/header.php'); ?>

<!-- Navbar -->
<nav>
    <a href="index.php">Home</a>
    <a href="tambah.php">Tambah Barang</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="content">
    <div class="main" style="padding-bottom: 10px;">
        <form action="" method="get">
            <div class="search">
                <label for="q" style="font-weight: bold; color:var(--darkblue); font-size: 15px;">Cari Data: </label>
                <input type="text" id="q" name="q" class="input-q" style="height: 15px; border: 1px solid var(--blue); border-radius: 4px; padding: 5px;" value="<?php echo $q ?>" autocomplete="off">
                <input type="submit" name="submit" value="Cari" style="background-color: var(--blue); color:var(--white); padding: 6px 24px; font-weight: 700; border: 1px solid var(--white); border-radius: 6px; cursor: pointer;">
            </div>
        </form>
    </div>
    <div class="main">
        <?php
        $limit = 2;

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $sql = "SELECT * FROM data_barang LIMIT $offset, $limit";
        $result = $db->query($sql);

        $total_data = $db->query("SELECT COUNT(*) AS total FROM data_barang")->fetch_assoc()['total'];
        $total_pages = ceil($total_data / $limit);

        echo form::generateTable($result);

        echo "<div class='pagination' style='margin: 0 auto; width: 100%; padding: 10px 0; list-style: none; display: flex; justify-content: center;'>";
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='?page=$i' style='background-color: var(--white); color: var(--magenta); padding: 5px 10px; border: 1px solid #ccc; border-radius: 4px; cursor: pointer; text-decoration: none;'>$i</a>";
        }
        echo "</div>";
        ?>
    </div>
</div>

<?php require('../../template/footer.php'); ?>

<?php
$db->closeConnection();
?>