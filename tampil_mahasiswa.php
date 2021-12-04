<!DOCTYPE html>
<html>

<head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <center>
        <h3>Data Mahasiswa</h3>
    </center>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>

            <?php
            include "koneksi.php";
            $qry_mahasiswa = mysqli_query($conn, "select * from mahasiswa join jurusan on
            jurusan.id_jurusan=mahasiswa.id_jurusan");
            $no = 0;
            while ($data_mahasiswa = mysqli_fetch_array($qry_mahasiswa)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_mahasiswa['nama'] ?></td>
                    <td><?= $data_mahasiswa['tanggal_lahir'] ?></td>
                    <td><?= $data_mahasiswa['jenis_kelamin'] ?></td>
                    <td><?= $data_mahasiswa['alamat'] ?></td>
                    <td><?= $data_mahasiswa['username'] ?></td>
                    <td><?= $data_mahasiswa['nama_jurusan'] ?></td>

                    <td><a href="ubah_mahasiswa.php?id_mhs=<?= $data_mahasiswa['id_mhs'] ?>" class="btn btn-success">
                            ubah</a> | <a href="hapus_mhs.php?id_mhs=<?= $data_mahasiswa['id_mhs'] ?>" onclick='return confirm(" apakah anda yakin menghapus data ini ")' class="btn btn-danger">Hapus</a>
                    </td>
                <?php
            }
                ?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"></script>
</body>

</html>