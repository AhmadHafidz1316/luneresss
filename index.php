<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <form method="post" action="index.php">
        <center><b> BIODATAKU </b> </center>
        <label>Nama </label> <br> 
        <input type="text" name="NS"> <br>
        <label>Alamat</label> <br>
        <input type="text" name="AL"> <br>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="TL"> <br>
        <label>Umur</label> <br>
        <input type="number" name="UM"> <br>
        <label>Sekolah</label> <br>
        <input type="text" name="SKLH"> <br>
        <label>Rombel</label> <br>
        <input type="text" name="RMBL"> <br> <br>
        <hr></hr>
        <h2>NILAI</h2>
        <label>Produktif</label> <br>
        <input type="text" name="PROD"> <br>
        <label>Matematika</label> <br>
        <input type="text" name="MTK"> <br>
        <label>Bahasa Indonesia</label> <br>
        <input type="text" name="BINDO"> <br>
        <label>Bahasa Inggris</label> <br>
        <input type="text" name="BING"> <br>
        <label>Olaharaga</label> <br>
        <input type="text" name="OR"> <br>
        <label>Agama</label> <br>
        <input type="text" name="PAI"> <br>
        <label>Sejarah</label> <br>
        <input type="text" name="SJR"> <br> <br>
        <input type="submit" value="KIRIM DAN INPUT NILAI" name="kirim"> <br> <br>
    </form>

        


        <?php

        if(isset($_POST['kirim']))
        {   
            $nama = $_POST['NS'];
            $alamat = $_POST['AL'];
            $tanggal = $_POST['TL'];
            $umur = $_POST['UM'];
            $sekolah = $_POST['SKLH'];
            $rombel = $_POST['RMBL'];

            $nilai1 = $_POST['PROD'];
            $nilai2 = $_POST['MTK'];
            $nilai3 = $_POST['BINDO'];
            $nilai4 = $_POST['BING'];
            $nilai5 = $_POST['OR'];
            $nilai6 = $_POST['PAI'];
            $nilai7 = $_POST['SJR'];


            $jumlah = ($nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7) ;
            $rata = $jumlah / 7;
            
            $nilai 	= [$nilai1,$nilai2,$nilai3,$nilai4,$nilai5,$nilai6,$nilai7];
            $max = max($nilai);
            $min = min($nilai);
            echo '<b>BIODATA SISWA</b>'.'<br>'.'<br>';
            echo "Nama : ".$nama.'<br>';
            echo "Alamat : ".$alamat .'<br>';
            echo "Tanggal Lahir : ".$tanggal.'<br>';
            echo "Umur : ".$umur. '<br>';

            echo "Sekolah : ".$sekolah.'<br>'; 
            echo "Rombel : ".$rombel.'<br>'.'<br>';

            echo '<b>HASIL NILAI</b>'.'<br>'.'<br>';

            echo "Nilai Produktif = " . $nilai1 . '<br>';
            echo "Nilai Matematika = " . $nilai2 . '<br>';
            echo "Nilai Bahasa Indonesia = " . $nilai3 . '<br>';
            echo "Nilai Bahasa Inggris = " . $nilai4 . '<br>';
            echo "Nilai Olaharaga = " . $nilai5 . '<br>';
            echo "Nilai Agama =  " . $nilai6 . '<br>';
            echo "NIlai Sejarah = " . $nilai7 . '<br>';

            echo "Nilai Tertinggi Adalah = " . " $max ".'<br>';
            echo "Nilai Terendah Adalah = " . " $min ".'<br>';
            
            echo "Nilai Rata - Rata Adalah = " . $rata .'<br>'.'<br>';

            if ($rata >= 90 && $rata <= 100){
                echo "Kamu Mendapatkan Grade A ";
            } 
            elseif ($rata >= 80 ) {
                echo "Kamu Mendapatkan Grade B ";
            }
            elseif ($rata >= 70 ) {
                echo "Kamu Mendapatkan Grade C ";
            }
            elseif ($rata > 100 && $rata < 0) {
                echo "NIlai Tidak Valid !!! ";
            } else {
                echo "Anda Tidak Lulus !!! ";
            }
            
        }   
?>
<hr></hr>
<h3> Ahmad Hafidz Rino Putra X4 </h3>
<h3> Salma Hayya Rahman X1 </h3>
<h3> Annisa Aulia Wahyudi X4 </h3>
<h3> Muhammad Azhril Nurmaulidan X1 </h3>
<h3> Muhamad Rafidz Alfandrin X4 </h3>

</body>
</html>