<?php
$conn = mysqli_connect("localhost","root","",tugasbesarweb);


function query ($query){
    global $conn;
    $result = mysqli_query ($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows[]= $row;
    } 
    return $row;
}


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

function cariSearch($keyword){
    $query = " SELECT * FROM comment 
                WHERE 
                komentar LIKE '%$keyword' ";
            return query($query);
}

?>