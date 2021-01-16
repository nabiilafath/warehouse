<h2>Update Produk</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM buku WHERE id='$_GET[id];'");
$pecah= $ambil->fetch_assoc();



?>

<form method="post" >
<div class="form-group">
<label> Judul Buku</label>
<input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul'];?>">
<label> Pengarang</label>
<input type="text" name="pengarang" class="form-control" value="<?php echo $pecah['pengarang'];?>">
<label> Tahun Input</label>
<input type="number" name="tahun_input" class="form-control" value="<?php echo $pecah['tahun_input'];?>">

</div>

<button class="btn btn-primary" name="update">Update</button>
</form>

<?php
if (isset($_POST['update']))
{
    $koneksi->query("UPDATE buku SET judul='$_POST[judul]', 
    pengarang='$_POST[pengarang]', tahun_input='$_POST[tahun_input]' 
    WHERE id='$_GET[id]'");
    echo "<script>alert('data berhasil diupdate')</script>";
    echo "<script>location='index.php?halaman=buku';</script>";
}
?>