<?php
    $koneksi = new mysqli("localhost", "root", "", "warehouse");
?>

<h2> Data buku anda di Warehouse </h2>

<table class= "table table-bordrerd">
    <thead>
        <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Input</th>
            <th>Aksi</th>

</tr>
</thead>
<tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("SELECT * FROM buku"); ?>
    <?php while($pecah= $ambil->fetch_assoc()){ ?>
<tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['judul'];?></td>
            <td><?php echo $pecah['pengarang'] ?></td>
            <td><?php echo $pecah['tahun_input']?></td>
            <td>
                <a href= "index.php?halaman=delete&id=<?php echo $pecah ['id'];?>" 
                class="btn-danger btn">Delete</a>
                <a href= "index.php?halaman=update&id=<?php echo $pecah ['id'];?>" 
                class="btn-success btn">update</a>        
        

            </td>

</tr>
    <?php $nomor++; ?>
    <?php } ?>
</tbody>
</table>
     <a href= "index.php?halaman=insert" class="btn-primary btn">Insert</a>
              

        
