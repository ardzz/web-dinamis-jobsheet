<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $nama_file = "counter.DAT";
    if (file_exists($nama_file)){
        $file = fopen($nama_file, "r");
        $pencacah = (integer) trim(fgets($file, 255));
        $pencacah++;
        fclose($file);
    }
    else
        $pencacah = 1;
    $file = fopen($nama_file, "w");
    fputs($file, $pencacah);
    fclose($file);
    printf("Anda adalah pengunjung ke-$pencacah");
?>
</body>
</html>