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
    <h1>The PHP Filter Extension</h1>
        <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach (filter_list() as $id =>$filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
        </table>

  <h1>Sanitize a String</h1>
        <?php
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
        ?>
   <h1>Validate an Integer</h1>
        <?php
        $int = 100;

        if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
        } else {
        echo("Integer is not valid");
        }
        ?>

    <h1>Tip: filter_var() and Problem With 0</h1>
        <?php
        $int = 0;

        if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
        } else {
        echo("Integer is not valid");
        }
        ?>

    <h1>Validate an IP Address</h1>
        <?php
        $ip = "127.0.0.1";

        if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo("$ip is a valid IP address");
        } else {
        echo("$ip is not a valid IP address");
        }
        ?>

    <h1>Sanitize and Validate an Email Address</h1>
        <?php
        $email = "john.doe@example.com";

        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
        } else {
        echo("$email is not a valid email address");
        }
        ?>

    <h1>Sanitize and Validate a URL</h1>
        <?php
        $url = "https://www.w3schools.com";

        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // Validate url
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("$url is a valid URL");
        } else {
        echo("$url is not a valid URL");
        }
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
