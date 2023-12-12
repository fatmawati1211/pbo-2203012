<h2>Edit Media Sosial</h2>

<form action="<?php echo URL; ?>/mediasosial/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="jenis" value="<?php echo $data['row']['jenis']; ?>" required></td>
        </tr>
        <tr>
            <td>FUNGSI</td>
            <td><input type="text" name="fungsi" value="<?php echo $data['row']['fungsi']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>