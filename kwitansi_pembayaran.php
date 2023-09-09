<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php

    
$a=$_POST['jenis_kwh'];
$b=$_POST['keterlambatan'];
$c=$_POST['jumlah_pemakaian'];
$d=$_POST['tanggal'];
$e=$_POST['id_pelanggan'];
$f=$_POST['nama_pelanggan'];
$g=$_POST['bulan_tahun'];

switch($a){
    case 450:

        $harga_per_meter = 300;
        break;
    case 900:

        $harga_per_meter = 400;
        break;
    case 1300:

        $harga_per_meter = 500;
        break;
    default :

        $harga_per_meter = 0;
        break;

}
    $denda=$b * 1000;

    $total_tagihan =($harga_per_meter*$c)-$denda;


    ?>




    <div class="box-kwitansi" id="box-kwitansi">
        <center>
        <img src="imgs/logo2.png" alt="logo_perusahaan" width="75">
        </center>
        <h2 align= "center">PT SINAR NUSANTARA BERSAMA</h2>
        <h5 align= "center">Kwitansi Pembayaran Listrik Pascabayar</h5>

        <table width="80%" align="center" cellpadding="5">
            <tr>
                <td>ID Pelanggan</td>
                <td>: <?php echo $e; ?> </td>
                <td>Bulan / Tahun</td>
                <td>: <?php echo $g; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:<?php echo $f; ?></td>
                <td>Stand Meter</td>
                <td>: KSDHFJK339827302932084</td>
            </tr>
            <tr>
                <td>Tarif/Daya</td>
                <td colspan="3">: <?php echo $a; ?></td>
            </tr>
            <tr>
                <td>RP Tagihan </td>
                <td colspan="3">:<?php echo $total_tagihan; ?></td>
            </tr>
            <tr>
                <td>No Ref</td>
                <td colspan="3">: 7628372ATA987987666</td>
            </tr>
        </table>
        <p allign="center">
            PT Sinar Nusantara Bersama menyatakan struk ini sebagai bukti pembayaran yang sah <br>
            Terima Kasih <br>
            *Informasi Hubungi Call Center 777 atau Hub Kantor Terdekat*
        </p>
    </div>
    <p align="center">
        <button class="btn btn-success" onclick="print()">Cetak</button>
    </p>

    <script>
        function print() {
            var divContents = document. getElementById("box-kwitansi").innerHTML;
            var a = window.open('','', 'height = 500, width=500');
            a. document.write('<html>');
            a. document.write('<body>');
            a. document.write(divContents);
            a. document.write('</body></html>');
            a. document.close();
            a. print();
        }
    </script>
</body>

</html>