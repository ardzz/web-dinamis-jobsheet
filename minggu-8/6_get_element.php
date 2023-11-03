<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            background-color: #f1f1f1;
            width: 100px;
            height: 100px;
            margin: 10px;
            border: solid #4c89a8;
        }
    </style>
</head>
<body>
<h1 id="judul">Belajar Javascript</h1>
<div id="elemen1">
    <p id="paragraf1">Paragraf 1</p>
</div>
<script>
    const judul = document.getElementById("judul");
    judul.style.color = "red";
    const paragraf1 = document.getElementById("paragraf1");
    paragraf1.style.color = "blue";
    const elemen1 = document.getElementById("elemen1");
    elemen1.style.backgroundColor = "green";
</script>
</body>
</html>