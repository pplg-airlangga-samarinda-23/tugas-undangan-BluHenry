<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>undangan nikah express</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grey+Qo&display=swap" rel="stylesheet">
    <script src="script.js"></script>

</head>
<body>
    <form action="insert.php" method="POST">
    <div class="Resmi">
        <p class="judul_undangan"> Undangan pernikahan </p>
        <h1 style="color: grey;"> caelus % firefly </h1>
        <img src="CaeFly.jpg" alt="orang nikah">
    </div>
    <br>
    <div class="kelompok">
        <h2>Caelus</h2>
        <h4> anak dari express trailblazer</h4>
        <h2>firefly</h2>
        <h4> anak dari stellaron hunter </h4>
    </div>
    <div class="diadakan">
        <h2>acara ini diadakan pada</h2>
        <ul>
            <li>Sabtu 25 january 4550</li>
            <li>15:00 PN p.k. selesai</li>
            <li> di planet penacony </li>
        </ul>
    </div>
        <div class="randomiz">
    <h1> dengan ini kita mengundang Player dari Randomizer section </h1>

    <ol>
        <li>karuga</li>
        <li>athar</li>
        <li>hazure</li>
        <li>rapi</li>
        <li>bludhenry</li>
    </Ol>
        </div>
    <br>
    <div class="corossel">
        <div class="inner_corossel">
            <img src="sosokAsliMemberRandomizer.png" alt="Member Randomizer paling mengerikan" class="active" >
            <img src="sahabat.png" alt="Athar Rapi paling acumalaka">
            <img src="BapakWelt.png" alt="Bapak welt perwakilan express">
        </div>
        <button class="Prev"> Prev </button>
        <button class="Next"> Next </button>
    </div>

    <div class="Map">

        
        <h2>lokasi stasiun express ke penacony</h2>
        <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=137.54848480224612%2C35.35692127995706%2C137.98999786376956%2C35.54570085592609&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=12/35.4514/137.7692">Lihat peta lebih besar</a></small>
            <h3>
                Ucapan & Doa
            </h3>
            <p>
                Berikan ucapan harapan & do'a kepada kedua mempelai
            </p>
        <div class="Nama">
            <label> </label>
            <input type="text" placeholder="Nama" name="nama" required style="color: black;">

        </div>

        <div class="Ucapan">
            <textarea type="text" name="ucapan" placeholder="Ucapan" cols="30" rows="5" required></textarea> <br>

        </div>
        <select name="keterangan">
            <option value="" selected disabled hidden>Konfirmasi kehadiran</option>
            <option value="1">Ya saya hadir</option>
            <option value="2">Tidak Hadir Malas</option>
            <option value="3">tidak tahu dan tidak mau tempe</option>
        </select>
        <br>
        <button type="submit">Kirim</button>
        
        <?php
            include 'koneksi.php';
            $SQL2 = "SELECT * FROM catatan_tamu ORDER BY id DESC";
            $hasil = $connection->query($SQL2);
            ?>
        <div style="height: 200px; width:300px;  overflow:scroll; margin-left: 600px;" class="database">
            <?php

            while ($baris = $hasil->fetch_row()) {
            ?>
                <div style="border-style:solid; border-color:crimson; margin:10px;">
                    <p style="font-weight:hold;"><?= $baris[1] ?></p>
                    <p><?= $baris[2] ?></p>
                </div>
<?php
            }

                $hasil->free_result();
            ?>
        </div>
            

            


 
        </form>
    
</body>
</html>