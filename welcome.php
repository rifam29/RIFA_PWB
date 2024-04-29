<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body style="font-family: Arial,
             sans-serif; background-color: #b3f52f;
             margin: 0; padding: 0; display: flex;
             flex-direction: column; align-items: center;
             justify-content: center; height: 100vh;">  

    <h1>SELAMAT DATANG</h1>

    <h4><?php echo $_GET["first-name"];?> <?php echo $_GET["last-name"];?> dengan jenis kelamin <?php echo $_GET["gender"];?> berkewarganegaraan <?php echo $_GET["nationality"];?> dan mempunyai skill berbahasa <?php
        if(isset($_GET['language'])) {
            $languages = $_GET['language'];
            echo "Menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
        }?> dengan bio <?php echo $_GET["bio"];?> Terima Kasih telah bergabung di website Special Rifa, Media untuk kita Belajar bersama!!! Jangan Lupa Bersenang senang :)</h4>

</body> 
</html>
