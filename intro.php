<?php
// Untuk menampilkan menggunakan (echo)
    echo("Halo dek!<br/>");
?>
<?php
// membuat variabel 
    $nama="Aya";
    $umur="2 Tahun";
    $kelakuan="Baik";

    echo"Ini adalah $nama</br> dia berumur $umur<br/> dia adalah anak yang $kelakuan<br/>";
    
?>
    <?php
    //menampilkan kondisi
        $nilai= 85;

        if($nilai > 90){
            echo"Nilai A";
        }else if($nilai >= 85){
            echo"Nilai B";
        }else if($nilai < 85){
            echo"NIlai C";
        }else if($nilai == 75){
            echo"Nilai C";
        }
            
    ?>

<?php
    //Array Asosiatif
        $daftar_kelas = [
            ["nama_kelas" => "10 PPLG 1", "jumlah_siswa" =>32, "wali_kelas" => "bu fau"],
            ["nama_kelas" => "10 PPLG 2", "jumlah_siswa" =>34, "wali_kelas" => "bu ijul"]
        ];

        foreach($daftar_kelas as $kelas){
            echo $kelas["nama_kelas"].$kelas["jumlah_siswa"]."<br/>";
            
        }
            
        
?php>
