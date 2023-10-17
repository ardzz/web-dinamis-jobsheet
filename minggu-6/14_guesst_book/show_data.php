<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <table class="table table-info">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Peminatan</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data = file_get_contents(__DIR__ . "/data.json");
        $guess_book = json_decode($data, true);
        $x = 1;
        foreach ($guess_book as $guess){
            echo "<tr>";
            echo "<td>" . $x. "</td>";
            echo "<td>" . $guess["name"] . "</td>";
            echo "<td>" . $guess["email"] . "</td>";
            // 1 = laki-laki, 0 = perempuan
            $gender = $guess['gender'];
            if ($gender == 1){
                echo "<td>Laki-laki</td>";
            } else {
                echo "<td>Perempuan</td>";
            }
            echo "<td>" . implode(", ", $guess["interest"]) . "</td>";
            echo "</tr>";
            $x++;
        }
        ?>
    </table>
</div>
</body>
</html>