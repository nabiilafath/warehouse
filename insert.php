<h2> Tambah Buku</h2>

<form method="post" enctype="multipart/from-data">
<div class= "from-group">
        <label>Id</label>
        <input type="number" class="form-control" name="id">
    </div>
    <div class= "from-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label> Pengarang</label>
        <input type="text" class="form-control" name="pengarang">
    </div>
    <div>
        <label> Tahun Input</label>
        <input type="number" class="form-control" name="tahun_input">
    </div>
    <button class="btn btn-primary" name ="save">Save</button>
</form>
<?php
if (isset($_POST['save']))
{
$koneksi->query("INSERT INTO buku
(id, judul, pengarang, tahun_input)
VALUES('$_POST[id]','$_POST[judul]', '$_POST[pengarang]', '$_POST[tahun_input]')");
    
    echo "<script>alert('data berhasil diinsert')</script>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=buku'>";
}

?>

