<?php

function addData($data)
{
    include '../db.php';

    $name = $_POST["name"];
    $genre = $data["genre"];
    $realese = $data["realese"];
    $season = $data["season"];
    $synopsis = $data["synopsis"];

    $query = "INSERT INTO movies VALUES('', '$name', '$genre', '$realese', '$season', '$synopsis')";

    $result = mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}