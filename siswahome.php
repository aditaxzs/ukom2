<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="adminnilai.css">
</head>

<body>
    <header>
        <h1>Dashboard Informasi Jurusan RPL</h1>
        <p>SMK NEGERI 5 KOTA BEKASI</p>
        <a href="index.php"><button>Logout</button></a>
    </header>
    <nav>
        <a href="siswahome.php">Nilai Siswa</a>
        <a href="siswamapel.php">Jadwal Mapel</a>
        <a href="siswadata.php">Data Siswa</a>
    </nav>
    <h2>Nilai Siswa</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari NIS..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button type="submit">cari</button>
    </form>
    <br />
    <table border="1">
        <tr>
            <th>Tahun</th>
            <th>Kelas</th>
            <th>Nis</th>
            <th>Semester</th>
            <th>Bhs.Indonesia</th>
            <th>Matematika</th>
            <th>Agama</th>
            <th>Ipa</th>
            <th>Pkn</th>
            <th>Ips</th>
            <th>Sbk</th>
            <th>Penjas</th>
            <th>Bhs.Inggris</th>
            <th>Mulok</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM nilai";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query .= " WHERE NIS LIKE '%$keyword%'";
        }

        $no = 1;
        $data = mysqli_query($koneksi, $query);

        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['Tahun']; ?></td>
                <td><?php echo $d['Kelas']; ?></td>
                <td><?php echo $d['NIS']; ?></td>
                <td><?php echo $d['Semester']; ?></td>
                <td><?php echo $d['Nil_b_indo']; ?></td>
                <td><?php echo $d['Nil_matematika']; ?></td>
                <td><?php echo $d['Nil_agama']; ?></td>
                <td><?php echo $d['Nil_ipa']; ?></td>
                <td><?php echo $d['Nil_pkn']; ?></td>
                <td><?php echo $d['Nil_ips']; ?></td>
                <td><?php echo $d['Nil_sbk']; ?></td>
                <td><?php echo $d['Nil_penjas']; ?></td>
                <td><?php echo $d['Nil_b_ing']; ?></td>
                <td><?php echo $d['Nil_mulok']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>
</body>

</html>