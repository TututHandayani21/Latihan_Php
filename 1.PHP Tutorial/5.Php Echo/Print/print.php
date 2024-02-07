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
        <h1>Display Text</h1>
            <?php
        print "<h2>PHP is Fun!</h2>";
        print "<p>Hello world!</p>";
        print "<p>I'm about to learn PHP!</p>";
        ?> 


        <h1>Display Variables</h1>
        <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        print "<h2>" . $txt1 . "</h2>";
        print "<p>Study PHP at " . $txt2 . "<br><p/>";
        print $x + $y;
        ?>
        </div>

        <?php
        echo "<style>
        body {backgroun-color : poederblue;}
        h1 {color : black;}
        h2 {color : white;} 
        p {color : white;} 
        <style>";
        ?>
</div>    
</body>
</html>
