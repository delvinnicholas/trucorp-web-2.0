<!-- Delvin Nicholas / 2301852581 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Table</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        tbody tr:nth-child(even) {
            background-color: lightgrey;
        }

        th {
            height: 30px;
            padding-right: 10px;
        }

        td {
            height: 30px;
        }

        tbody td:nth-child(n+4) {
            text-align: right;
        }
    </style>
</head>

<body>

    <?php
    $conn = mysqli_connect("172.20.0.2", "root", "secret", "trucorp-db");
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Nama</th><th>Alamat</th>
    <th>Jabatan</th></tr>";

        while ($data = $result->fetch_assoc()) {
        echo "<tr><td>" . $data["id"] . "</td>
        <td>" . $data["nama"] . "</td>
        <td>" . $data["alamat"] . "</td>
        <td>" . $data["jabatan"] . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>
