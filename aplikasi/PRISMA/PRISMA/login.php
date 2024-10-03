<!DOCTYPE html>
<html>

<head>
    <title>Dispekael Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Id User dan Password tidak sesuai !</div>";
        } else if ($_GET['pesan'] == "logindulu") {
            echo "<div class='alert'>Silahkan Login dulu !</div>";
        }
    }
    ?>

    <div class="kotak_login">
        <center><img src="assets/img/favicon.png"></center>
        <p class="tulisan_login"> WELCOME TO <B>PRISMA</B></p>
        <hr>

        <form action="cek_login.php" method="post">
            <P><label>Id</label></P>
            <input type="text" name="id" class="form_login" placeholder="Masukan id" required="required">
            <label>Password</label>
            <p><input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required"></p>

            <p><input type="submit" class="tombol_login" value="M A S U K"></p>
        </form>
    </div>
</body>

</html>