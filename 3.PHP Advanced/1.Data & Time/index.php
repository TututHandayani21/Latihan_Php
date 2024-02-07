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
                
        <h1>Get a Date</h1>
        <?php
        echo "<p>Today is " . date("Y/m/d") . "</p>";
        echo "<p>Today is " . date("Y.m.d") . "</p>";
        echo "<p>Today is " . date("Y-m-d") . "</p>";
        echo "<p>Today is " . date("l</p>");
        ?>

        <h1>PHP Tip - Automatic Copyright Year</h1>

        © 2010-<?php echo date("Y</p>");
        ?>

        <h1>Get a Time</h1>
        <?php
        echo "<p>The time is " . date("h:i:sa</p>");
        ?>


        <h1>Get Your Time Zone</h1>
        <?php
        date_default_timezone_set("<p>America/New_York</p>");
        echo "<p>The time is " . date("h:i:sa</p>");
        ?>


        <h1>Create a Date With mktime()</h1>
        <?php
        $d=mktime(11, 14, 54, 8, 12, 2014);
        echo "<p>Created date is " . date("Y-m-d h:i:sa</p>", $d);
        ?>


        <h1>Create a Date From a String With strtotime()</h1>
        <?php
        $d=strtotime("<p>10:30pm April 15 2014</p>");
        echo "<p>Created date is " . date("Y-m-d h:i:sa</p>", $d);
        ?>

        <?php
        $d=strtotime("<p>tomorrow</p>");
        echo date("<p>Y-m-d h:i:sa", $d) . "</p>";

        $d=strtotime("next Saturday");
        echo date("<p>Y-m-d h:i:sa", $d) . "</p>";

        $d=strtotime("<p>+3 Months</p>");
        echo date("<p>Y-m-d h:i:sa", $d) . "</p>";
        ?>


        <h1>More Date Examples</h1>
        <?php
        $startdate = strtotime("<p>Saturday</p>");
        $enddate = strtotime("<p>+6 weeks</p>", $startdate);

        while ($startdate < $enddate) {
        echo date("<p>M d", $startdate) . "</p>";
        $startdate = strtotime("<p>+1 week</p>", $startdate);
        }
        ?>

        <?php
        $d1=strtotime("<p>July 04</p>");
        $d2=ceil(($d1-time())/60/60/24);
        echo "<p>There are " . $d2 ." days until 4th of July.</p>";
        ?>

        <?php
                echo "<style>
                body {backgroun-color : poederblue;}
                h1 {color : black;}
                p  {color : white;}
                <style>";
        ?>

</div>    
</body>
</html>
