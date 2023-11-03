<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function welcomeMessage() {
            alert("Selamat datang di website saya");
        }

        function multipleParameter(a, b) {
            alert("Nilai a = " + a + " dan nilai b = " + b);
        }

        function chooseDrink(){
            const drink = document.getElementById("drink").value;
            const selected_drink = document.getElementById("selected_drink");
            selected_drink.innerHTML = "Anda memilih minuman " + drink;
        }
    </script>
</head>
<body>
<button onclick="welcomeMessage()">Klik saya</button>
<br><br>
<button onclick="multipleParameter(5, 10)">Klik untuk perkalian</button>
<br><br>
<select id="drink" onClick="chooseDrink()">
    <option value="coffee">Coffee</option>
    <option value="tea">Tea</option>
    <option value="milk">Milk</option>
</select>
<label for="drink" id="selected_drink"></label>
</body>
</html>