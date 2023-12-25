<?php

class Form
{
    public static function generateTable($result)
    {
        $tableHTML = '<table class="data-table">
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tableHTML .= '<tr>
                                <td><img src="../../gambar/' . $row['gambar'] . '" alt="' . $row['nama'] . '"></td>
                                <td>' . $row['nama'] . '</td>
                                <td>' . $row['kategori'] . '</td>
                                <td>' . $row['harga_beli'] . '</td>
                                <td>' . $row['harga_jual'] . '</td>
                                <td>' . $row['stok'] . '</td>
                                <td class="aksi">
                                    <button type="button" class="btn-ubah" style="background-color: #ffc107; color: white; font-size: 12px; padding: 10px 10px; border: none; border-radius: 5px; cursor: pointer;" href="ubah.php?id=' . $row['id_barang'] . '">Edit</button>
                                    <button type="button" class="btn-hapus" style="background-color: #dc3545; color: white; font-size: 12px; padding: 10px 10px; border: none; border-radius: 5px; cursor: pointer;" href="hapus.php?id=' . $row['id_barang'] . '">Delete</button>
                                </td>
                            </tr>';
            }
        } else {
            $tableHTML .= '<tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>';
        }


        $tableHTML .= '</table>';
        return $tableHTML;
    }

    public static function generateUbah($currentValue, $options)
    {
        $html = '';
        foreach ($options as $value => $label) {
            $selected = ($value == $currentValue) ? 'selected="selected"' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
        }
        return $html;
    }
}
