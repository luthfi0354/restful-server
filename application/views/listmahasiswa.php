<a href= "http://localhost/restful-server/mahasiswa/create">Tambah Data</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
    </tr>
    <?php
    foreach($mahasiswa as $mhs){
        $nim= $mhs['nim'];
        $nama= $mhs['nama'];
        $jurusan= $mhs['jurusan'];
        $alamat= $mhs['alamat'];

    echo "<tr>
    <td>$nim</td>
    <td>$nama</td>
    <td>$jurusan</td>
    <td>$alamat</td>
    <td>
    ". anchor('mahasiswa/edit/'.$nim, 'Edit')."
    ". anchor('mahasiswa/delete/'.$nim, 'Delete')."
    </td>
    </tr>";  
          
    }
    ?>
</table>