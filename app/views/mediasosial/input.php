<h2>Input Media Sosial</h2>

<form action="<?php echo URL; ?>/mediasosial/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" required></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="jenis" required></td>
        </tr>
        <tr>
            <td>FUNGSI</td>
            <td><input type="text" name="fungsi" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>