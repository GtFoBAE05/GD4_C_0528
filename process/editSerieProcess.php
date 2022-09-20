<?php

function showSelectedSerie($id)
{
    include '../db.php';
    $query = "SELECT * FROM series WHERE id='$id'";
    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function editData($data, $id)
{
    include '../db.php';

    $name = $_POST["name"];
    $genre = implode(", ", $_POST["genre"]);
    $realese = $data["realese"];
    $episode = $data["episode"];
    $season = $data["season"];
    $synopsis = $data["synopsis"];

    $query = "UPDATE series SET name='$name', genre='$genre', realese='$realese', season='$season', synopsis='$synopsis', episode='$episode' WHERE ID= '$id'";

    $result = mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}