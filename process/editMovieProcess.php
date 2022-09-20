<?php

function showSelectedMovie($id)
{
    include '../db.php';
    $query = "SELECT * FROM movies WHERE id='$id'";
    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function ubahData($data, $id)
{
    include '../db.php';

    $name = $_POST["name"];
    $genre = $data["genre"];
    $realese = $data["realese"];
    $season = $data["season"];
    $synopsis = $data["synopsis"];

    $query = "UPDATE movies SET name='$name', genre='$genre', realese='$realese', season='$season', synopsis='$synopsis' WHERE ID= '$id'";

    $result = mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}