Contoh preg_match untuk memvalidasi email <br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    Email : <input type="text" name="email"><br>
    <input type="submit" value="Cek">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        if (empty($_POST["email"])){
            echo "Email harus diisi";
        }else{
            $ekspresi = '/^[a-zA-Z0-9+.-]+@[a-zA-Z0-9.-]+$/';
        }
        if (preg_match($ekspresi, $email)){
            echo "Alamat email <b>".$email."</b> valid";
        }
        else{
            echo "Alamat email <b>".$email."</b> tidak valid";
        }
    }
