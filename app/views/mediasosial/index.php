<h2>Media Sosial</h2>

<a href="<?php echo URL; ?>/mediasosial/input" class="btn">Input Media Sosial</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS</th>
            <th>FUNGSI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenis']; ?></td>
                  <td><?php echo $row['fungsi']; ?></td>
                  <td><a href="<?php echo URL; ?>/mediasosial/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/mediasosial/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>