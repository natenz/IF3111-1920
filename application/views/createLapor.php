<!DOCTYPE html>
<html>

<head>
    <title> Laporan ! LAPOR! </title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/stylelapor.css">
</head>

<body>
    <header>
        <div class="container">
            <div id="menukiri">
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="#"> Tentang Lapor! </a></li>
                    <li> <a href="#"> Laporan </a></li>
                    <li> <a href="#"> Cari Aduan </a></li>

                </ul>
            </nav>
            <div id="menukanan">
                <nav>
                    <ul>
                        <li>
                        <li> <a href="#"> Masuk </a></li>
                        <li> <a href="#"> Daftar </a></li>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="wrap">
            <nav id="komen">

                <?php
                foreach ($data as $i) :
                    $idkom = $i['id_comment'];
                    $komentar = $i['komentar'];
                    $lampiran = $i['lampiran'];
                    $waktu = $i['waktu'];
                    $aspek = $i['aspek'];
                    ?>

                    <form method="POST" action="<?php echo site_url('Createlapor/kirimKomen') ?>">
                        <textarea name="comment" value="<?php echo $komentar; ?>" id="comment" rows="5" cols="70" class="form-control textarea-flex autosize" placeholder="Ketik laporan Anda..."> </textarea>
                    </form>
                    <div id="kateg">
                        <select id="jenis" name="jenis" placeholder="Pilih Kategori" value="">
                            <option value="<?php echo $aspek; ?>">-- Pilih Kategori --</option>
                            <option value="admonline"> Administrasi Online </option>
                            <option value="adm"> Administrasi Online </option>
                            <option value="almtcab"> Alamat Cabang </option>
                        </select>
                    </div>
                    <nav id="inp">
                        <input type="file" name="upload" value="<?php echo $lampiran; ?>" placeholder="Max File 2MB" />
                    </nav>
                    <ul>
                        <button type="submit" name="submit" value="<?php echo $tombol; ?>"> Tambah Komentar!
                        </button>
                    </ul>

            </nav>
        <?php endforeach; ?>
        <aside class="sidebar">
            <div class="instansi">
                <h2> Instansi Terhangat </h2>
                <p>Tim Sosialisasi KKS</p>
                <p>Tim Sosialisasi KKS</p>
            </div>
        </aside>

        </div>
    </div>

    <section id="showcoment">
        <div class="container">
            <h1>
                TAMPILAN COMMENT COMMENT !
            </h1>
        </div>
    </section>
    <footer>
        <section id="spons">
            <div class="container">
                <div class="box">
                    <p>Download Aplikasi Mobile LAPOR!</p>
                    <img src="<?= base_url(); ?>asset/img/google-play.png" width="150">

                </div>
                <div class="box">
                    <p>Dikembangkan Oleh : </p>
                    <img src="<?= base_url(); ?>asset/img/logl.png" width="90">


                </div>
                <div class="box">
                    <p>Lebih Dekat dengan Kami!</p>
                    <img src="<?= base_url(); ?>asset/img/Instagram.png" width="49">
                    <img src="<?= base_url(); ?>asset/img/Facebook.png" width="52">

                </div>

            </div>
        </section>
        <p id="copyright"> Copyright @2019</p>

    </footer>

</body>

</html>