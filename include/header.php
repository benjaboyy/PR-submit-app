<?php
include('include/login.php');
$grav_url_sm = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION['email'] ) ) ) . "&d=" . "404" . "&s=" . 56;
?>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Dutch stamina ITG PR app">
    <meta name="keywords" content="itg, stamina pr, ddrexp, dutch">
    <meta name="author" content="Benjamin Vitters">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="manifest" href="manifest.json">
    <title>STAMINA PR</title>
</head>