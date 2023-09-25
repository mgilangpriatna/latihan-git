<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<fieldset style="width:40%";>
    <legend><h1>Tampilan inputan</h1></legend>
    <form action="output_P07_02-05-2023.php" method="post">
        <table >
            <tr rowspan = "1">
                <td rowspan="1"><th>PERPUSTAKAAN "POJOK ILMU"</th></td>
            </tr>
            
            <tr>
                <td>No Anggota</td>
                <td>:<input type="text" name ="noAnggota"></td>
            </tr>
                <td>Nama Anggota</td>
                <td>:<input type="text" name="namaAnggota"></td>
                
            </tr>
            <tr>
                <td>Kode buku</td>
                <td>:<input type="text" name ="kodeBuku"></td>
            </tr>
            <tr>
                <td>Kode Sewa</td>
                <td>:<input type="text" name="kodeSewa"></td>
            </tr>
            <tr>
                <td><h4>Member</h4></td>
            </tr>
            <tr>
                <td><input type="radio" name="member" value ="member"> Member</td>
                <td><input type="radio" name="member" value ="nonMember">Non Member</td>
                
            </tr>
            <tr>
                <td style="padding-top :20px;"><input type="submit" value="kirim"> <input type="reset" value="cancel"></td> 
            </tr>
        </table>
		</fieldset>
    </form>
</body>
</html>