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
                    <h1>Throwing an Exception</h1>
                    <?php
            function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
            }

            echo divide(5, 0);
            ?>

            <h1>The try...catch Statement</h1>
            <?php
            function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
            }

            try {
            echo divide(5, 0);
            } catch(Exception $e) {
            echo "Unable to divide.";
            }
            ?>

            <h1>The try...catch...finally Statement</h1>
            <?php
            function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
            }

            try {
            echo divide(5, 0);
            } catch(Exception $e) {
            echo "Unable to divide. ";
            } finally {
            echo "Process complete.";
            }
            ?>

            <?php
            function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
            }

            try {
            echo divide(5, 0);
            } finally {
            echo "Process complete.";
            }
            ?>

            <h1>The Exception Object</h1>
            <?php
            function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero", 1);
            }
            return $dividend / $divisor;
            }

            try {
            echo divide(5, 0);
            } catch(Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code]
            $message";
            }
            ?>
</div>    
</body>
</html>
