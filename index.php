<?php
// Koneksi database
require_once 'koneksi.php';

// Menampilkan data dari database
$sql = "SELECT * FROM coba";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Menampilkan data ke dalam tabel HTML
  echo "<table>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Nama</th>";
  echo "</tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nama"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Menutup koneksi database
mysqli_close($conn);
?>
