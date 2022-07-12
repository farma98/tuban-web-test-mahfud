<h1>Data Siswa</h1>
<hr>
<a href="<?php echo base_url("index.php/siswa/export"); ?>">Export ke Excel</a><br><br>
<table border="1" cellpadding="8">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>TTL</th>
        <th>Alamat</th>
    </tr>
    <?php
    if (!empty($siswa)) { // Jika data pada database tidak sama dengan empty (alias ada datanya)
        foreach ($siswa as $data) { // Lakukan looping pada variabel siswa dari controller
            echo "<tr>";
            echo "<td>" . $data->s_nis . "</td>";
            echo "<td>" . $data->s_nama . "</td>";
            echo "<td>" . $data->s_ttl . "</td>";
            echo "<td>" . $data->s_alamat . "</td>";
            echo "</tr>";
        }
    } else { // Jika data tidak ada
        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
    }
    ?>
</table>