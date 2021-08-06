<?php
function connect()
{
    $conn = mysqli_connect(SERVER, USER, PASSWORD, DB);

    if (!$conn) { // Check connection
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");
    return $conn;
}

function execQuery($query)
{
    global $conn;
    if (mysqli_query($conn, $query)) {
        return true;
    }
    return false;
}