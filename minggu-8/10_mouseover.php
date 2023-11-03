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
<p>Point your mouse on the red square below:</p>
<div onmouseover="mOver(this)" onmouseout="mOut(this)" style="height:100px;width:100px;background-color:red;"></div>
<script>
    function mOver(obj) {
        obj.innerHTML = "Thank You"
    }

    function mOut(obj) {
        obj.innerHTML = "Mouse Over Me"
    }
</script>
</body>
</html>