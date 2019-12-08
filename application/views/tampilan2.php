<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <script type="text/javascript" id="abc">
        function kirim() {
            var a = document.getElementById("abc").innerHTML;
            var b = document.getElementById("teks").value;
            var c = document.getElementById("kepala").value;
            document.write(a + "<br/>" + "<br/>");
            document.write(b + "<br/");
            document.write(c);
        }
    </script>
</head>

<body>
    <div class="header">
        <h1 style="text-align: center;">LAPOR ITERA!</h1>
    </div>
    <div class="comment">
        <h5>Buat Laporan/Komentar
            <hr>
        </h5>
        <form action="" method="post">
            <textarea rows="15" cols="115" wrap="virtual" style="font-family: sans-serif;">Laporan/Komentar
            </textarea><br><br>
            <div class="styled-select">
                <select>
                    <option value="">Pilih Aspek Pelaporan/Komentar</option>
                    <option value="dosen">Dosen</option>
                    <option value="staff">Staff</option>
                    <option value="mhs">Mahasiswa</option>
                    <option value="infra">Infrastruktur</option>
                    <option value="ajar">Pengajaran</option>
                </select>

            </div><br>

            <input type="file" name="file" value="Choose File" style="height: 35px; width:75px;">

            <input type="submit" name="Buat" value="Buat Lapor" style="float: right; width: 85px; height: 35px;"><br>
            <br><br>
            <hr>
        </form>
    </div>
</body>

</html>