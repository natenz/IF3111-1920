<?php
$conn = mysqli_connect("localhost","root","",tugasbesarweb);


function tambah($data){
    global $conn;
    $comment = htmlspecialchars($data["comment"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $upload = htmlspecialchars($data["upload"]);
    $date = htmlspecialchars($data["date"]);

    $query = "INSERT INTO comment 
            VALUES 
            ('', '$comment', '$jenis', '$upload', '$date')
            ";
    mysqli_query($conn,$query);
}

?>