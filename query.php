<?php
class Crud {
    private $koneksi;

    public function __construct() {
        $this->koneksi = mysqli_connect("localhost", "root", "", "user");
    }

    public function readData() {
        $data = [];
        $query = "SELECT * FROM user_detail";
        $result = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}
?>
