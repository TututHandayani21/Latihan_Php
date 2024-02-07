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
    <h1>Validate an Integer Within a Range</h1>
        <?php
        $int = 122;
        $min = 1;
        $max = 200;

        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("Variable value is not within the legal range");
        } else {
        echo("Variable value is within the legal range");
        }
        ?>

    <h1>Validate IPv6 Address</h1>
         <?php
        $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

        if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo("$ip is a valid IPv6 address");
        } else {
        echo("$ip is not a valid IPv6 address");
        }
        ?>
    <h1>Validate URL - Must Contain QueryString</h1>
        <?php
        $url = "https://www.w3schools.com";

        if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url is a valid URL with a query string");
        } else {
        echo("$url is not a valid URL with a query string");
        }
        ?>

    <h1>Remove Characters With ASCII Value > 127</h1>
        <?php
        $str = "<h1>Hello WorldÆØÅ!</h1>";

        $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        echo $newstr;
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
