<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login olshop nerro</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="proses-register.php" method="post">
                <h1>buat akun</h1>
            <div class="social-icon">
                <a href="" class="icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="icon"><i class="fa-solid fa-location-dot"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-youtube"></i></a>
            </div>
                <span>sign-up dengan</span>
                <input type="text" name="nama" id="" placeholder="nama kamu" required>
                <input type="text" name="username" id="" placeholder="username kamu" required>
                <input type="password" name="password" id="" placeholder="password" required>
                <input type="text" name="alamat" id="alamat" placeholder="masukan alamat">
                <input type="text" name="nomor_telepon" id="nomor_telepon" placeholder="masukan nomor telepon">
                <button type="submit">sign-up</button>
            </form>
        </div>
        <div class="form-container sign-in">
        <form action="cek_login.php" method="post">
                <h1>Log-in</h1>
                <div class="social-icon">
                <a href="" class="icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="icon"><i class="fa-solid fa-location-dot"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-youtube"></i></a>
            </div>
                <span>sign-in dengan</span>
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="password" required>
                <a href="">belum punya akun?</a>
                <button type="submit">sign-in</button>
            </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>selamat datang</h1>
                <p>masukan data pribadi kamu</p>
                <button class="hidden" id="sign-in" type="submit">sign-in</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>selamat datang kembali</h1>
                <p>masukan data pribadi kamu</p>
                <button class="hidden" id="sign-up" type="submit">sign-up</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>