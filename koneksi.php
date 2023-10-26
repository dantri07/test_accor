<?php
class Data
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "db_akademik";
    private $conn;
    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (
                isset($_POST['nama']) &&
                isset($_POST['alamat']) && isset($_POST['umur'])
            ) {
                if (
                    !empty($_POST['nama']) && !empty($_POST['alamat']) && !empty($_POST['umur'])
                ) {
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $umur = $_POST['umur'];
                    $query = "INSERT INTO mahasiswa
(nama,alamat,umur) VALUES ('$nama','$alamat','$umur')";
                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('Data Berhasil
Ditambah');</script>";
                        echo
                        "<script>window.location.href = 'tampilan.php';</script>";
                    } else {
                        echo
                        "<script>alert('Gagal');</script>";
                        echo
                        "<script>window.location.href = 'tampilan.php';</script>";
                    }
                } else {
                    echo "<script>alert('Kosong');</script>";
                    echo "<script>window.location.href =
'tampilan.php';</script>";
                }
            }
        }
    }
    public function tampil()
    {
        $data = null;
        $query = "SELECT * FROM mahasiswa";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function delete($id)
    {
        $query = "DELETE FROM mahasiswa where nama = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update($data)
    {
        $query = "UPDATE mahasiswa SET nama='$data[nama]',
alamat='$data[alamat]', umur='$data[umur]' WHERE nama='$data[id] '";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
