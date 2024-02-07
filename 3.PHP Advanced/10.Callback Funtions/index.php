<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaIlGyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!--Biodata Diri-->
     <div class="Biodata">
        <h1>MY PROFIL</h1>
        <hr color="black">
        <hr color="black">
    </div>
    <div class="text-sisi">
        <p1>Hallo Nama saya Tutut Handayani</p>
        <p1>Dari kelas XI RPL </p>
        <p1> NIT : 2223618</p>
        <p1>Tanggal Praktikum 29 Januari 2024</p>
    </div>

<div class="isi">
    <h1>Callback Functions</h1>  
        <?php
        function my_callback($item) {
        return strlen($item);
        }

        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map("my_callback", $strings);
        print_r($lengths);
        ?>
<br>
        <?php
        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map( function($item) { return strlen($item); } , $strings);
        print_r($lengths);
        ?>
</br>
    <h1>Callbacks in User Defined Functions</h1>
        <?php
        function exclaim($str) {
        return $str . "! ";
        }

        function ask($str) {
        return $str . "? ";
        }

        function printFormatted($str, $format) {
        // Calling the $format callback function
        echo $format($str);
        }

        // Pass "exclaim" and "ask" as callback functions to printFormatted()
        printFormatted("Hello world", "exclaim");
        printFormatted("Hello world", "ask");
        ?>

        <?php
        echo "<style>
        body {backgroun-color : poederblue;}
        h1 {color : white;}
        <style>";
        ?>
</div>    
</body>
</html>
