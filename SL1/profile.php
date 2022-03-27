<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="navbar">
        <div class="logo">
            <h1>APLIKASI PENGELOLAAN KEUANGAN</h1>
        </div>

        <div class="links">
            <a href="home.php" >HOME</a>
            <a href="profile.php">PROFILE</a>
            <a href="login.php">LOGOUT</a>
        </div>
</div>
    
<table>

    <tr>
        <td>Nama Depan </td>
        <td>
        <?php
            echo $_SESSION['namaDepan'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Nama Tengah</td>
        <td>
        <?php
            echo $_SESSION['namaTengah'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Nama Belakang</td>
        <td>
        <?php
            echo $_SESSION['namaBelakang'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Tempat Lahir</td>
        <td>
        <?php
            echo $_SESSION['tempatLahir'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td>
        <?php
            echo $_SESSION['tanggalLahir'];
        ?>
        </td>
    </tr>

    <tr>
        <td>NIK</td>
        <td>
        <?php
            echo $_SESSION['nik'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Warga Negara</td>
        <td>
        <?php
            echo $_SESSION['wargaNegara'];
        ?>
        </td>
    </tr>

    <tr>
        <td>email</td>
        <td>
        <?php
            echo $_SESSION['email'];
        ?>
        </td>
    </tr>

    <tr>
        <td>No HP</td>
        <td>
        <?php
            echo $_SESSION['noHP'];
        ?>
        </td>
        
    </tr>

    <tr>
        <td>Alamat</td>
        <td>
        <?php
            echo $_SESSION['alamat'];
        ?>
        </td>
        
    </tr>

    <tr>
        <td>Kode Pos</td>
        <td>
        <?php
            echo $_SESSION['kodePos'];
        ?>
        </td>
        
    </tr>

    <tr>
        <td>Foto Profil</td>
        <td>
        <img src="assets/<?php echo $_SESSION['fotoProfil']['name']?>">
        </td> 
    </tr>


        
    </table>

</body>
</html>