<?php

function addData($data)
{
    include '../db.php';

    $name = $_POST["name"];
    $genre = implode(", ", $_POST["genre"]);
    $realese = $data["realese"];
    $episode = $data["episode"];
    $season = $data["season"];
    $synopsis = $data["synopsis"];

    $query = "INSERT INTO series VALUES('', '$name', '$genre', '$realese', '$episode', '$season', '$synopsis')";

    $result = mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}