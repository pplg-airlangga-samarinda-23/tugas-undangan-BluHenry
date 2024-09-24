

            <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "undangan";

            $connection = new mysqli($host, $username, $password, $database);

            if ($connection -> connect_error) {
                echo "koneksi gagar karena mewing :(";

            } else {
                echo "koneksi nya sigma";
            }

        
        if(isset($_POST)) {
        $nama = @$_POST['nama'];
        $ucapan = @$_POST['ucapan'];
        $keterangan = @$_POST ['keterangan'];
        
        IF ($nama != "" and $ucapan != "" and $keterangan != ""){
            var_dump($_POST);
        $sql = "INSERT INTO catatan_tamu (name, ucapanGaib, keterangan) VALUES ('$nama', '$ucapan', '$keterangan') ";
        $connection->query($sql);
        }


        header("Location: http://localhost/tugas-undangan-BluHenry");
    }


