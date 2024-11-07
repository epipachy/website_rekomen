<?php
    include "service/database.php";

    // Mengecek tombol filter yang dipilih
    if (isset($_POST['filter'])) {
        $filter = $_POST['filter'];

        // Menentukan query berdasarkan filter yang dipilih
        if ($filter == 'all') {
            $sql = "SELECT * FROM food_rekomendasi"; // Menampilkan semua data
        } elseif ($filter == 'halal' || $filter == 'nonhalal') {
            $sql = "SELECT * FROM food_rekomendasi WHERE category='$filter'"; // Menampilkan data berdasarkan kategori
        }

        // Eksekusi query
        $result = $db->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies Recommendation</title>
</head>
<body>
    <?php include "layout/header.html"; ?>

    <h3>Foodies</h3>
    <form method="post">
        <button type="submit" name="filter" value="all">ALL</button>
        <button type="submit" name="filter" value="halal">Halal</button>
        <button type="submit" name="filter" value="nonhalal">Non Halal</button>
    </form>

    <?php
        // Menampilkan hasil query berdasarkan filter yang dipilih
        if (isset($result) && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<h4>" . $row['nama_tempat'] . "</h4>";
                echo "<p>Harga: " . $row['harga'] . "</p>";
                echo "<p>Lokasi: " . $row['lokasi'] . "</p>";
                echo "<p>Deskripsi: " . $row['deskripsi'] . "</p>";
                echo "</div><br>";
            }
            
        } 
         
    ?>

    <?php include "layout/footer.html"; ?>
</body>
</html>
