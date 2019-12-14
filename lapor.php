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
                <a href=""><img src="asset/img/potolapor.png" width="0px" height="50px" align="center"></a>

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
                    <?php  ?>
                    <div id="search-box" style="margin-bottom: 50px">
                            <form action="lapor.php" id="search-form"method="get"target="_top">
                                 <input id="search-text"name="cari" placeholder="Search Here..."typr="text"/>
                                 <input type="submit"value="Cari"/>
                            </form>
                        <div>                  
                            <?php 
                            if(isset($GET['cari'])){
                                $cari=$_GET['cari'];
                                echo "<b> Hasil Pencarian : ".$cari."<b>";
                            }
                            ?>

                        </div>
                            </div>
                   
                    <div class="create">
                            <h4>Buat Laporan/Komentar
                                <a href=""><img src="asset/img/add.png" width="20px" height="20px" align="center"></a>
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
                            <p> <?php echo $id;echo ". "; echo $komentar; ?>
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