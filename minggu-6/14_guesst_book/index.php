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
    <div class="row">
        <h1>Buku Tamu</h1>
    </div>
    <form action="save_data.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <div class="mb-2">
                <label>
                    <input type="radio" value="1" name="gender">
                    Laki-laki
                </label>
                <label>
                    <input type="radio" value="0" name="gender">
                    Perempuan
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="interest" class="form-label">Peminatan</label>
            <?php
            $interests = [
                "Programming",
                "Networking",
                "Database",
                "Security",
                "Artificial Intelligence",
                "Machine Learning",
                "Internet of Things"
            ];

            foreach ($interests as $interest){
                echo "<div class='form-check'>";
                echo "<input class='form-check-input' type='checkbox' value='$interest' name='interest[]'>";
                echo "<label class='form-check-label'>$interest</label>";
                echo "</div>";
            }
            ?>
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
</form>
</div>
</body>
</html>