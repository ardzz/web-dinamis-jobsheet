<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #container {width: 300px; margin: auto; background: lightgrey; overflow: hidden; padding: 50px;}
        .kotak1 {width: 100px; height: 100px; background: #FF7F50; float: left;}
        .kotak2 {width: 100px; height: 100px; background: #DC143C; float: left;}
        .kotak3 {width: 100px; height: 100px; background: #008B8B; float: left;}
        input[type="submit"]{position: fixed; top: 175px; left: 648px;}
    </style>
</head>
<body>
    <div id="container">
        <div class="kotak1"></div>
        <div class="kotak2"></div>
        <div class="kotak3"></div>
    </div>
    <input type="submit" onclick="myFunction()" value="Hapus saya!">
    <script lang="Javascript">
        function myFunction(){
            var parent = document.getElementById("container");
            parent.removeChild(parent.lastChild);
        }
    </script>
</body>
</html>