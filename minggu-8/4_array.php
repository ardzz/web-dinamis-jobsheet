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
<script>
    const array = [];
    array.push("Rizky Khapidsyah");
    array.push(20);
    array.push(false);
    array.push("Jl. Merpati no 123");
    array.push("Halo " + array[0] + ", umur saya " + array[1] + " tahun, alamat saya di " + array[3] + ", dan saya status menikah " + array[2] + ".");
    document.writeln(array[4]);
    for (let i = 0; i < array.length; i++) {
        document.writeln(array[i]);
    }
</script>
</body>
</html>