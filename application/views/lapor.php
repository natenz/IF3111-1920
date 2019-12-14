<!DOCTYPE html>
<html>
    <head>
        <title> Laporan ! LAPOR! </title>
        <link rel="stylesheet" type="text/css" href="asset/css/stylelapor.css">

    </head>
    <body>
        <header>
            <div class="container">
                <div id="menukiri">
                  

                </div>
                <nav>
                    <ul>
                        <li class="active"><a href="lapor.php" > Tentang Lapor! </a></li>
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
        <!-- <br><br><br><br><br><br><br><br> -->
              
       <section id="showcoment">
            <div class="container">
                    <div id="search-box">
                            <form action="/search" id="search-form"method="get"target="_top">
                                 <input id="search-text"name="keyword" placeholder="Search Here..."typr="text"/>
                                 <button id="search-button"type="submit"name="cari">Search</button>
                            </form>
                    </div>
                    <div class="create">
                            <h4>Buat Laporan/Komentar
                                <a href=""><img src="asset/img/tambah.png" width="20px" height="20px" align="center"></a>
                            </h4>
                        </div>
                        <div class="comment">
                            <h5>Laporan/Komentar Terakhir
                                <hr>
                            </h5>
                            <div>                  
                               <?php foreach ($data as $key): 
                                    $id=$key['id_comment'];
                                    $komentar=$key['komentar'];
                                    $waktu=$key['date'];
                                    ?>  
                            <p> <?php echo $komentar;?>
                            </p>
                            <h5>Lampiran: <a style="text-align: right;">Waktu :<?php echo $waktu;?></a> <a href="">Lihat Selengkapnya ></a>
                                <hr>
                            </h5>
                            <div>
                            <?php endforeach;?>
                       </div>
                
            </div> 

        </section>
        <footer>
            <section id="spons">
                <div class="container">
                    <div class="box">
                        <p>Download Aplikasi Mobile LAPOR!</p>
                        <img src="asset/img/google-play.png" width="150">
    
                    </div>
                    <div class="box">
                            <p>Dikembangkan Oleh : </p>
                            <img src="asset/img/itera.png" width="90" >
                            
        
                     </div>
                    <div class="box">
                            <p>Lebih Dekat dengan Kami!</p>
                            <img src="asset/img/Instagram.png" width="49" >
                            <img src="asset/img/Facebook.png" width="52">
        
                        </div>
                   
                </div>
            </section>
            <p id="copyright" > Copyright  @2019</p>
    
        </footer>             
     </body>
     </html>