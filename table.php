<!DOCTYPE html>
<html>
<body>

<?php
// Array data nama dan alamat
$names_and_addresses = array(
    array("nama" => "Zahra Khusnul", "alamat" => "Yogyakarta"),
    array("nama" => "Elisabeth Zeina", "alamat" => "Bandung"),
    array("nama" => "Revan Fauzan", "alamat" => "Surabaya"),
    array("nama" => "Rani Puspita", "alamat" => "Jakarta"),
    array("nama" => "Devan Reiza", "alamat" => "Semarang"),
    array("nama" => "Arik Himawan", "alamat" => "Malang"),
    array("nama" => "Claudia Mecca", "alamat" => "Denpasar")
);

// Membuat tabel menggunakan echo
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Alamat</th></tr>";

// Looping untuk menampilkan data nama dan alamat
foreach ($names_and_addresses as $row) {
    echo "<tr>";
    echo "<td>" . $row['nama'] . "</td>"; // Nama
    echo "<td>" . $row['alamat'] . "</td>"; // Alamat
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
