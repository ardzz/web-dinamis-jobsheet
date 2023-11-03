<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <title>Document</title>
</head>
<body>
<label for="kode">
    <input type="text" id="kode" placeholder="Kode barang">
</label>
<svg id="barcode">

</svg>
<br>
<button id="btn" onclick="generateQr()">Generate</button>
<script>
    function generateQr(){
        const text = document.getElementById("kode").value;
        JsBarcode("#barcode", text);
    }
</script>
</body>
</html>