<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $noAnggota = $_POST['noAnggota'];
    $namaAnggota =$_POST['namaAnggota'];
    $kodeBuku =$_POST['kodeBuku'];
    $kodeSewa =$_POST['kodeSewa'];
    ?>
	<fieldset style="width:40%";>
    <legend><h1>Tampilan Output</h1></legend>
    <form action="">
        <table>
            <tr rowspan = "1">
                <td rowspan="1"><th>PERPUSTAKAAN "POJOK ILMU"</th></td>
            </tr> 
            <tr>
                <td>No Anggota</td>
                <td>:<?php echo $noAnggota ?></td>
            </tr>
                <td>Nama Anggota</td>
                <td>:<?php echo $namaAnggota?></td>
                
            </tr>
            <tr>
                <td>Kode buku</td>
                <td>:<?php echo $kodeBuku?></td>
            </tr>
            <tr>
                <td>Nama Buku</td>
                <td>:
                    <?php
                    $kodeBuku = $_POST["kodeBuku"];
                    switch ($kodeBuku){
                        case "A01" : $terbilang = "INFORMATIKAN"; break;
                        case "A02" : $terbilang = "SENI"; break;
                        case "A03" : $terbilang = "BUDAYA"; break;
                        case "A04" : $terbilang = "AGAMA"; break;
                        case "A05" : $terbilang = "PENGETAHUAN"; break;
                    }
                    echo $terbilang;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:
                    <?php
                    switch ($kodeBuku){
                        case "A01" : $terbilang = "ERLANGGA"; break;
                        case "A02" : $terbilang = "ANDI OFFSET"; break;
                        case "A03" : $terbilang = "SINAR MULIYA"; break;
                        case "A04" : $terbilang = "DEEP PUBLISH"; break;
                        case "A05" : $terbilang = "INSAN CEMERLANG"; break;
                    }
                    echo $terbilang;
                    ?>
                </td>
            </tr>
            <tr>
                <td><h4>Harga Sewa </h4></td>
            </tr>
            <tr>
                <td>Kode Sewa</td>
                <td>:<?php echo $kodeSewa ?></td>
            </tr>
            <tr>
                <td>Lama Sewa</td>
                <td>:
                    <?php
                    $kodeSewa =$_POST['kodeSewa'];
                    switch($kodeSewa){
                        case "SW1" : $lamaSewa = "3 HARI"; break;
                        case "SW2" : $lamaSewa = "2 HARI"; break;
                        case "SW2" : $lamaSewa = "1 HARI"; break;
                    }
                    echo $lamaSewa;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Harga Sewa</td>
                <td>:
                    <?php
                    switch($kodeSewa){
                        case "SW1" : $lamaSewa = "70000"; break;
                        case "SW2" : $lamaSewa = "50000"; break;
                        case "SW2" : $lamaSewa = "35000"; break;
                    }
                    echo $lamaSewa;
                    ?>
                </td>
            </tr>
            <tr>
                <td><h4>Member</h4></td>
            </tr>
            <tr>
                <td>Potongan Member:
                    <?php
                    $potonganMember = $_POST['member'];
                    switch ($potonganMember) {
                        case "member" : $terppotong = 10000; break;
                        case "nonMember" : $terppotong = 0; break;
                    }
                    echo $terppotong . "<br>";
                    ?>
                </td>
            <tr>
                <td>
                    Total Bayar :
                    <?php
                    $totalSewa = $lamaSewa - $terppotong;
                    switch($totalSewa){
                        //member 
                        case 60000 : $totSew = 60000; break;
                        case 40000 : $totSew = 40000; break;
                        case 25000 : $totSew = 25000; break;
                        //non member
                        case 70000 : $totSew = 70000; break;
                        case 50000 : $totSew = 50000; break;
                        case 35000 : $totSew = 35000; break;
                    }
                    echo $totSew;
                    ?>
                </td>
                </tr>
            </tr>
        </table>
		</fieldset>
    </form>
    <br>
    <button><a href="Tampilan_P07_02-05-2023.php">Kembali Mengisi</a></button>

    
</body>
</html>