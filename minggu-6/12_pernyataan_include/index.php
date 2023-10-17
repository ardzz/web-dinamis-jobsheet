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
<?php
include_once "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $shoes_data = [
                    ["name" => "Nike Air Max 270",
                        "thumbnail" => "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/pyyixbczj6u5kiwhpjik/air-max-270-womens-shoes-Pgb94t.png",
                        "price" => 1500000,
                    ],
                    ["name" => "Nike Air Max 97",
                        "thumbnail" => "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/e43fee45-d340-4bd1-8f27-b07a537329ad/air-max-97-older-shoes-M2vYej.png",
                        "price" => 2000000,
                    ],
                    ["name" => "Nike Air Max 90",
                        "thumbnail" => "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/aa5a276b-715d-4da7-bac2-159edaed11b6/air-max-90-shoes-mnCmVT.png",
                        "price" => 1000000,
                    ],
                    ["name" => "Nike Air Max 95",
                        "thumbnail" => "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/44b44e0d-ec17-49bc-8e0a-52df0b936e8a/custom-nike-air-max-95-unlocked-by-you.png",
                        "price" => 2500000,
                    ],
                    ["name" => "Nike Air Max 720",
                        "thumbnail" => "https://image.goxip.com/aK8ACdQmiQFqcg9kzWivhbUnu3o=/fit-in/500x500/filters:format(jpg):quality(80):fill(white)/https:%2F%2Fimages.stockx.com%2Fimages%2FNike-Air-Max-720-Sea-Forest-W-Product.jpg",
                        "price" => 3000000,
                    ],
            ];
            ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($shoes_data as $key => $value) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><img src="<?= $value["thumbnail"] ?>" alt="<?= $value["name"] ?>" width="100"></td>
                        <td><?= $value["name"] ?></td>
                        <td>Rp <?= number_format($value["price"], 0, ",", ".") ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</div>
</body>
</html>