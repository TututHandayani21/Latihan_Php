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
          
          <h1>Using preg_match()</h1>
          <?php
          $str = "Visit W3Schools";
          $pattern = "/w3schools/i";
          echo preg_match($pattern, $str); 
          ?>

          <h1>Using preg_match_all()</h1>
          <?php
          $str = "The rain in SPAIN falls mainly on the plains.";
          $pattern = "/ain/i";
          echo preg_match_all($pattern, $str);
          ?>

          <h1>Using preg_replace()</h1>
          <?php
          $str = "Visit Microsoft!";
          $pattern = "/microsoft/i";
          echo preg_replace($pattern, "W3Schools", $str);
          ?>

          <h1>Grouping</h1>
          <?php
          $str = "Apples and bananas.";
          $pattern = "/ba(na){2}/i";
          echo preg_match($pattern, $str);
          ?>

</div>    
</body>
</html>
