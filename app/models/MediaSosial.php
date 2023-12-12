<?php

namespace App\Models;

use App\Core\Model;

class MediaSosial extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_mediasosial";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $fungsi = $_POST['fungsi'];

        $sql = "INSERT INTO tb_mediasosial
        SET nama=:nama, jenis=:jenis, fungsi=:fungsi";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":jenis", $jenis);
        $stmt->bindParam(":fungsi", $fungsi);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_mediasosial WHERE id=:id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $fungsi = $_POST['fungsi'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_mediasosial
            SET nama=:nama, jenis=:jenis, fungsi=:fungsi
                  WHERE id=:id";
            $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":jenis", $jenis);
        $stmt->bindParam(":fungsi", $fungsi);
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_mediasosial WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
