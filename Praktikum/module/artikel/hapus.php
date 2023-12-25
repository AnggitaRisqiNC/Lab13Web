<?php
require_once '../../class/database.php';
require('../../class/config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = new Database("localhost", "root", "", "latihan1");

    $result = $db->query("DELETE FROM data_barang WHERE id_barang = '{$id}'");

    if (!$result) {
        die('Error: ' . $db->getError());
    }

    $db->closeConnection();

    header('location: index.php');
} else {
    echo 'Invalid request. Please provide an ID.';
}
?>