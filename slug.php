<?php

$con = mysqli_connect("localhost","root","","location");

$getDataQuery = "SELECT id, name FROM unions WHERE 1";
$data = mysqli_query($con, $getDataQuery);
$data = mysqli_fetch_all($data, 1);

foreach ($data as $entry)
{
    $slug = strtolower($entry['name']);
    $id = $entry['id'];
    $query = "UPDATE unions SET slug = '$slug' WHERE id = '$id';";
    mysqli_query($con, $query);
}
