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
<ul id="favorite_beverages">
    <li>coffee</li>
    <li>tea</li>
    <li>milk</li>
</ul>

<div id="introduction">
    <p>Hello, this is a paragraph.</p>
</div>

<button onclick="addBeverage()">Add Beverage</button>
<br><br>
<button onclick="addParagraph()">Add Paragraph</button>

<script>
    function addBeverage() {
        const list = document.getElementById("favorite_beverages");
        const beverage = document.createElement("li");
        beverage.textContent = "Juice";
        list.appendChild(beverage);
    }

    function addParagraph() {
        const introduction = document.getElementById("introduction");
        const paragraph = document.createElement("p");
        paragraph.textContent = "Hello, this is a paragraph added by Javascript.";
        introduction.appendChild(paragraph);
    }
</script>

</body>
</html>