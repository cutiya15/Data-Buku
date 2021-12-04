<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_tambah_mahasiswa.php" method="POST">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Jenis Kelamin :
        <select name="jenis_kelamin" class="from-control">
            <option></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>

        Alamat :
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Username :
        <input type="text" name="username" value="" class="form_control">
        Password :
        <input type="Password" name="password" value="" class="form-control">
        Jurusan :
        <select name="id_jurusan" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_jurusan = mysqli_query($conn, "select * from jurusan");
            while ($data_jurusan = mysqli_fetch_array($qry_jurusan)) {
                echo '<option value="' . $data_jurusan['id_jurusan'] . '">' . $data_jurusan['nama_jurusan'] . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="simpan" value="Tambah data" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"></script>
</body>

</html>