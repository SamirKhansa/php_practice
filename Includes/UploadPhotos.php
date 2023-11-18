<?php

session_start();

if (isset($_POST["submit"])) {
    $file = $_FILES["file"]["name"];
    $Pictures = file_get_contents("Gallery.json");
    $Pictures = json_decode($Pictures, true);

    if (isset($Pictures[$file])) {
        echo "<script>alert('User file already exists. Please choose a different file.'); window.location.href = '../Assigment1/Picture.php';</script>";
        exit();
    } else {
        $Pictures[$file] = [
            'file' => $file
        ];

        file_put_contents("Gallery.json", json_encode($Pictures, JSON_PRETTY_PRINT));
        $_SESSION["file"] = $file;
        header("location: ../Assigment1/Picture.php");
        exit();
    }
}
